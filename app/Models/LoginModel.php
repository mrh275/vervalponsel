<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	public function cekData($data)
	{
		return $this->db->table('user')->where(['username' => $data['username']])->get()->getRowArray();
	}
}
