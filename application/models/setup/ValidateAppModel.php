<?php

class ValidateAppModel extends CI_Model
{
	public $validations = [];
	public $table = [
		'app_id' => ""
	];
	public function __construct()
	{
		parent::__construct();
	}

	public function get($where = null){
		$cookie = null;
		if(get_cookie(APP_PREFIX . 'app_temp_cookie') != null){
			$cookie = get_cookie(APP_PREFIX . 'app_temp_cookie');
			$this->validations[APP_PREFIX . 'app_temp_cookie'] = $cookie;
		} else {
			$this->set();
		}
		if($where != null){
			$this->db->where($where);
		}
		return json_encode($this->db->get($this->table['app_id'])->row());
	}

	public function set($app_id = "xQnnT8oppayjFCMlZLPox49pXqUj2lV3"){
		$this->validations[APP_PREFIX . 'app_temp_cookie'] = $app_id;
	}

	public function validate($app_id){
		$this->db->where('app_id', $app_id);
	}
}
