
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
 
  function auth(){
    $usuario_email    = $this->input->post('usuario_email',TRUE);
    $usuario_senha    = $this->input->post('usuario_senha',TRUE);
    $validate         = $this->M_login->verificaUsuario($usuario_email, $usuario_senha);
   
     if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $usuario_nome  = $data['usuario_nome'];
        $usuario_email = $data['usuario_email'];
        $usuario_nivel = $data['usuario_nivel'];
        $sesdata = array(
            'usuario_nome'      => $usuario_nome,
            'usuario_email'     => $usuario_email,
            'usuario_nivel'     => $usuario_nivel,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($sesdata);
        // access login for admin
        if($usuario_nivel === '1'){
            $admin == '1';
            redirect('home');
        }else{
            redirect('home');
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
  
 
}