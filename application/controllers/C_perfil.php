<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Perfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cliente');
		$this->load->model('M_usuario');

		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		
	}
	
	public function index($usuario_id = NULL)
	{
		
		$data['page_title'] = "RFCRM - Perfil";
		$data['result'] = $this->M_usuario->consultar_permissao($usuario_id);
		$data['chamado'] = $this->M_usuario->userChamados($usuario_id); 
		$this->template->show('perfil',$data);	

	}

	public function editaUsuario($usuario_id = NULL)
	{
		$this->M_login->atualizarRegistro($usuario_id);
		redirect("C_perfil");
	}
}
