
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
class C_Publicacao extends CI_Controller {

	function __construct(){
        
        parent::__construct();

        $this->load->model('M_home');

        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        

		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('C_login');
		}
	  }

	public function index()
	{
            // 
            // acesso admin
			// if($this->session->userdata('usuario_nivel')==='1'){
		 	// $data['page_title'] = "RFCRM - Dashboard";
		 	// $this->template->show('home',$data);
			// }elseif($this->session->userdata('usuario_nivel')==='2'){
			// 	$this->template->show('home',$data);
			// 	//echo "Você ainda não foi aprovado pelo administrador ";
			// }else{
			// 	redirect('/404'); 
            // echo "Você ainda não foi aprovado pelo administrador ";
            // }
            //  
			// $this->template->show('home');
			// $data['numeroClientes']= $this->M_Home->contarLinhas("cliente");
			// $this->load->model('M_home', $data);
	}
	
	public function criarPost(){
		$this->M_home->novoPost();
		//echo "<script> window.history.go(-1);</script>";
		redirect('Home');
	}

    


}

