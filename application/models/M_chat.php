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

   public function novaMensagem(){
      
    $data =array(
        'mensagem_remetente_id' => $this->session->userdata('usuario_id'),
        'mensagem_destinatario_id' => $this->uri->segment(3),
        'mensagem_conteudo' => $this->input->post('mensagem_conteudo'),
        'mensagem_data_envio' => date('H:d | d-m-Y')
    );
    $this->db->insert('chat', $data);

  }

  public function exibirMensagens(){
    $this->db->select('*');
    $this->db->from('chat');
    $this->db->where('mensagem_remetente_id', $this->session->userdata('usuario_id'));
    $this->db->where('mensagem_destinatario_id', $this->uri->segment(3));
    $query = $this->db->get();
    if ($query->num_rows() < 0) {
        return false;
    }
    return $query->result();
}

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
}