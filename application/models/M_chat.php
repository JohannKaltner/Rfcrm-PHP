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

//   public function exibirMensagensEnviadas(){
//     $this->db->select('e.mensagem_remetente_id,e.mensagem_destinatario_id ,e.mensagem_conteudo,e.mensagem_data_envio');
//     $this->db->from('chat as e');
//     $this->db->where('mensagem_remetente_id', $this->session->userdata('usuario_id'));
//     $this->db->where('mensagem_destinatario_id', $this->uri->segment(3));
     
//     $query = $this->db->get();
//     if ($query->num_rows() < 1) {
//         return false;
//     }
//     return $query->result();
// }
//   public function exibirMensagensRecebidas(){
//     $this->db->select('r.mensagem_remetente_id,r.mensagem_destinatario_id ,r.mensagem_conteudo,r.mensagem_data_envio');
//     $this->db->from('chat as r');
//     $this->db->where('mensagem_destinatario_id', $this->session->userdata('usuario_id'));
//     $this->db->where('mensagem_remetente_id', $this->uri->segment(3));
//     $query = $this->db->get();
//     if ($query->num_rows() < 1) {
//         return false;
//     }
//     return $query->result();
// }

public function exibirMensagens(){
  
  $this->db->select('r.mensagem_remetente_id,r.mensagem_destinatario_id ,r.mensagem_conteudo,r.mensagem_data_envio');
  $this->db->from('chat as r');
  $this->db->where('r.mensagem_remetente_id', $this->session->userdata('usuario_id'));
  //$this->db->where('r.mensagem_destinatario_id', $this->uri->segment(3));
  $this->db->order_by('r.mensagem_data_envio', 'ASC');
  // ->where('mensagem_destinatario_id', $this->uri->segment(3))
  // ->where('mensagem_remetente_id', $this->session->userdata('usuario_id'));
  
  $query = $this->db->get();
  if ($query->num_rows() < 1) {
      return false;
  }
  return $query->result();
}


/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
}