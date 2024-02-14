<?php

class UserModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function authenticate($credentials)
	{	
		return false;
	}
}
