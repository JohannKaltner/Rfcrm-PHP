
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
        $usuario_data_inicio = $data['usuario_data_inicio'];

        $sesdata = array(
            'usuario_id'          => $usuario_id,
            'usuario_nome'        => $usuario_nome,
            'usuario_email'       => $usuario_email,
            'usuario_nivel'       => $usuario_nivel,
            'usuario_setor'       => $usuario_setor,
            'usuario_data_inicio' => $usuario_data_inicio,
            'logged_in'           => TRUE
        );

        $this->session->set_userdata($sesdata);
        // access login for admin
        if($usuario_nivel === '1'){
            // $admin == TRUE;
            redirect('C_admin');
        }elseif($usuario_nivel === '0'){
            redirect('home');
        }else {
          redirect('/404.php');
        }

    }else{
        echo $this->session->set_flashdata('msg','Credenciais Incorretas, Tente Novamente.');
         redirect('C_login');
    }

  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('C_login');
  }

  public function criarUsuario(){
    $this->M_login->criarUsuario();
    redirect('C_login');
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
