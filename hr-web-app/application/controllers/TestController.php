<?php

class TestController extends My_Controller
{
	public function experiment($slug){
		switch ($slug) {
			case 'clock':
				$this->load->view('testing/clock');
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
