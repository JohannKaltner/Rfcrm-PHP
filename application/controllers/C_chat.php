<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Chat extends CI_Controller
{

    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_cliente');
		$this->load->model('M_login');
		$this->load->model('M_usuario');
		$this->load->model('M_log');
		$this->load->model('M_chat');

		$this->load->helper('url_helper');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');

		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('zip');

		$this->load->database();

    }

    public function index()
    {
		$data['usuarioInfo'] = $this->M_admin->listarRegistros();

        //$this->load->view('chat');
    }
	
    public function chat()
    {
		$data['usuarioInfo'] = $this->M_admin->listarRegistro();
		$data['mensagem']=$this->M_chat->exibirMensagens();
		$data['page_title'] = "RFCRM - Chat";
 		$this->template->show('chat', $data);
        
	 }
	 
	 public function novaMensagem(){
		 $this->M_chat->novaMensagem();
		 redirect('C_chat');
	 }

}
