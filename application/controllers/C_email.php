<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cliente');
        $this->load->model('M_usuario');
        $this->load->model('M_login');
        $this->load->model('M_email');
 
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
 		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('email');

	}
	public function index($cliente_id = null)
	{	
		
		$data['contatos'] = $this->M_cliente->listarContatosClienteEmail();
		$data['clientes'] = $this->M_cliente->listarRegistros();
		$data['page_title'] = "RFCRM - Email";
		
		$contato_list = $this->M_cliente->retorna_contatos($cliente_id);
        $option = null;
		
		foreach ($contato_list->result() as $contato_list) {
            $option .= "<option value='$contato_list->contato_secundario_email'>$contato_list->contato_secundario_nome</option>";
        }
       
        $data['options_contatos'] = $option;
		$this->template->show('email/mailbox', $data);	
	}

	public function novoEmail($cliente_id = null){
		$data['cliente'] = $this->M_cliente->listarRegistro($cliente_id);
		$data['contatos'] = $this->M_cliente->listarContatosClienteEmail();
		$data['page_title'] = "RFCRM - Email";
		
		$cliente_id = $this->uri->segment(3);
		
		$contato_list = $this->M_cliente->retorna_contatos($cliente_id);
        $option = null;
		
		foreach ($contato_list->result() as $contato_list) {
			$option .= "<option value='$contato_list->contato_secundario_email'>$contato_list->contato_secundario_nome</option>
						<option value='$contato_list->contato_secundario_id'>$contato_list->contato_secundario_id</option>";
        }
        $data['options_contatos'] = $option;

		
		$this->template->show('email/novoEmail', $data);	

	}

	public function enviar(){
	 
		$this->M_email->novoEmail();
        echo "<script> window.history.go(-1);</script>";
	}
	
	// public function upload_file(){
	// 	$config['upload_path'] = 'uploads/';
	// 	$config['allowed_types'] = 'doc|docx|pdf|txt|png|jpg';
	// 	$this->load->library('upload', $config);
	// 	if($this->upload->do_upload('email_anexo')){
	// 		return $this->upload->data();
	// 	}else{
	// 		return $this->upload->display_errors(); 
	// 	}
	// }

}
