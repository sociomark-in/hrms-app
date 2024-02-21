<?php

class UserActionController extends CI_Controller
{
	public function attendance($action)
	{
		$this->load->model("attendance/AttendanceModel");
		switch ($action) {
			case 'punch-in':
				$ajax_data = $this->input->post();
				$data = [
					"app_id" => get_cookie("app_id"),
					"emp_id" => "1",
					"attendance_date" => date("y-m-d"),
					"timepunchIn" => $ajax_data["punch_in_time"]
				];
				$this->AttendanceModel->add($data);
				break;
			case 'punch-out':
				$ajax_data = $this->input->post();
				print_r($this->input->post());
				break;

			default:
				# code...
				break;
		}
	}
}
