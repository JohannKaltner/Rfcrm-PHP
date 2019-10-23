
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_cliente extends CI_Model {


   public function __construct(){
     parent::__construct();
     $this->load->database();
   }

   public function index(){
    
   }


  function novoChamado(){
      $data = array(
        'chamado_atividade'          => $this->input->post('chamado_atividade'),
        'chamado_duracao'            => $this->input->post('chamado_duracao'),
        'chamado_assunto'            => $this->input->post('chamado_assunto'),
        'chamado_data'               => $this->input->post('chamado_data'),
        'chamado_atendente_rf'       => $this->input->post('chamado_atendente_rf'),
        'chaamdo_atendente_cliente'  => $this->input->post('chaamdo_atendente_cliente'),
        'chamado_obs'                => $this->input->post('chamado_obs')
      );
      $this->db->insert('chamado', $data);
    }
    
  
    }