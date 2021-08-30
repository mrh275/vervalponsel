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
}
