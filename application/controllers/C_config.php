<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Config extends CI_Controller {


	public function index()
	{
		$this->template->show('config');	
	}
}
