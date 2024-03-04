<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'core/My_controller.php');

class OnboardingController extends My_Controller
{
	public $data;
	public function home()
	{
		$this->load->model("org_settings/HolidaysModel");
		$this->load->model("website/EnquiriesModel");
		$key = $this->input->get('key');
		if(NULL !== $key && $key != ""){
			if($this->EnquiriesModel->authorize($key)){
				$this->data['org_holidays'] = json_decode($this->HolidaysModel->get(["title", "from_date", "to_date"]), true);
				$this->load->onboarding_view("home", $this->data);
				// $this->EnquiriesModel->update(['email_validated' => 1], ["email_validate_key" => $key]);
			}
			else {
				$this->data['error'] = [
					'message' => ""
				];
				$this->load->error_view("401_unauthorized_email", $this->data);
			}
		} 
		else {
			$this->data['error'] = [
				'type' => 'error',
				'message' => "The Key is Invalid! <br>Do you want us to send another email for verification?"
			];
			$this->load->error_view("401_unauthorized_email", $this->data);
		}
	}

	public function signup()
	{
		$this->load->mini_layout("website/signup", $this->data);
	}
}
