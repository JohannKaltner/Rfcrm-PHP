<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	 
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('email');
	}
	public function index()
	{
		//$this->load->view('email');	
		$this->template->show('email');	
	}
}
