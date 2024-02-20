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
	public function generate($filename, $toBeDownloaded = TRUE)
	{
		$this->load->library('exports/PHPSheets', NULL, "PHPSheets");
		if (!is_dir(FCPATH . 'exports/reports/')) {
			mkdir(FCPATH . 'exports/reports/', 0777, TRUE);
		}
		$this->PHPSheets->save(FCPATH . "exports/reports/" . $filename);
		if ($toBeDownloaded) {
			force_download(FCPATH . "exports/reports/" . $filename, NULL);
			delete_files("exports/reports/" . $filename);
		}
	}
}
