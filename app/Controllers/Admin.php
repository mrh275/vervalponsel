<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function login()
	{
		$data = [
			'title'	=> 'Login Admin | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('admin/login', $data);
	}

	public function dashboard()
	{
		$data = [
			'title'	=> 'Dashboard Admin | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('admin/dashboard', $data);
	}

	public function dataPonsel()
	{
		$data = [
			'title'			=> 'Data Ponsel | Verval Ponsel SMA Negeri 1 Rawamerta',
			'dataPonsel'	=> $this->adminModel->getDataPonsel()
		];

		return view('admin/data-ponsel', $data);
	}

	public function akunSiswa()
	{
		$data = [
			'title'			=> 'User Siswa | Verval Ponsel SMA Negeri 1 Rawamerta',
		];

		return view('admin/akun-siswa', $data);
	}

	public function getUserAkun()
	{
		if ($this->request->isAJAX()) {

			$data = [
				'akunSiswa'	=> $this->adminModel->getUserSiswa()
			];

			$msg = [
				'sukses' => view('admin/data-ponsel-table', $data),
			];

			echo json_encode($msg);
		}
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
