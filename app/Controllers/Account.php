<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Account extends BaseController
{
    protected $accountModel;

    public function __construct()
    {
        $this->accountModel = new AccountModel();
    }

    public function create()
    {
        $user = session()->get('user');

        if(!session()->has('user')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Login Collector | Add Account',
            'validation' => \Config\Services::validation(),
            'user' => $user['id']
        ];
        return view('pages/create', $data);
    }

    public function save()
    {
        //validasi
        if (!$this->validate([
            'account-type' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} field required',
                ]
            ],
            'account' => [
                'rules' => 'required|is_unique[account.account]',
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
            return redirect()->to('/account/create')->withInput();
        }
        $this->accountModel->save([
            'account_type' => $this->request->getVar('account-type'),
            'account' => $this->request->getVar('account'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashData('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');

        return redirect()->to('/pages');
    }

    public function passwordUpdate()
    {
        $this->accountModel->save([
            'id' => $this->request->getVar('id'),
            'password' => $this->request->getVar('password')
        ]);
        session()->setFlashData('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');

        return redirect()->to('/pages');
    }

    public function socialUpdate()
    {
        $this->accountModel->save([
            'id' => $this->request->getVar('id'),
            'account_type' => $this->request->getVar('account-type'),
            'account' => $this->request->getVar('account'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);
        session()->setFlashData('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');

        return redirect()->to('/pages');
    }

    public function socialDelete($id)
    {
        $this->accountModel->delete($id);

        session()->setFlashData('pesan', 'Data Berhasil Dihapus');

        return redirect()->to('/');
    }
}
