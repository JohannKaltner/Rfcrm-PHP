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

}

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
