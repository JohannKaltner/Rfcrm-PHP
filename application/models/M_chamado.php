
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_chamado extends CI_Model {

   public function __construct(){
     parent::__construct();
     $this->load->database();
   }

   public function index(){
   // $data['url_id'] = $this->uri->segment(3);
   }

  function novoChamado($data = ''){
    date_default_timezone_set('America/Sao_Paulo');

      $data = array(
        'chamado_atividade'          => $this->input->post('chamado_atividade'),
        'chamado_duracao_minuto'     => $this->input->post('chamado_duracao_minuto'),
        'chamado_duracao_hora'       => $this->input->post('chamado_duracao_hora'),
        'chamado_assunto'            => $this->input->post('chamado_assunto'),
        'chamado_data'               => $this->input->post('chamado_data'),
        'chamado_hora'               => $this->input->post('chamado_hora'),
        'chamado_atendente_rf'       => $this->input->post('chamado_atendente_rf'),
        'chamado_atendente_cliente'  => $this->input->post('chamado_atendente_cliente'),
        'chamado_obs'                => $this->input->post('chamado_obs'),
        'chamado_telefone'           => $this->input->post('chamado_telefone'),
        'chamado_email'              => $this->input->post('chamado_email'),
        'chamado_id_cliente'         => $this->input->post('chamado_id_cliente'),
        'chamado_id_usuario'         => $this->input->post('chamado_id_usuario'),
        'chamado_meio'               => $this->input->post('chamado_meio'),
        // 'chamado_hora_registro'      => date('d/m/Y - H:d'),

        // 'chamado_id_cliente'         => $this->uri->segment(3)
      );
      $data2 = array(
        'log_atividade' => 'Registrou um Contato',
        'log_tipo' => '1',
        'log_data' => date('d-m-Y - H-d'),
        'log_usuario_nome' => $this->session->userdata('usuario_nome'),
    );
    $this->db->insert('log', $data2);
      
      $this->db->insert('chamado', $data);

      
      $dataSession = array(
        'usuario_status' => 'Online',
          );
  
      $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
      $this->db->update('usuario', $dataSession);
    }
    
    function listarChamados($cliente_id){
        $query = $this->db->query('SELECT * FROM chamado');
      if($query->num_rows() < 1){
        return FALSE;
      }
        return $query->result();
        // WHERE chamado_id_cliente ='.$cliente_id
      }

    

    }