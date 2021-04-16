<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('user')) {
			return view('pmb/index');
		} else {
			return redirect()->to('/');
		}
	}
}
