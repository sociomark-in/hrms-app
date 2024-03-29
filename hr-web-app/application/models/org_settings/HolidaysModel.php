<?php

class HolidaysModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get($columns = NULL, $where = NULL, $limit = NULL, $day = "today")
	{
		if (NULL !== $columns && count($columns) > 0) {
			$this->db->select($columns);
		}
		if (NULL !== $where && count($where) > 0) {
			$this->db->where($where);
		}
		if (NULL !== $limit && $limit > 0) {
			$this->db->limit($limit);
		}

		return json_encode($this->db->get("app_company_holidays")->result_array());
	}
}
