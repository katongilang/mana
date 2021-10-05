<?php

/**
 * @Author: Gilbaskoro
 * @Date:   2021-02-15 13:42:16
 * @Last Modified by:   Gilbaskoro
 * @Last Modified time: 2021-10-05 08:39:34
 */
namespace App\Models;
use CodeIgniter\Model;

// CLASS INI AKAN MEMBACA DATABASE DEFAULT
class All_model extends Model{
	
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