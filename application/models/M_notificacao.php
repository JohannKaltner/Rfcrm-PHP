<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_notificacao extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }
  public function apagar($notification_id = NULL)
    {
    
        $this->db->where('notification_id', $notification_id);
        $this->db->delete('notification');
    
        $dataSession = array(
            'usuario_status' => 'Online',
              );
    
          $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
          $this->db->update('usuario', $dataSession);
    }

  }

 

/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
