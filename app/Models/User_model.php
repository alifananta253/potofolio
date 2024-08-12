<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
	public function getuser()
	{
		$builder = $this->db->table('tbl_user');
		return $builder->get();
	}



	public function saveuser($data)
	{
		$query = $this->db->table('tbl_user')->insert($data);
		return $query;
	}

	public function updateuser($data, $id)
	{
		$query = $this->db->table('tbl_user')->update($data, array('id_user' => $id));
		return $query;
	}

	public function hapus($id_user)
	{
		$query = $this->db->table('tbl_user')->delete(array('id_user' => $id_user));
		return $query;
	}
}
