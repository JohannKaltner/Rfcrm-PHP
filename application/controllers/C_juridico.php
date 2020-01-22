
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Juridico extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('M_juridico');
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->library('pagination');
        }

        public function index(){
            $data['page_title'] = "RFCRM - Juridico";
            $this->template->juridico('juridico/juridico', $data);

        }

        
}