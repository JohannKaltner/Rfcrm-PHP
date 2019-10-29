
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Chamado extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('M_chamado');
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->library('pagination');
        }

        public function index(){
        
        }

        public function criarChamado(){
            $this->M_chamado->novoChamado();
            redirect("C_cliente");
        }
    

        public function exibicao(){
            $data['result'] = $this->M_chamado->listarChamados();
            $this->template->show('C_cliente/exibir/', $data);	
        }
}