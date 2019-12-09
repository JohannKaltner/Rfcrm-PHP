<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_usuario extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }


  public function consultar_permissao($usuario_id)
  {
    $this->db->select('*');
    $this->db->from('usuario');
    $query = $this->db->get();
    if ($query->num_rows() < 1) {
      return FALSE;
    }
    return $query->result();
  }

  public function verificaAdmin(){
    $this->db->select('usuario_nivel');
    $this->db->from('usuario');
    $query = $this->db->get();
    if ($query->num_rows() < 1) {
      return FALSE;
    }
    return $query->result();
  }

//   function userChamados() 
// {
//      $this->db->select("usuario.usuario_id, usuario.usuario_nome");
//      $this->db->from('usuario');
//      $this->db->where("usuario.usuario_id", $this->session->userdata('usuario_id'));
//      $this->db->join('chamado','usuario.usuario_id = chamado.chamado_id_usuario');
//      $this->db->order_by('usuario_nome desc');
//      $query = $this->db->get('usuario');
//      $num = $query->num_rows();
//     return $query->result();
// }


public function atualizarUsuario($usuario_id = null)
{
date_default_timezone_set('America/Sao_Paulo');

    $data = array(
        
        'usuario_nome' => $this->input->post('usuario_nome'),
        'usuario_setor' => $this->input->post('usuario_setor'),
        'usuario_email' => $this->input->post('usuario_email'),
        'usuario_nivel' => $this->input->post('usuario_nivel'),
        'usuario_facebook' => $this->input->post('usuario_facebook'),
        'usuario_linkedin' => $this->input->post('usuario_linkedin'),
        'usuario_twitter' => $this->input->post('usuario_twitter'),
        'usuario_instagram' => $this->input->post('usuario_instagram'),
        'usuario_hora_registro' => date('d/m/Y - H:d'),
        'cliente_ultima_alteracao' => date('d/m/Y - H:d'),

    );

    $data2 = array(
        'log_atividade' => "Atualizou o Usuario de ID: $usuario_id",
        'log_tipo' => '2',
        'log_data' => date ('d-m-Y - H:d'),
        'log_usuario_nome' => $this->session->userdata('usuario_nome'),
    );
    $this->db->insert('log', $data2);

    $this->db->where('usuario_id', $usuario_id);
    $this->db->update('usuario', $data);
}

}

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
