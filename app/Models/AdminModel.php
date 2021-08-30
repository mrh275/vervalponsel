<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
	public function cekData($data)
	{
		return $this->db->table('admin')->where(['username' => $data['username']])->get()->getRowArray();
	}

	public function getDataPonsel()
	{
		return $this->db->table('data-ponsel')->get()->getResultArray();
	}

	public function getUserSiswa()
	{
		return $this->db->table('user')->get()->getResultArray();
	}
}
