<?php
class AppController extends CI_Controller
{
	public $data = [];
	public $user = null;
	public function __construct()
	{
		parent::__construct();
		$this->session->set_userdata(
			[
				'webuser_client' => [
					'user' => [
						'role' => "admin"
					]
				]
			]
		);

		$this->user['role'] = $this->session->webuser_client['user']['role'];
	}

	/* API Calls */
	public function api_authorize(){
		print_r($this->input->post());
	}

	public function home($app_id)
	{
		$new = $this->input->get("nu");
		$this->data['configs']['app_id'] = $app_id;
		if (null !== $new) {
			$this->load->view("dashboard/setup/welcome",  $this->data);
		} else{
			$this->data['settings']['holidays'] = json_decode($this->HolidaysModel->get(), true);
			switch ($this->user['role']) {
				case 'employee':
					$this->load->view('dashboard/employee/home', $this->data);
					break;

				case 'admin':
					$this->load->view('dashboard/admin/home', $this->data);
					break;

				default:
					$this->load->view('dashboard/employee/home', $this->data);
					break;
			}
		}
	}

	public function settings($app_id, $entity = null)
	{
		$step = $this->input->get("step");
		$this->data['configs']['app_id'] = $app_id;
		switch ($entity) {
				/* Setup Settings */
			case 'onboarding':
				if (null !== $step) {
					$this->load->view("dashboard/setup/app_settings", $this->data);
				} else {
					switch ($step) {
						case 'value':
							# code...
							break;

						default:
							redirect(base_url('app/' . $app_id));
							break;
					}
				}
				break;
				/* Profile Settings */
			case 'profile':
				$this->data['settings']['holidays'] = json_decode($this->HolidaysModel->get(), true);
				switch ($this->user['role']) {
					case 'employee':
						$this->load->view('dashboard/employee/settings/profile', $this->data);
						break;

					case 'admin':
						$this->load->view('dashboard/admin/settings/profile', $this->data);
						break;

					default:
						$this->load->view('dashboard/employee/settings/profile', $this->data);
						break;
				}
				break;

			default:
				redirect(base_url('app/' . $app_id));
				break;
		}
	}
}
