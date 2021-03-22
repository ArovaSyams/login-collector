<?php

namespace App\Controllers;
use App\Models\SocialModel;

class Pages extends BaseController
{
    protected $socialModel;

    public function __construct()
    {
        $this->socialModel = new SocialModel();
    }

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
            'title' => 'Login Collector | Login Collection',
            'social' => $this->socialModel->getData()
        ];
        return view('pages/login_collection', $data);
    }

    
}
