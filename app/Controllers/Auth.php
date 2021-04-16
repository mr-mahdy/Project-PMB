<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('user')) {
            return redirect()->to('/pmb');
        }
        if (session()->getFlashdata('validation')) {
            $data = [
                'validation' => session()->getFlashdata('validation')
            ];
        } else {
            $data = [
                'validation' => \Config\Services::validation()
            ];
        }
        return view('auth/login', $data);
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


        // Login Client API
        $client = new \GuzzleHttp\Client();
        $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/klien/auth/login';

        $data = array(
            'email' => 'klien-api@gmail.com',
            'password' => 'klien1234'
        );
        $response = $client->post($url, [
            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'body'    => json_encode($data)
        ]);
        $responseClient = json_decode($response->getBody());

        // Login Pengguna Situ

        // Pengecekan login user situ
        try {
            $url = 'https://prototipe.unpas.ac.id/situ/api/public/api-v1/user/login';

            $data = array(
                'nama' => $this->request->getVar('nama'),
                'sandi' => $this->request->getVar('sandi')
            );
            $response = $client->post($url, [
                'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json', 'Token' => $responseClient->data->client->token],
                'body'    => json_encode($data)
            ]);
            $responseUser = json_decode($response->getBody(), true);
            session()->set('user', $responseUser);
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
        if (!session()->get('success')) {
            return redirect()->to('/');
        }
        session()->remove('user');
        return redirect()->to('/');
    }
}
