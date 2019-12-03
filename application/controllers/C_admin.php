<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_Admin');
		$this->load->model('M_cliente');
		$this->load->model('M_usuario');

		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->database();
		if ($this->session->userdata('usuario_nivel') !== '1') {
			redirect('/404.php');
		}
	}


	public function index()
	{
		// $data['sidebar'] = $this->load->view('template/sidebar', NULL, TRUE);

		//
		// ─── PAGINATION ──────────────────────────────────────────────────
		//
		$data['metaDescription'] = 'RFCRM ADMIN';
		$data['metaKeywords'] = 'RFCRM ADMIN';
		$data['page_title'] = "RFCRM - Admin";
		// $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#'); 
		$config['total_rows'] = $this->M_Admin->getAllUserCount();
		$data['total_count'] = $config['total_rows'];
		$config['suffix'] = '';
		if ($config['total_rows'] > 0) {
			$page_number = $this->uri->segment(3);
			if ($page_number > 0) {
				$config['base_url'] = base_url() . 'C_Admin';
			} else {
				$config['base_url'] = base_url() . 'C_Admin/index/';
			}
			if (empty($page_number))
				$page_number = 1;
			$offset = ($page_number - 1) * $this->pagination->per_page;
			$this->M_Admin->setPageNumber($this->pagination->per_page);
			$this->M_Admin->setOffset($offset);
			$this->pagination->cur_page = $offset;
			$config['attributes'] = array('class' => 'page-link');
			$this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			$data['usuarioInfo'] = $this->M_Admin->listarRegistros();
			//
			// ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
			//

			$data['page_title'] = "Painel Admin";
			$this->template->admin('admin/admin', $data);
		}
	}

	public function exibir($usuario_id = NULL){
		// $data['usuario'] =  $this->M_Admin->exibirUsuario($usuario_id);
		// $data['page_title'] = "Informações do Usuario";
		 
		 // $data['chamados']=  $this->M_cliente->listarChamadosCliente($cliente_id);
		 // $data['contatos']=  $this->M_cliente->listarContatosCliente($cliente_id);
		 // $data['correcoes']=  $this->M_cliente->listarCorrecaoCliente($cliente_id);
		 // $data['usuario'] = $this->M_usuario->consultar_permissao($usuario_id);

		$this->template->show('usuario', $data);
	}

	public function novaAlerta(){
		$this->M_Admin->criarAlerta();
		redirect('C_admin');
	}

	public function exibirAlertas(){
		$data['alert']=  $this->M_Admin->listarAlertas();
		 
	}

	public function resetarContatos(){
		$this->M_Admin->truncarContatos();
		redirect('C_admin');
	}

	public function resetarClientes(){
		$this->M_Admin->truncarCliente();
		redirect('C_admin');
	}

	public function resetarCorrecoes(){
		$this->M_Admin->truncarCorrecao();
		redirect('C_admin');

	}

	public function resetarChamados(){
		$this->M_Admin->truncarChamado();
		redirect('C_admin');

	}
	
	
	
}
