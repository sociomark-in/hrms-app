<?php

class UserModel extends CI_Model
{
	public $table;
	public function __construct()
	{
		parent::__construct();
		$this->table['users'] = "app_application_users";
	}

	public function authenticate($credentials)
	{	
		return false;
	}

	public function get($columns = NULL, $where = NULL){
		if(NULL !== $columns && count($columns) > 0){
			$this->db->select($columns);
		}
		if(NULL !== $where && count($where) > 0){
			$this->db->where($where);
		}

		return json_encode($this->db->get($this->table['users'])->result_array());
	}

	public function create($data){
		if($this->db->insert($this->table['users'], $data) == TRUE){
			return true;
		} else {
			return false;
		}
	}
}
