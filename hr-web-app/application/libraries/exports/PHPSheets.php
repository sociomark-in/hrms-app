<?php


if (!defined('BASEPATH'))
	exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PHPSheets extends Spreadsheet
{
	public $spreadsheet;
	public function __construct()
	{
		$this->spreadsheet = new Spreadsheet();
		log_message('info', "PHPSheets (PHPSpreadsheets) Library Initiated");
	}

	public function create()
	{
		return $this->spreadsheet;
	}

	public function save($filename)
	{
		$writer = new Xlsx($this->spreadsheet);
		$writer->save($filename);
	}
}
