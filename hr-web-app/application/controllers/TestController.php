<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestController extends CI_Controller
{
	public function experiment($slug){
		switch ($slug) {
			case 'clock':
				$this->load->view('testing/clock');
				break;
			case 'server':
				echo "<pre>";
				print_r(get_cookie("app_id"));
				echo "</pre>";
				break;
			case 'excel':
				$this->load->model("reports/General_ReportsModel", "ReportsModel");
				$this->ReportsModel->generate("filename.xlsx");
				break;
			
			default:
				break;
		}
	}

}
