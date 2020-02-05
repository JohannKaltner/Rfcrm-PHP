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
    date_default_timezone_set('America/Fortaleza');

    //$usuario_id =NULL ;
    
    $data =array(
        'mensagem_id_de' => $this->session->userdata('usuario_id'),
        'mensagem_id_para ' => $this->input->post('mensagem_id_para'),
        'mensagem' => $this->input->post('mensagem'),
        'mensagem_data' => date('d - M'),
        'mensagem_hora' => date('H:i')
    );
    $this->db->insert('chat', $data);

    
    $dataSession = array(
      'usuario_status' => 'Online',
        );

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $dataSession);

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
    $mensagem_id_para = $this->uri->segment(3);
    $mensagem_id_de = $this->session->userdata('usuario_id');
    $where = "r.mensagem_id_de ='$mensagem_id_de' AND r.mensagem_id_para ='$mensagem_id_para' OR r.mensagem_id_de ='$mensagem_id_para' AND r.mensagem_id_para ='$mensagem_id_de'";
   $this->db->select('r.mensagem_id_de,r.mensagem_id_para ,r.mensagem,r.mensagem_data,r.mensagem_hora');
   $this->db->from('chat as r');
   $this->db->where($where);
  
   $this->db->order_by('r.mensagem_data', 'ASC');
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