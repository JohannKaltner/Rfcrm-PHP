<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Agenda extends CI_Controller {


	public function index()
	{
		$this->template->show('calendar');	
	}
}
