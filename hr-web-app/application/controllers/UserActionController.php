<?php

class UserActionController extends CI_Controller
{
	public function attendance($action)
	{
		$this->load->model("attendance/AttendanceModel");
		$ajax_data = $this->input->post();
		switch ($action) {
			case 'punch-in':
				$data = [
					"app_id" => get_cookie("app_id"),
					"emp_id" => "1",
					"attendance_date" => date("y-m-d"),
					"timepunchIn" => $ajax_data["punch_in_time"]
				];
				$this->AttendanceModel->add($data);
				break;
			case 'punch-out':
				$data = [
					"timepunchOut" => $ajax_data["punch_out_time"]
				];
				$where = [
					"app_id" => get_cookie("app_id"),
					"emp_id" => "1",
					"attendance_date" => date("y-m-d"),
				];
				$this->AttendanceModel->update($data, $where);
				break;

			default:
				# code...
				break;
		}
	}
}
