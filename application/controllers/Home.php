<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$title = "Home";

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		
        $this->load->model('M_cliente');

		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('C_login');
		}
	  }

	public function index($cliente_list = null)
	{
		// $contatos = $this->M_cliente->busca_contatos_by_cliente();

		// $option = "<option value=''></option>";
		// foreach($contatos -> result() as $contato) {
		// $option .= "<option value='$contato->contato_secundario_nome'>$contato->contato_secundario_nome</option>"; 
		// }	


		$cliente_list = $this->M_cliente->retorna_clientes();
		$option = null;
		foreach ($cliente_list->result() as $cliente_list) {
			$option .= "<option value='$cliente_list->cliente_id'> [$cliente_list->cod_cliente] $cliente_list->cliente_nome</option>";
		}
	   
		$data['options_cliente'] = $option;
		
		$data['page_title'] = "RFCRM - Dashboard";
		$data['posts'] = $this->M_home->listarPosts();
		$this->template->show('home',$data);
		
			}
	
	public function deletaPost($post_id = NULL){
		$this->M_home->apagarPost($post_id);
		echo "<script> window.history.go(-1);</script>";
	}
	
	public function criarChamadoShortcut(){
		
		$this->M_chamado->novoChamado();
		echo "<script> window.history.go(-1);</script>";
	}
	 
		
	public function busca_contatos_by_cliente() {
		$this->load->model("M_cliente");
		$contatos = $this->M_cliente->busca_contatos_by_cliente();

		$option = "<option value=''></option>";

		foreach($contatos -> result() as $contato) {
		$option .= "<option value='$contato->contato_secundario_nome'>$contato->contato_secundario_nome</option>"; 
		}	
		
		echo $option;


	}


}




