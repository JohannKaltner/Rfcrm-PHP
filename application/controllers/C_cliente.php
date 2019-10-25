<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Cliente extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_cliente');
        $this->load->helper('url_helper');
        $this->load->library('session');
		$this->load->library('pagination');
		
    }

	public function index(){
		$data['result'] = $this->M_cliente->listarRegistros();
		$data['chamados'] = $this->M_cliente->listarChamadosCliente();
		$this->template->show('cliente/V_cliente', $data);	

	}
	
	public function criar(){
		$this->M_cliente->criarDados();
		redirect("C_cliente");

	}

	public function editar($cliente_id){
		$data['row'] = $this->M_cliente->listarRegistro($cliente_id);
		$this->template->show('cliente/V_cliente_edit', $data);

	}

	public function update($cliente_id){
		$this->M_cliente->atualizarRegistro($cliente_id);
		redirect("C_cliente");

	}

	public function delete($cliente_id){
		$this->M_cliente->apagarRegistro($cliente_id);
		// echo  "<script>alert('Cliente deletado com Sucesso!!');</script>";
		redirect("C_cliente");

	}
	
	 public function exibir($cliente_id){
		$data['linha'] = $this->M_cliente->listarRegistro($cliente_id);
		$data['chamados'] = $this->M_cliente->listarChamadosCliente($cliente_id);

		 $this->template->show('cliente/V_cliente_show', $data);
		 
	 }
 
}
