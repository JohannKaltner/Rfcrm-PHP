<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->template->show('home');
		// $data['numeroClientes']= $this->M_Home->contarLinhas("cliente");
		// $this->load->model('M_home', $data);
	}
	
}

