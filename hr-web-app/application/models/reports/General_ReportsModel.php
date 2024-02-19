<?php

class General_ReportsModel extends CI_Model
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

	public function get()
	{
	}
	public function generate($filename)
	{
		$this->load->library('exports/PHPSheets', NULL, "PHPSheets");
		$this->PHPSheets->save( FCPATH . $filename);
		force_download(FCPATH . $filename);
	}
}
