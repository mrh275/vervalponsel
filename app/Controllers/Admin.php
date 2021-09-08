<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function login()
	{
		if (session()->get('admin')) {
			return redirect()->to('admin/dashboard');
		}

		$data = [
			'title'	=> 'Login Admin | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('admin/login', $data);
	}

	public function dashboard()
	{
		if (!session()->get('admin')) {
			return redirect()->to('admin/login');
		}

		$data = [
			'title'	=> 'Dashboard Admin | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('admin/dashboard', $data);
	}

	public function dataPonsel()
	{
		if (!session()->get('admin')) {
			return redirect()->to('admin/login');
		}

		$data = [
			'title'			=> 'Data Ponsel | Verval Ponsel SMA Negeri 1 Rawamerta',
			'dataPonsel'	=> $this->adminModel->getDataPonsel()
		];

		return view('admin/data-ponsel', $data);
	}

	public function akunSiswa()
	{
		if (!session()->get('admin')) {
			return redirect()->to('admin/login');
		}

		$data = [
			'title'			=> 'User Siswa | Verval Ponsel SMA Negeri 1 Rawamerta',
			'akunSiswa'	=> $this->adminModel->getUserSiswa()
		];

		return view('admin/akun-siswa-table', $data);
	}

	public function gantiPasswordSiswa()
	{
		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'password1'  => [
					'rules'     => 'min_length[8]',
					'errors'    => [
						'min_length'  => 'Kata Sandi minimal 8 karakter!'
					]
				],
				'password2'  => [
					'rules'     => 'required[password2]|matches[password1]',
					'errors'    => [
						'required'  => 'Konfirmasi Kata Sandi wajib diisi!',
						'matches'	=> 'Konfirmasi kata sandi tidak sesuai!'
					]
				],
			])) {
				$msg = [
					'error' => [
						'password1'  => $validation->getError('password1'),
						'password2'  => $validation->getError('password2'),
					],
				];

				echo json_encode($msg);
			} else {
				$sesi = [
					'nis' 	=> $this->request->getVar('nis'),
					'nama'	=> $this->request->getVar('nama'),
					'kelas'	=> $this->request->getVar('kelas')
				];

				$data = [
					'username'		=> $sesi['nis'],
					'password' 		=> $this->request->getVar('password1'),
					'nama'  		=> $sesi['nama'],
					'email'			=> 'siswa@siswa.com',
					'kelas'  		=> $sesi['kelas'],
				];

				$this->userModel->updatePassword($data);

				$msg = [
					'sukses' => 'Data berhasil diperbaharui'
				];


				echo json_encode($msg);
			};
		};
	}
}
