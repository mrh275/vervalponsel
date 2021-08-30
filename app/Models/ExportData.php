<?php

namespace App\Models;

use CodeIgniter\Model;

class ExportData extends Model
{
	public function getAllData()
	{
		return $this->db->table('data-ponsel')->get()->getResultArray();
	}
}
