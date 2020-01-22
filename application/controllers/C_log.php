
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Chamado extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_chamado');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        ///////////////////////////////////

        $data['metaDescription'] = 'RFCRM';
        $data['metaKeywords'] = 'RFCRM';
        // $data['title'] = "RFCRM";
        // $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#'); 
        $config_log['total_rows_log'] = $this->M_log->getAllLogCount();
        $data_log['total_count_log'] = $config_log['total_rows_log'];
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
            $data_log['page_links'] = $this->pagination->create_links();
            $data_log['logInfo'] = $this->M_log->listarRegistros();
            $this->template->admin('admin/admin', $data_log);
        }
    }
    public function index()
    { }

    public function criarChamado()
    {
        $this->M_logs->registrarAtividade();
        redirect("C_admin");
    }


    public function exibicao()
    {
        $data['result'] = $this->M_log->listarRegistros();
        $this->template->show('C_admin', $data);
    }
}
