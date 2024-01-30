<?php

class ApplicationModel extends CI_Model
{
	private $tables;
	public function __construct()
	{
		parent::__construct();
		$this->tables = ['app_data' => 'client_applications'];
	}

	public function insert($data = [], $where = null){
		if(null !== $where){
			$this->db->where($where);
		}
		if($this->db->insert($this->tables['app_data'] , $data)){
			return true;
		} else {
			return false;
		}
	}
}
