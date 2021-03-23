<?php

namespace App\Controllers;
use App\Models\AccountModel;

class Pages extends BaseController
{
    protected $socialModel;

    public function __construct()
    {
        $this->socialModel = new AccountModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login Collector | Home',
            'social' => $this->socialModel->getData('1'),
            'games' => $this->socialModel->getData('2'),
            'other' => $this->socialModel->getData('3')
        ];
        return view('pages/index', $data);
    }
    public function social()
    {
        $data = [
            'title' => 'Login Collector | Social Media Account',
            'social' => $this->socialModel->getData('1'),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/social_account', $data);
    }
    public function games() {
        $data = [
            'title' => 'Login Collector | Social Media Account',
            'social' => $this->socialModel->getData('2'),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/games_account', $data);
    }
    public function other() {
        $data = [
            'title' => 'Login Collector | Social Media Account',
            'social' => $this->socialModel->getData('3'),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/other_account', $data);
    }

    
}
