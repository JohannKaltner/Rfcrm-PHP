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

  public function getAllUserCount()
  {
      $this->db->from('usuario');
      return $this->db->count_all_results();
  }

  public function getAllUserCountSearch($keyword)
  {
      $this->db->from('usuario');
      $this->db->where('usuario_nome', $keyword);
      $this->db->where('usuario_setor', $keyword);
      return $this->db->count_all_results();
  }

  public function setLimit($limit)
  {
      $this->_limit = $limit;
  }

  public function setPageNumber($pageNumber)
  {
      $this->_pageNumber = $pageNumber;
  }

  public function setOffset($offset)
  {
      $this->_offset = $offset;
  }

  function listarRegistros($query = '')
  {
      $this->db->select(array('u.usuario_id', 'u.usuario_nome', 'u.usuario_setor', 'u.usuario_nivel', 'u.usuario_data_inicio'));
      $this->db->from('usuario as u');
      $this->db->order_by('usuario_nome', 'asc');
      $this->db->limit($this->_pageNumber, $this->_offset);
      $query = $this->db->get();
      if ($query->num_rows() < 1) {
          return FALSE;
      }
      return $query->result_array();
  }

  function listarRegistro($usuario_id = NULL)
{
      $this->db->select(array('i.usuario_id','i.usuario_facebook','i.usuario_instagram','i.usuario_twitter','i.usuario_linkedin','i.usuario_email', 'i.usuario_nome', 'i.usuario_setor', 'i.usuario_nivel', 'i.usuario_data_inicio'));        $this->db->from('usuario as u');
       $this->db->where('i.usuario_id', $this->uri->segment(3));
       $this->db->from('usuario as i');

       // $this->db->from('usuario');
      // $this->db->where("usuario_id", $usuario_id);
      // $query = $this->db->get();
      $query = $this->db->get();
      if ($query->num_rows() < 1) {
          return FALSE;
      }
      return $query->result();
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


public function atualizarUsuario($usuario_id)
{
    
        date_default_timezone_set('America/Fortaleza');
 

    $data = array(
        
        'usuario_nome'  => $this->input->post('usuario_nome'),
        'usuario_setor' => $this->input->post('usuario_setor'),
        'usuario_email' => $this->input->post('usuario_email'),
        'usuario_nivel' => $this->input->post('usuario_nivel'),
        'usuario_senha' => $this->input->post('usuario_senha'),
        // 'usuario_facebook' => $this->input->post('usuario_facebook'),
        // 'usuario_linkedin' => $this->input->post('usuario_linkedin'),
        // 'usuario_twitter' => $this->input->post('usuario_twitter'),
        // 'usuario_instagram' => $this->input->post('usuario_instagram'),
       //  'usuario_hora_registro' => date('d/m/Y - H:d'),
        'usuario_ultima_alteracao' => date('d/m/Y - H:d'),
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

    
    $dataSession = array(
      'usuario_status' => 'Online',
        );

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $dataSession);
}

public function atualizarUsuarioComum()
{
    
            date_default_timezone_set('America/Fortaleza');
 

    $data = array(
        
        'usuario_nome'  => $this->input->post('usuario_nome'),
        'usuario_email' => $this->input->post('usuario_email'),
  
        'usuario_senha' => $this->input->post('usuario_senha'),
        'usuario_ultima_alteracao' => date('d/m/Y - H:d'),
        'usuario_whatsapp' => $this->input->post('usuario_whatsapp'),
        'usuario_gmail' => $this->input->post('usuario_gmail'),
        'usuario_outlook' => $this->input->post('usuario_outlook'),
        // 'usuario_twitter' => $this->input->post('usuario_twitter'),
        // 'usuario_instagram' => $this->input->post('usuario_instagram'),
        //  'usuario_hora_registro' => date('d/m/Y - H:d'),
    );

    $data2 = array(
        'log_atividade' => "Atualizou seu perfil.",
        'log_tipo' => '2',
        'log_data' => date ('d-m-Y - H:d'),
        'log_usuario_nome' => $this->session->userdata('usuario_nome'),
    );
    $this->db->insert('log', $data2);

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $data);

    
    $dataSession = array(
      'usuario_status' => 'Online',
        );

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $dataSession);
}


public function listarBusca($keyword = null)
{
    $keyword = $this->input->post('keyword');
    $this->db->select('u.usuario_nome,u.usuario_setor,u.usuario_id');
    $this->db->from('usuario as u');
    $this->db->limit($this->_pageNumber, $this->_offset);
    $this->db->like('usuario_nome', $keyword);
    $this->db->or_like('usuario_setor', $keyword);
    $query = $this->db->get();
    if ($query->num_rows() < 1) {
        return false;
    }
    return $query->result();
}



}

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
