<?php

/**
 * @Author: Gilbaskoro
 * @Date:   2021-02-15 13:42:16
 * @Last Modified by:   Gilbaskoro
 * @Last Modified time: 2021-10-06 10:57:09
 */
namespace App\Models;
use CodeIgniter\Model;

// CLASS INI AKAN MEMBACA DATABASE DEFAULT
class Sertifikat_m extends Model{

	public function get_karyawan($nik=null){
		if($nik==null)
			return $this->db->table('SDMKaryawan_RSE')->getWhere(['bt_aktif'=>1])->getResult();
		else
			return $this->db->table('SDMKaryawan_RSE')->getWhere(['bt_aktif'=>1,'id_kary'=>$nik])->getRow();
	}

	//------------------------------------------------------------------------------
	public function get_where($table,$where=null){
		return $this->db->table($table)->getWhere($where);
	}

	/*public function get_where_order($table,$where=null,$order){
		return $this->db->table($table)->getWhere($where)->orderBy($order);
	}*/

	public function select($select=null, $table){
		return $this->db->table($table)->select($select)->get();  
	}

	public function select_where($select=null, $table, $where=null){
		return $this->db->table($table)->select($select)->getWhere($where);  
	}

	public function get_all($table){
		return $this->db->table($table)->get();
	}

	public function insert_data($table, $data){
		return $this->db->table($table)->insert($data);
	}

	public function update_data($table, $data, $where){
		return $this->db->table($table)->where($where)->update($data);
	}

	public function delete_data($table,$where){
		return $this->db->table($table)->delete($where);
	}
}