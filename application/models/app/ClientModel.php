<?php

class ClientModel extends CI_Model
{
	protected $tables = [
		"client" => "client_data",
		"application" => ""
	];
	public function __construct()
	{
		parent::__construct();
		// id	name	organization	email_address	contact_number	role_in_org	no_of_emplyees	pp_tnc_consent	onboarding_help_consent	created_at	
	}

	public function get($columns = null, $where = null){
		if(null !== $columns){
			$this->db->select($columns);
		}
		if(null !== $where){
			$this->db->where($where);
		}
		return json_encode($this->db->get($this->tables['client'])->result_array());
	}

	public function insert($data = [], $where = null){
		if(null !== $where){
			$this->db->where($where);
		}
		if($this->db->insert($this->tables['client'] , $data)){
			return true;
		} else {
			return false;
		}
	}
}

