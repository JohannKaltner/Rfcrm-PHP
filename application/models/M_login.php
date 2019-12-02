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

  public function consultarUsuario(){
    $this->db->select('*');
    $this->db->from('usuario');
    $query = $this->db->get();
    return $query;

}


  public function verificaUsuario($usuario_email, $usuario_senha){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('usuario_email', $usuario_email);
        $this->db->where('usuario_senha', $usuario_senha);
        $query = $this->db->get();
        return $query;

  }

  
  public function criarUsuario()
  {
    $data = array(
      'usuario_nome'   => $this->input->post('usuario_nome'),
      'usuario_email'  => $this->input->post('usuario_email'),
      'usuario_senha'  => $this->input->post('usuario_senha'),
      'usuario_setor'  => $this->input->post('usuario_setor'),
      'usuario_nivel'  => $this->input->post('usuario_nivel')
    );
    $this->db->insert('usuario', $data);
  }

  //   public function verificaAdmin(){
  //   $this->db->select('usuario_nivel');
  //   $this->db->from('usuario');
  //   $query = $this->db->get();
  //   return $query;

      
  // }


}