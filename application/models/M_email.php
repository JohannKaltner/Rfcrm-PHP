<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_email extends CI_Model
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
  }
    
  public function  novoEmail(){
        date_default_timezone_set('America/Fortaleza');
        
        $data = array(
            'email_de' => $this->session->userdata('usuario_email'),
            'email_de_id' => $this->session->userdata('usuario_id'),
            'email_para' => $this->input->post('email_para'),
            'email_assunto' => $this->input->post('email_assunto'),
            'email_mensagem' => $this->input->post('email_mensagem'),
            'email_anexo' => $this->input->post('email_anexo'),
            'email_data_envio' => date('d/m/Y') ,
            'email_hora_envio' => date('H:i')
        );
        
        $data2 = array(
			'log_atividade' => 'Enviou email para um Cliente.',
            'log_tipo' => '1',
            'log_data' => date ('d-m-Y - H:i'),
            'log_usuario_nome' => $this->session->userdata('usuario_nome'),
        );

        $dataSession = array(
            'usuario_status' => 'Online',
              );
      
        $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
        $this->db->update('usuario', $dataSession);

        $this->db->insert('log', $data2);
        
        $this->db->insert('email', $data);

    }

  }
 

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
