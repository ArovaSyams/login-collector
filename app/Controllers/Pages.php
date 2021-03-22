<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Login Collector | Home'
        ];
		return view('pages/index', $data);
	}
	public function loginCollection()
	{
        $data = [
            'title' => 'Login Collector | Login Collection'
        ];
		return view('pages/login_collection', $data);
	}
}