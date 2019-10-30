<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('C_login');
		}
	  }

	public function index()
	{
		//acesso admin
		if($this->session->userdata('usuario_nivel')==='1'){
			$this->template->show('home');
		}else{
			echo "Access Denied";
		}


		// $this->template->show('home');
		// $data['numeroClientes']= $this->M_Home->contarLinhas("cliente");
		// $this->load->model('M_home', $data);
	}
	
}

