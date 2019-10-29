<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Login extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }



  public function index()
  {

  }

  public function verificaUsuario($usuario_email, $usuario_senha){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('usuario_email', $usuario_email);
        $this->db->where('usuario_senha', md5($usuario_senha));
        $query = $this->db->get();
        return $query;

  }
 
}