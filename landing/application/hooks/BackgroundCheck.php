<?php

class BackgroundCheck extends CI_Hooks
{
	public function check_if_membership_expired_after_controller(){
		$status = 0;
		$ci=&get_instance();

        // Load the user model (replace with your actual model name)
        $ci->load->model('app/ClientModel', 'ClientModel');
        $ci->load->model('app/ApplicationModel', 'ApplicationModel');
		// $ci->ClientModel->get();

		$status = json_decode($ci->ApplicationModel->get('expiry_date', ['client_id' => 1]), true)[0];
		if(date_create($status['expiry_date']) > date_create('now')){
			$ci->load->view('errors/statuses/expired');
		}
	}
}
