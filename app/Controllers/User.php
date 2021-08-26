<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function dashboard()
	{
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
		if ($this->request->isAJAX()) {

			$msg = [
				'data'	=> view('page/profile')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function dataPonsel()
	{
		if ($this->request->isAJAX()) {

			$msg = [
				'data'	=> view('page/data-ponsel')
			];

			echo json_encode($msg);
		} else {
			exit('Halaman tidak ditemukan!');
		}
	}

	public function logout()
	{
		session()->destroy();

		return redirect()->to('/login');
	}
}
