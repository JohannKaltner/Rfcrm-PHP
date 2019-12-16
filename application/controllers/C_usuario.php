<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Usuario extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cliente');
		$this->load->model('M_cliente');
		$this->load->model('M_usuario');
		$this->load->model('M_login');

		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
	
	}

	public function index()
	{
		$this->load->library('upload');
		$config['upload_path'] = './public/images/perfil/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
	}


	public function editarUsuario($usuario_id = NULL)
    {
        $this->m_usuario->atualizarUsuario($usuario_id);
        redirect("C_admin");
    }

	public function chat(){
		

		$config['total_rows'] = $this->M_usuario->getAllUserCount();
		$data['total_count'] = $config['total_rows'];
		$config['suffix'] = '';
		if ($config['total_rows'] > 0) {
			$page_number = $this->uri->segment(3);
			if ($page_number > 0) {
				$config['base_url'] = base_url() . 'C_usuario/chat/';
			} else {
				$config['base_url'] = base_url() . 'C_usuario/chat/';
			}
			if (empty($page_number))
				$page_number = 1;
			$offset = ($page_number - 1) * $this->pagination->per_page;
			$this->M_usuario->setPageNumber($this->pagination->per_page);
			$this->M_usuario->setOffset($offset);
			$this->pagination->cur_page = $offset;
			$config['attributes'] = array('class' => 'page-link');
			$this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			$data['usuarioInfo'] = $this->M_usuario->listarRegistros();
			$data['page_title'] = "RFCRM - Chat";

		$this->template->show('usuario/usuarios', $data);
		}
	}

	public function busca()

	{

        $data['metaDescription'] = 'RFCRM';
        $data['metaKeywords'] = 'RFCRM';
        $data['title'] = "RFCRM";
        // $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#');
        $config['total_rows'] = $this->M_usuario->getAllUserCount();
        $data['total_count'] = $config['total_rows'];
        $config['suffix'] = '';
        if ($config['total_rows'] > 1) {
            $page_number = $this->uri->segment(3);
            if ($page_number > 0) {
                $config['base_url'] = base_url() .  'C_usuario/busca/';
            } else {
                $config['base_url'] = base_url() .  'C_usuario/busca/';
            }
            if (empty($page_number)) {
                $page_number = 1;
            }

            $offset = ($page_number - 1) * $this->pagination->per_page;
            $this->M_usuario->setPageNumber($this->pagination->per_page);
            $this->M_usuario->setOffset($offset);
            $this->pagination->cur_page = $offset;
            $config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			
            $data['usuarioInfo'] = $this->M_usuario->listarBusca();
            //
            // ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
            //

            $data['page_title'] = "Resultados de Pesquisa";
            // $this->template->show('cliente/V_cliente', $data);

            // $data['result'] = $this->M_cliente->listarBusca();
			$this->template->show('usuario/usuarios_search', $data);
        }
    }

}
