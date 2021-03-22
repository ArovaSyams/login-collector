<?php

namespace App\Controllers;
use App\Models\SocialModel;

class Social extends BaseController
{
    protected $socialModel;

    public function __construct()
    {
        $this->socialModel = new SocialModel();
    }

	public function create()
    {
        $data = [
            'title' => 'Login Collector | Add Account',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/social/create', $data);
    }

    public function save()
    {
        //validasi
        if (!$this->validate([
            'account' => [
                'rules' => 'required|is_unique[social_account.account]',
                'errors' => [
                    'required' => '{field} field required',
                    'is_unique' => '{field} field must be unique'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} field required',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} field required',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} field required',
                ]
            ],

        ])) {
            return redirect()->to('/social/create')->withInput();
        }
        $this->socialModel->save([
            'account' => $this->request->getVar('account'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashData('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/login-collection');
    }
}