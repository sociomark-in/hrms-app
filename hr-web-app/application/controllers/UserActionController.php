<?php

class UserActionController extends CI_Controller
{
	public function attendance($action){
		switch ($action) {
			case 'punch-in':
				print_r($this->input->post());
				break;
			case 'punch-out':
				print_r($this->input->post());
				break;
			
			default:
				# code...
				break;
		}
	}
}
