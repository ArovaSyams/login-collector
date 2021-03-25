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
    protected $user;
    protected $userAcc;

    public function __construct()
    {
        $this->socialModel = new AccountModel();
        $this->accountTypeModel = new AccountTypeModel();
        $this->logoModel = new LogoModel();
        $this->user = session()->get('user');
        $this->userAcc = $this->socialModel->where('session', $this->user['id']);
    }

    public function index()
    {
        session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Login Collector - Home',
            'accountType' => $this->accountTypeModel->getData(),
            'account' => $this->userAcc,
            'where' => $this->logoModel,
            'user' => $this->user['username'],
            'validation' => \Config\Services::validation()
        ];
        return view('pages/index', $data);
    }
    public function social()
    {
        session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Social Media Account -  Login Collector',
            'social' => $this->userAcc->getData('1'),
            'user' => $this->user['username'],
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/social_account', $data);
    }
    public function games() 
    {
        session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Games Account -  Login Collector',
            'social' => $this->userAcc->getData('2'),
            'user' => $this->user['username'],
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/games_account', $data);
    }
    public function other() 
    {
        session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Other Account -  Login Collector',
            'social' => $this->userAcc->getData('3'),
            'user' => $this->user['username'],
            'where' => $this->logoModel,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/other_account', $data);
    }
    public function logo() 
    {
        session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Logos - Login Collector',
            'validation' => \Config\Services::validation(),
            'user' => $this->user['username'],
            'logo' => $this->logoModel->getData()
        ];
        return view('pages/logo', $data);
    }
    
}
