<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_home extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function index(){}

  public function novoPost(){
    date_default_timezone_set('America/fortaleza');
   
    $data = array(
			      'post_conteudo' => $this->input->post('post_conteudo'),
            'post_usuario_id' => $this->session->userdata('usuario_id'),
            'post_usuario_nome' => $this->session->userdata('usuario_nome'),
            'post_usuario_setor' => $this->session->userdata('usuario_setor'),
            'post_data' => date('d-m-Y'),
            'post_hora' => date('H:d'),
            'post_status' => '1',
            'post_categoria' => $this->input->post('post_categoria'),
        );
        
        $data2 = array(
          'log_atividade' => 'Fez um postagem no Feed',
          'log_tipo' => '1',
          'log_data' => date ('d-m-Y - H:d'),
          'log_usuario_nome' => $this->session->userdata('usuario_nome'),
        );
        $this->db->insert('post', $data);
        $this->db->insert('log', $data2);
      }

      public function listarPosts(){
        $this->db->select("*");
        $this->db->from('post');
        $this->db->where('post_status', '1');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        if ($query->num_rows() < 1) {
            return false;
        }
        return $query->result();
     }

     public function apagarPost($post_id)
     {
      $data1 = array(
        'post_status' => '0',
          );
  
          $this->db->where('post_id', $post_id);
          $this->db->update('post', $data1);

           $data2 = array(
               'log_atividade' => 'Apagou um Post',
               'log_tipo' => '3',
               'log_data' => date('d-m-Y - H-d'),
               'log_usuario_nome' => $this->session->userdata('usuario_nome'),
           );
           $this->db->insert('log', $data2);
   
           
           $dataSession = array(
               'usuario_status' => 'Online',
                 );
         
             $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
             $this->db->update('usuario', $dataSession);
       }


}