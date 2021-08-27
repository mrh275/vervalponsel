<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function dashboard()
	{
		if (!session()->get('nis')) {
			return redirect()->to('login');
		}

		$data = [
			'title'	=> 'Dashboard | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('user/dashboard', $data);
	}

	public function home()
	{
		if ($this->request->isAJAX()) {

			$msg = [
				'data'	=> view('page/dashboard')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function profile()
	{
		if (!session()->get('nis')) {
			return redirect()->to('login');
		}

		$data = [
			'title'	=> 'Profile | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('user/profile', $data);
	}

	public function dataPonsel()
	{
		if (!session()->get('nis')) {
			return redirect()->to('login');
		}

		$data = [
			'title'	=> 'Data Ponsel | Verval Ponsel SMA Negeri 1 Rawamerta'
		];

		return view('user/data-ponsel', $data);
	}

	public function logout()
	{
		session()->destroy();

		return redirect()->to('/login');
	}

	public function getProfile()
	{

		if ($this->request->isAJAX()) {

			$nis = session()->get('nis');

			$msg = [
				'data' => $this->userModel->getUserProfile($nis)
			];

			echo json_encode($msg);
		}
	}

	public function getPonsel()
	{

		if ($this->request->isAJAX()) {

			$nis = session()->get('nis');

			$msg = [
				'data' => $this->userModel->getDataPonsel($nis)
			];

			echo json_encode($msg);
		}
	}

	public function editProfile()
	{
		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'nama'  => [
					'rules'     => 'required[nama]',
					'errors'    => [
						'required'  => 'Nama wajib diisi!'
					]
				],
				'tempatLahir'  => [
					'rules'     => 'required[tempatLahir]',
					'errors'    => [
						'required'  => 'Tempat Lahir wajib diisi!'
					]
				],
				'tanggalLahir' => [
					'rules'		=> 'required[tanggalLahir]',
					'errors'	=> [
						'required' => 'Tanggal Lahir wajib diisi!'
					]
				],
				'email'		=> [
					'rules'		=> 'valid_email',
					'errors'	=> [
						'valid_email'	=> 'Harap masukan email yang valid!'
					]
				]
			])) {
				$msg = [
					'error' => [
						'nama'  => $validation->getError('nama'),
						'tempatLahir'  => $validation->getError('tempatLahir'),
						'tanggalLahir'  => $validation->getError('tanggalLahir'),
						'email'  => $validation->getError('email'),
					],
				];

				echo json_encode($msg);
			} else {
				$nis = session()->get('nis');

				$data = [
					'nis'			=> $nis,
					'nama'  		=> $this->request->getVar('nama'),
					'kelas'  		=> $this->request->getVar('kelas'),
					'tempat_lahir' 	=> $this->request->getVar('tempatLahir'),
					'tanggal_lahir'	=> $this->request->getVar('tanggalLahir'),
					'email'			=> $this->request->getVar('email'),
					'alamat'		=> $this->request->getVar('alamat')
				];

				$this->userModel->updateProfile($data);

				$msg = [
					'sukses' => 'Data berhasil diperbaharui'
				];


				echo json_encode($msg);
			};
		};
	}

	public function editPonsel()
	{
		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();

			if (!$this->validate([
				'nama'  => [
					'rules'     => 'required[nama]',
					'errors'    => [
						'required'  => 'Nama wajib diisi!'
					]
				],
				'noHP'  => [
					'rules'     => 'required[noHP]|numeric',
					'errors'    => [
						'required'  => 'Nomor HP wajib diisi!',
						'numeric'	=> 'Hanya masukan angka saja'
					]
				],
				'isActive' => [
					'rules'		=> 'required[isActive]',
					'errors'	=> [
						'required' => 'Status Nomor HP wajib diisi!'
					]
				],
				'kepemilikan'		=> [
					'rules'		=> 'required[kepemilikan]',
					'errors'	=> [
						'required'	=> 'Status kepemilikan nomor hp wajib diisi!'
					]
				]
			])) {
				$msg = [
					'error' => [
						'nama'  => $validation->getError('nama'),
						'nomorHP'  => $validation->getError('noHP'),
						'isActive'  => $validation->getError('isActive'),
						'kepemilikan'  => $validation->getError('kepemilikan'),
					],
				];

				echo json_encode($msg);
			} else {
				$nis = session()->get('nis');

				$data = [
					'nis'			=> $nis,
					'nama'  		=> $this->request->getVar('nama'),
					'kelas'  		=> $this->request->getVar('kelas'),
					'nomor_hp' 		=> $this->request->getVar('noHP'),
					'is_active'		=> $this->request->getVar('isActive'),
					'kepemilikan'	=> $this->request->getVar('kepemilikan'),
				];

				$this->userModel->updatePonsel($data);

				$msg = [
					'sukses' => 'Data berhasil diperbaharui'
				];


				echo json_encode($msg);
			};
		};
	}
}
