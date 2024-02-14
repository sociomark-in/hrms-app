<?php

class App_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('app/ClientModel', 'ClientModel');
		if(!is_https()){
			$this->session->set_flashdata('http_error','Please change url to HTTPS!!');
		}
	
		(!$this->session->userdata('authenticate')) ? redirect(site_url('login')) : '';
	}

	public function get_user_session(){
		$userdata = $this->session->userdata('userdata');
		return $userdata;
	}

	public function get_user_data($user_id){
		$result = [];
		$result = $this->ClientModel->get(null, ['id' => $user_id]);
		return $result;
	}
}
