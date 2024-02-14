<?php
class HolidaysModel extends CI_Model
{
	public $table = [
		'holidays' => "app_holidays"
	];

	public function __construct()
	{
		parent::__construct();
	}

	public function get($columns = null, $where = null)
	{
		if (isset($columns)) {
			$this->db->select($columns);
		}
		if (isset($where)) {
			$this->db->where($columns);
		}
		return json_encode($this->db->get($this->table['holidays'])->result_array());
	}
}
