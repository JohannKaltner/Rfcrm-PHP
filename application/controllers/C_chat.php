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
		 $data['mensagem']	  =	$this->M_chat->exibirMensagens();
		// $data['mensagemReme']=$this->M_chat->exibirMensagensEnviadas();
		// $data['mensagemDest']=$this->M_chat->exibirMensagensRecebidas();
		  $data['page_title'] = "RFCRM - Inbox";
		   $this->template->show('chat/inbox', $data);

     }
	
    public function chat($usuario_id)
    {
		
		$data['page_title'] = "RFCRM - Chat";	
		$data['usuarioInfo'] = $this->M_admin->listarRegistro($usuario_id);
		$data['mensagem']=$this->M_chat->exibirMensagens();
		$this->template->show('chat/chatSala', $data);
 	
		
	}
	
	public function chatJquery($usuario_id)
    {
		$data['page_title'] = "RFCRM - Chat";	
		$data['usuarioInfo'] = $this->M_admin->listarRegistro($usuario_id);
		$data['mensagem']=$this->M_chat->exibirMensagens();
		
		

		$this->load->view('chat/chat', $data);
	
		
	}


	 public function novaMensagem($usuario_id = NULL ){
		 echo $usuario_id;
		 $this->M_chat->novaMensagem($usuario_id);
		 
		  echo "<script> window.history.go(-1);</script>";
 	 }

}
