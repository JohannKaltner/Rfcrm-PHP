<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_cliente');
		$this->load->model('M_login');
		$this->load->model('M_usuario');
		$this->load->model('M_log');

		$this->load->helper('url_helper');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');

		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('zip');

		$this->load->database();
		if ($this->session->userdata('usuario_nivel') !== '1') {
			redirect('/404.php');
		}
	}


	public function index($usuario_id = '', $cliente_id = '')
	{
		// $data['sidebar'] = $this->load->view('template/sidebar', NULL, TRUE);
		$data['result'] 	 = $this->M_cliente->listarRegistros();
		$data['user'] 	     = $this->M_login->consultarUsuario($usuario_id);
		$data['chamados']	 = $this->M_cliente->listarChamadosCliente($cliente_id);
		$data['metaDescription'] = 'RFCRM ADMIN';
		$data['metaKeywords'] = 'RFCRM ADMIN';

		//
		// ─── PAGINATION ──────────────────────────────────────────────────
		//
		// $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#'); 
		$config['total_rows'] = $this->M_admin->getAllUserCount();
		$data['total_count'] = $config['total_rows'];
		$config['suffix'] = '';
		if ($config['total_rows'] > 0) {
			$page_number = $this->uri->segment(3);
			if ($page_number > 0) {
				$config['base_url'] = base_url() . 'C_admin';
			} else {
				$config['base_url'] = base_url() . 'C_admin/index/';
			}
			if (empty($page_number))
				$page_number = 1;
			$offset = ($page_number - 1) * $this->pagination->per_page;
			$this->M_admin->setPageNumber($this->pagination->per_page);
			$this->M_admin->setOffset($offset);
			$this->pagination->cur_page = $offset;
			$config['attributes'] = array('class' => 'page-link');
			$this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			$data['usuarioInfo'] = $this->M_admin->listarRegistros();
			//
			// ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
			$data['linha'] =  $this->M_admin->listarRegistro($usuario_id);
			//
			//$data['usuario'] =  $this->M_admin->exibirUsuario($usuario_id);

			//
			// ─── PAGINATION DOS LOGS ─────────────────────────────────────────
			//

			$config_log['total_rows_log'] = $this->M_log->getAllLogCount();
			$data['total_count_log'] = $config_log['total_rows_log'];
			$config_log['suffix'] = '';
			if ($config_log['total_rows_log'] > 0) {
				$page_number_log = $this->uri->segment(3);
				if ($page_number_log > 0) {
					$config_log['base_url'] = base_url() . 'C_admin';
				} else {
					$config_log['base_url'] = base_url() . 'C_admin/index/';
				}
				if (empty($page_number_log))
					$page_number_log = 1;
				$offset_log = ($page_number_log - 1) * $this->pagination->per_page;
				$this->M_log->setPageNumber($this->pagination->per_page);
				$this->M_log->setOffset($offset_log);
				$this->pagination->cur_page = $offset_log;
				$config_log['attributes_log'] = array('class' => 'page-link');
				$this->pagination->initialize($config_log);
				$data['page_links'] = $this->pagination->create_links();
				$data['logInfo'] = $this->M_log->listarRegistros();
 
				//
				// FIM PAGINATION DOS LOGS
				//
				$data['page_title'] = "RFCRM - Admin";

				$this->template->admin('admin/admin', $data);
			}
		}
	}

	// public function exibir($usuario_id = NULL, $cliente_id = '')
	// {
	// 	// $data['chamados'] =  $this->M_cliente->listarChamadosCliente($cliente_id);
	// 	// $data['contatos'] =  $this->M_cliente->listarContatosCliente($cliente_id);
	// 	// $data['correcoes'] =  $this->M_cliente->listarCorrecaoCliente($cliente_id);
	// 	//$data['usuario'] = $this->M_usuario->consultar_permissao($usuario_id);
	// 	$data['page_title'] = "Informações do Usuario";
	// 	$data['usuario'] = $this->M_admin->exibirUsuario($usuario_id);


	//   	$this->template->show('usuario', $data);
	//   }

	public function exibir($cliente_id = NULL, $usuario_id = NULL)
	{
		$data['linha'] =  $this->M_admin->listarRegistro($usuario_id);
		// $data['chamados'] =  $this->M_cliente->listarChamadosCliente($cliente_id);
		 $data['contatos'] =  $this->M_cliente->listarContatosCliente($cliente_id);
		 $data['correcoes'] =  $this->M_cliente->listarCorrecaoCliente($cliente_id);
		 $data['permissao'] =  $this->M_usuario->consultar_permissao($usuario_id);
		$data['chamados']	 = $this->M_cliente->listarChamadosCliente($cliente_id);
		$data['page_title'] = "Informações do Cliente";
		$this->template->show('usuario', $data);
	}


	public function deletaUsuario($usuario_id = '')
	{
		$this->M_admin->apagarUsuario($usuario_id);
		// echo  "<script>alert('Cliente deletado com Sucesso!!');</script>";
		redirect("C_admin");
	}


	public function novaAlerta()
	{
		$this->M_admin->criarAlerta();
		redirect('C_admin');
	}

	public function exibirAlertas()
	{
		$data['alert'] =  $this->M_admin->listarAlertas();
	}

	public function resetarContatos()
	{
		$this->M_admin->truncarContatos();
		redirect('C_admin');
	}

	public function resetarClientes()
	{
		$this->M_admin->truncarCliente();
		redirect('C_admin');
	}

	public function resetarCorrecoes()
	{
		$this->M_admin->truncarCorrecao();
		redirect('C_admin');
	}

	public function resetarChamados()
	{
		$this->M_admin->truncarChamado();
		redirect('C_admin');
	}

	public function backup_database()
	{
	 $NAME = $this->db->database;
	 $this->load->dbutil();
	 $db_format= array('format'=>'zip','filename'=>'rfcrm.sql');
	 $backup= &$this->dbutil->backup($db_format);
	 $dbname='backup'.date('d-m-Y').'.zip';
	 $save='/db_backup/rfcrm/'.$dbname;
	 write_file($save,$backup);
	 force_download($dbname,$backup);
		// $NAME = $this->db->database;
		// $this->load->dbutil();
		// $prefs = array(
		// 	'format' => 'zip',
		// 	'filename' => 'rfcrm_backup.sql'
		// );
		// $backup = &$this->dbutil->backup($prefs);
		// $db_name = $NAME . '.zip';
		// $save = base_url().'db_backup/' . $db_name;
		// $this->load->helper('file');
		// write_file($save, $backup);
		// $this->load->helper('download');
		// force_download($db_name, $backup);
	}

	// public function list_by_id($usuario_id = NULL){
	// 	$data['linha']= $this->M_admin->exibirChamados($usuario_id);

	// 	redirect('C_admin');

	// }

}