<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('user')) {
			if (session()->getFlashdata('validation')) {
				$data = [
					'validation' => session()->getFlashdata('validation'),
					'message' => session()->getFlashdata('message')
				];
			} else {
				$data = [
					'validation' => \Config\Services::validation(),
					'message' => session()->getFlashdata('message')
				];
			}
			return view('pmb/index', $data);
		} else {
			return redirect()->to('/');
		}
	}
}
