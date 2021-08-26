<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function home()
    {
        $data = [
            'title'     => 'Login | Verval Ponsel SMA Negeri 1 Rawamerta'
        ];

        return view('portal/login', $data);
    }

    public function user()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            if (!$this->validate([
                'username'  => [
                    'rules'     => 'required[username]',
                    'errors'    => [
                        'required'  => 'Username wajib diisi!'
                    ]
                ],
                'password'  => [
                    'rules'     => 'required[password]',
                    'errors'    => [
                        'required'  => 'Password wajib diisi!'
                    ]
                ]
            ])) {
                $msg = [
                    'error' => [
                        'username'  => $validation->getError('username'),
                        'password'  => $validation->getError('password')
                    ],
                ];

                echo json_encode($msg);
            } else {
                $data = [
                    'username'  => $this->request->getVar('username'),
                    'password'  => $this->request->getVar('password')
                ];

                $sesi = [
                    'nis'   => $data['username']
                ];

                $dataHasil = $this->loginModel->cekData($data);

                if ($dataHasil == false) {
                    $msg = [
                        'nihil'    => 'Akun tidak ditemukan!'
                    ];
                } else {
                    if ($data['password'] != $dataHasil['password']) {
                        $msg = [
                            'pwError'   => 'Kata sandi salah!'
                        ];
                    } else {
                        $msg = [
                            'sukses'    => 'Login berhasil'
                        ];
                        session()->set($sesi);
                    }
                }

                echo json_encode($msg);
            };
        };
    }
}
