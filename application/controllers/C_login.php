
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_login');
  }
 
  function index(){
    $this->load->view('login');
  }
 

  //
  // ─── FUNÇÃO PARA AUTENTICACÃO ───────────────────────────────────────────────────
  //
    
  function auth(){
    $usuario_email    = $this->input->post('usuario_email',TRUE);
    $usuario_senha    = $this->input->post('usuario_senha',TRUE);
    $validate         = $this->M_login->verificaUsuario($usuario_email, $usuario_senha);
   
     if($validate->num_rows() > 0){
        $data                = $validate->row_array();
        $usuario_id          = $data['usuario_id'];
        $usuario_nome        = $data['usuario_nome'];
        $usuario_email       = $data['usuario_email'];
        $usuario_nivel       = $data['usuario_nivel'];
        $usuario_setor       = $data['usuario_setor'];
        $usuario_img         = $data['usuario_img'];
        $usuario_data_inicio = $data['usuario_data_inicio'];


        $sesdata = array(
            'usuario_id'          => $usuario_id,
            'usuario_nome'        => $usuario_nome,
            'usuario_email'       => $usuario_email,
            'usuario_nivel'       => $usuario_nivel,
            'usuario_setor'       => $usuario_setor,
            'usuario_img'         => $usuario_img,
            'usuario_data_inicio' => $usuario_data_inicio,
            'logged_in'           => TRUE
        );

       
          

        $this->session->set_userdata($sesdata);
        // access login for admin
        if($usuario_nivel === '1'){
            // $admin == TRUE;
            redirect('home');
            $dataSession = array(
              'usuario_status' => 'Online',
                );
        
            $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
            $this->db->update('usuario', $dataSession);
        }elseif($usuario_nivel === '2'){
            redirect('home');
            $dataSession = array(
              'usuario_status' => 'Online',
                );
        
            $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
            $this->db->update('usuario', $dataSession);
    
        }elseif($usuario_nivel === '3'){
            redirect('home');
            $dataSession = array(
              'usuario_status' => 'Online',
                );
        
            $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
            $this->db->update('usuario', $dataSession);
        }else {
          redirect('/404.php');
        }

    }else{
        echo $this->session->set_flashdata('msg','Credenciais Incorretas, Tente Novamente.');
         redirect('C_login');
    } 

    $dataSession = array(
			'usuario_status' => '1',
        );

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $dataSession);
      

  }
 
  function logout(){
    $dataSession = array(
      'usuario_status' => 'Offline',
        );

    $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
    $this->db->update('usuario', $dataSession);
      $this->session->sess_destroy();
      redirect('C_login');
  }

  public function criarUsuario(){
    $this->M_login->criarUsuario();
    redirect('C_login');
    echo "<script type='javascript'>alert('Agora é só esperar sua contar ser Confirmada :D!'); </script>";
}
  public function criarUsuarioAdmin(){
    $this->M_login->criarUsuario();
    redirect('C_admin');
}
 

//
// ─── AREA DE ADM ────────────────────────────────────────────────────────────────
//  
  // public function verificaAdmin($admin = '', $usuario_nivel =''){
  //   $this->M_usuario->verificaAdmin();
  //   if($usuario_nivel === '1'){
  //     $admin == TRUE;
  //   }else{
  //       $admin==FALSE;
  //    }
  // }

  }
