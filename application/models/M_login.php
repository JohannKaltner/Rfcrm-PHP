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

		date_default_timezone_set('America/Sao_Paulo');
		
    $data = array(
      'usuario_nome'   => $this->input->post('usuario_nome'),
      'usuario_email'  => $this->input->post('usuario_email'),
      'usuario_senha'  => $this->input->post('usuario_senha'),
      'usuario_setor'  => $this->input->post('usuario_setor'),
      'usuario_nivel'  =>'2',
      'usuario_data_inicio'  => $this->input->post('usuario_data_inicio'),

    );
    $this->db->insert('usuario', $data);
  }
  public function criarUsuarioADM()
  {

		date_default_timezone_set('America/Sao_Paulo');
		
    $data = array(
      'usuario_nome'   => $this->input->post('usuario_nome'),
      'usuario_email'  => $this->input->post('usuario_email'),
      'usuario_senha'  => $this->input->post('usuario_senha'),
      'usuario_setor'  => $this->input->post('usuario_setor'),
      'usuario_nivel'  => $this->input->post('usuario_nivel'),
      'usuario_data_inicio'  => $this->input->post('usuario_data_inicio'),

    );

    $data2 = array(
      'log_atividade' => 'Registrou um Usuario',
      'log_tipo' => '1',
      'log_data' => date('d-m-Y - H-d'),
      'log_usuario_nome' => $this->session->userdata('usuario_nome'),
  );
  $this->db->insert('log', $data2);
    $this->db->insert('usuario', $data);
  }

  public function editaUsuario($usuario_id)
  {
    $data = array(
      'usuario_nome'   => $this->input->post('usuario_nome'),
      'usuario_email'  => $this->input->post('usuario_email'),
      'usuario_senha'  => $this->input->post('usuario_senha'),
      'usuario_setor'  => $this->input->post('usuario_setor'),
      'usuario_nivel'  => $this->input->post('usuario_nivel'),
      'usuario_data_inicio'  => $this->input->post('usuario_data_inicio'),
    );
    $data2 = array(
			'log_atividade' => 'Atualizou um Cliente',
            'log_tipo' => '2',
            'log_data' => date ('d-m-Y - H:d'),
            'log_usuario_nome' => $this->session->userdata('usuario_nome'),
    );
    $this->db->insert('log', $data2);

    $this->db->where('usuario_id', $usuario_id);
    $this->db->update('usuario', $data);
    }

  //   public function verificaAdmin(){
  //   $this->db->select('usuario_nivel');
  //   $this->db->from('usuario');
  //   $query = $this->db->get();
  //   return $query;

      
  // }


}