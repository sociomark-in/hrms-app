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

	public function get($columns = null, $where = null)
	{
		$result = [];
		if (null !== $columns) {
			$this->db->select($columns);
		}
		if (null !== $where) {
			$this->db->where($where);
		}
		$result = $this->db->get($this->tables['client'])->result_array();
		return json_encode($result);
	}

	public function insert($data = [], $where = null)
	{
		if (null !== $where) {
			$this->db->where($where);
		}
		$this->db->insert($this->tables['client'], $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
