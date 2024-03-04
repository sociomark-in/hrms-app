<?php

class EnquiriesModel extends CI_Model
{
	public $table, $data;
	public function __construct()
	{
		$this->table['enquiries'] = "landing_application_enquiries";
		$this->data = [];
	}
	public function create($data)
	{
		if ($this->db->insert($this->table['enquiries'], $data) == TRUE) {
			return true;
		} else {
			return false;
		}
	}

	public function get($columns = NULL, $where = NULL)
	{
		if (NULL !== $columns) {
			$this->db->select($columns);
		}
		if (NULL !== $where) {
			$this->db->where($where);
		}

		$result = $this->db->get($this->table['enquiries'])->result_array();
		return json_encode($result);
	}

	public function update($columns = NULL, $where = NULL)
	{
		if (NULL !== $where) {
			$this->db->where($where);
		}
		if ($this->db->update($this->table['enquiries'], $columns)) {
			return true;
		} else {
			return false;
		}
	}

	public function authorize($key): bool
	{
		$data = json_decode($this->get(['email_validate_key', 'email_validate_key_expires'], ['email_validate_key' => $key]), true);
		if (count($data) > 0) {
			$data = $data[0];
			if ($data['email_validate_key'] == $key && date_create($data['email_validate_key_expires']) > date_create('now')) {
				return true;
			}
			else {
				return false;
			}
		} 
		else {
			return false;
		}
	}
}
