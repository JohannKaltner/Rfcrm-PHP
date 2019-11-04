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

	public function index($cliente_id=''){
		$data['result'] = $this->M_cliente->listarRegistros();
		$data['chamados'] = $this->M_cliente->listarChamadosCliente($cliente_id);
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

	 function pagination()
	 {
	  $this->load->model("M_cliente");
	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->M_cliente->count_all();
	  $config["per_page"] = 20;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li>';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li>';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '&gt;';
	  $config["next_tag_open"] = '<li>';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = "&lt;";
	  $config["prev_tag_open"] = "<li>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='active'><a href='#'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];
	
	  $output = array(
	   'pagination_link'  => $this->pagination->create_links(),
	   'cliente_table'   => $this->M_cliente->fetch_details($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }
	 
}
