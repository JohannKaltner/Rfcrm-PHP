<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Notificacao extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cliente');
        $this->load->model('M_usuario');
        $this->load->model('M_login');
        $this->load->model('M_notificacao');
 
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        $data['page_title'] = "Clientes";
	}
	
	public function index()
	{
	}

	public function delete($notification_id = NULL)
    {
        $this->M_notificacao->apagar($notification_id);
        echo  "<script>alert('Deletado com Sucesso!!');</script>";
        echo "<script> window.history.go(-1);</script>";
    }

}
