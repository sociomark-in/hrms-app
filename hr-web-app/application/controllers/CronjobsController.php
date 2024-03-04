<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CronjobsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		/*
		$this->load->model("requests/Comp_OffModel") 
		$this->load->model("requests/ReimbursementModel") 
		                                                                                                                                                                                                                       
		$this->load->model("requests/ReimbursementModel") 
		$this->load->model("work-offs/Casual_LeavesModel") 
		$this->load->model("work-offs/Happiness_LeavesModel") 
		$this->load->model("work-offs/Sick_LeavesModel") 
		$this->load->model("work-offs/Paid_LeavesModel")
		*/
	}

	public function auto_download_reports($report){
		if(date('d') == "2"){
			$previous_month = date('m', strtotime("last month"));
			switch ($report) {
				case 'holidays':
					break;
				case 'leaves':
					break;
				case 'comp-offs':
					break;
				case 'half-days':
					break;
				
				default:
					print_r("ERROR");
					break;
			}
		}
	}
	public function auto_mail_events($event){
		switch ($event) {
			case 'new-join':
				break;
			case 'birthday':
				break;
			case 'anniversary':
				break;
			case '':
				break;
			
			default:
				print_r("ERROR");
				break;
		}
	}
	public function auto_mail_approvals($request){
		switch ($report) {
			case 'holidays':
				break;
			case 'leaves':
				break;
			case 'comp-offs':
				break;
			case 'half-days':
				break;
			
			default:
				print_r("ERROR");
				break;
		}
	}
}
