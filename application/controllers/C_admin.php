<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

    function __construct(){
 
		parent::__construct();
		$this->load->model('M_Admin');

		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
    	$this->load->database();
		if($this->session->userdata('usuario_nivel') !== '1'){
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
		$data['title'] = "RFCRM ADMIN";
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
		$this->template->admin('admin', $data);	
	}

	
}
}