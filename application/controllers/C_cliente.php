<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Cliente extends CI_Controller {


	public function index()
	{
		$this->template->show('cliente/V_cliente');	
	}
}
