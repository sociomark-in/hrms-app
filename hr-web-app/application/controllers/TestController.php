<?php

class TestController extends My_Controller
{
	public function experiment($slug){
		switch ($slug) {
			case 'clock':
				$this->load->view('testing/clock');
				break;
			
			default:
				# code...
				break;
		}
	}
}
