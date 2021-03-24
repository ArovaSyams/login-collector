<?php

namespace App\Controllers;
use App\Models\AccountModel;
use App\Models\AccountTypeModel;
use App\Models\LogoModel;

class Pages extends BaseController
{
    protected $socialModel;
    protected $accountTypeModel;
    protected $logoModel;

    public function __construct()
    {
        $this->socialModel = new AccountModel();
        $this->accountTypeModel = new AccountTypeModel();
        $this->logoModel = new LogoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login Collector - Home',
            'accountType' => $this->accountTypeModel->getData(),
            'account' => $this->socialModel,
            // 'social' => $this->socialModel->where(['account_type' => 1])->limit(5)->find(),
            // 'games' => $this->socialModel->where(['account_type' => 2])->limit(5)->find(),
            // 'other' => $this->socialModel->where(['account_type' => 3])->limit(5)->find(),
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/index', $data);
    }
    public function social()
    {
        $data = [
            'title' => 'Social Media Account -  Login Collector',
            'social' => $this->socialModel->getData('1'),
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/social_account', $data);
    }
    public function games() {
        $data = [
            'title' => 'Games Account -  Login Collector',
            'social' => $this->socialModel->getData('2'),
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/games_account', $data);
    }
    public function other() {
        $data = [
            'title' => 'Other Account -  Login Collector',
            'social' => $this->socialModel->getData('3'),
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/other_account', $data);
    }
    public function logo() {
        $data = [
            'title' => 'Logos - Login Collector',
            'validation' => \Config\Services::validation(),
            'logo' => $this->logoModel->getData()
        ];
        return view('pages/logo', $data);
    }
    
}
