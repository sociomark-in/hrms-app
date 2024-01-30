<?php

class AppSetupController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
<<<<<<< HEAD
		$this->load->model('app/ClientModel', 'ClientModel');
		$this->load->model('app/ApplicationModel', 'ApplicationModel');
	}

	public function api_signup() {
		$form_data = $this->input->post();
		$data = [
			// name	organization	email_address	contact_number	role_in_org	no_of_emplyees	pp_tnc_consent	onboarding_help_consent	created_at
			"name" => $form_data['client']['full_name'],
			"email_address" => $form_data['client']['email_address'],
			"contact_number" => $form_data['client']['contact_number'],

			"organization" => $form_data['client']['organization'],
			"no_of_emplyees" => $form_data['no_of_employees'],
			"role_in_org" => $form_data['client']['role'],

			"pp_tnc_consent" => $form_data['consent']['accept_pp_tnc']??= "Deny",
			"onboarding_help_consent" => $form_data['consent']['onboarding_help']??= "Deny",
		];
		if($this->ClientModel->insert($data)){	
			// Create Admin User
			redirect(base_url("registration/choose-a-plan"));
		} else {
			new Exception("Client Insertion Error", "40001");
		}
	}

	public function api_generate_app() {
		$form_data = $this->input->post();
		$app_id = random_string('alnum', 32);
		
		$user = json_decode($this->ClientModel->get(null, ['id' => $form_data['user']]), true)[0];
		
		$data = [
			'app_id' => $app_id,
			'name' => $app_id,
			'client_id' => $user['id'],
			'subscription_plan' => $form_data['plan'],
			'expiry_date' => date_format(date_create("+1 month"), "F j, Y")
		];
		if($this->ApplicationModel->insert($data)){
			print_r($data['app_id']);
		} else {
			return false;
		}
=======
>>>>>>> fca02e6829e11195fa8c20cb1893e0e18658468b
	}

	public function settings() {
		$this->load->view("dashboard/setup/app_settings");
	}
}
