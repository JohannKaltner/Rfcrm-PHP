<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_chat extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index(){
    // 
}

   public function novaMensagem($usuario_id){
    date_default_timezone_set('America/Sao_Paulo');

    //$usuario_id =NULL ;
    $usuario_id = 
    $data =array(
        'mensagem_remetente_id' => $this->session->userdata('usuario_id'),
         'mensagem_destinatario_id' => $this->input->post('mensagem_destinatario_id'),
        //  'mensagem_destinatario_id' => $usuario_id,
        'mensagem_conteudo' => $this->input->post('mensagem_conteudo'),
        'mensagem_data_envio' => date('H:d | d-m-Y')
    );
    $this->db->insert('chat', $data);

  }

  public function exibirMensagens(){
    $this->db->select('c.mensagem_remetente_id,c.mensagem_destinatario_id ,c.mensagem_conteudo,c.mensagem_data_envio');
    $this->db->from('chat as c');
    $this->db->where('mensagem_remetente_id', $this->session->userdata('usuario_id'));
    $this->db->where('mensagem_destinatario_id', $this->uri->segment(3));
    $query = $this->db->get();
    if ($query->num_rows() < 1) {
        return false;
    }
    return $query->result();
}

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
}