<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	public function getUserProfile($data)
	{
		return $this->db->table('user-profile')->where(['nis' => $data])->get()->getRowArray();
	}

	public function getDataPonsel($data)
	{
		return $this->db->table('data-ponsel')->where(['nis' => $data])->get()->getRowArray();
	}

	public function updateProfile($data)
	{
		$this->db->table('user-profile')->where(['nis' => $data['nis']])->update($data);
	}

	public function updatePonsel($data)
	{
		$this->db->table('data-ponsel')->where(['nis' => $data['nis']])->update($data);
	}

	public function updatePassword($data)
	{
		$this->db->table('user')->where(['username' => $data['username']])->update($data);
	}
}
