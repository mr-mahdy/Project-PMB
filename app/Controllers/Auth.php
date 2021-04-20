<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $client;
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function index()
    {
        if (session()->get('user')) {
            return redirect()->to('/pmb');
        }
        if (session()->getFlashdata('validation')) {
            $data = [
                'validation' => session()->getFlashdata('validation'),
            ];
        } else {
            $data = [
                'validation' => \Config\Services::validation()
            ];
        }
        return view('auth/login', $data);
    }

    public function loginClientAPI()
    {

        // Login Client API
        $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/klien/auth/login';

        $data = array(
            'email' => 'klien-api@gmail.com',
            'password' => 'klien1234'
        );
        $response = $this->client->post($url, [
            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'body'    => json_encode($data)
        ]);
        return json_decode($response->getBody());
    }

    public function loginUser($nama, $sandi)
    {
    }

    public function login()
    {
        // validasi input data
        if (!$this->validate([
            'nama' => 'required',
            'sandi' => 'required|min_length[3]'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('validation', $validation);
            return redirect()->to('/');
        }

        $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/user/login';
        $responseClient = $this->loginClientAPI();
        $nama = $this->request->getVar('nama');
        $sandi = $this->request->getVar('sandi');
        $data = array(
            'nama' => $nama,
            'sandi' => $sandi
        );

        // Pengecekan login user situ
        try {
            // Login Pengguna Situ
            $response = $this->client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'token' => $responseClient->data->client->token
                ],
                'body'    => json_encode($data)
            ]);
            $responseUser = json_decode($response->getBody(), true);
            session()->set('user', $responseUser);
            session()->set('token', $responseClient->data->client->token);
            return redirect()->to('/pmb');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseError = json_decode($response->getBody()->getContents());
            session()->setFlashData('message', $responseError->message);
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        // dd(session()->get('user'));
        try {
            $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/user/logout';
            $response = $this->client->delete($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'username' => '00' . session()->get('user')['kode-pengguna'],
                    'token' => session()->get('token')
                ]
            ]);

            session()->remove('user');
            session()->remove('token');
            return redirect()->to('/');
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseError = json_decode($response->getBody()->getContents());
            dd($responseError->message);
        }
    }

    public function changePassword()
    {
        // validasi input data
        if (!$this->validate([
            'current_password' => 'required|min_length[5]',
            'new_password' => 'required|min_length[5]',
            'password_confirmation' => 'required|min_length[5]|matches[new_password]'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('validation', $validation);
            return redirect()->to('/pmb');
        }
        // Change Password User API

        $data = array(
            'current_password' => $this->request->getVar('current_password'),
            'new_password' => $this->request->getVar('new_password'),
            'password_confirmation' => $this->request->getVar('password_confirmation')
        );

        try {
            $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/user/change-password';
            $response = $this->client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'username' => '00' . session()->get('user')['kode-pengguna'],
                    'token' => session()->get('token')
                ],
                'body' => json_encode($data)
            ]);
            $responseClient = json_decode($response->getBody());
            session()->setFlashData('message', $responseClient->message);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseError = json_decode($response->getBody()->getContents());
            session()->setFlashData('message', $responseError->message);
        }
        return redirect()->to('/pmb');
    }
}
