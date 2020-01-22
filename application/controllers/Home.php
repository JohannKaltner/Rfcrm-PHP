<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$title = "Home";

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_home');

		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('C_login');
		}
	  }

	public function index()
	{
			// //acesso admin
			// if($this->session->userdata('usuario_nivel')==='1'){
			 $data['page_title'] = "RFCRM - Dashboard";
			 $data['posts'] = $this->M_home->listarPosts();
		 	 $this->template->show('home',$data);
			// }elseif($this->session->userdata('usuario_nivel')==='2'){
			// 	$this->template->show('home',$data);
			// 	//echo "Você ainda não foi aprovado pelo administrador ";
			// }else{
			// 	redirect('/404');
			// 	//echo "Você ainda não foi aprovado pelo administrador ";
			}


			// $this->template->show('home');
			// $data['numeroClientes']= $this->M_Home->contarLinhas("cliente");
			// $this->load->model('M_home', $data);
			//}
	
	// public function listarPost(){
 	// 	$data['clienteInfo'] = $this->M_home->listarPosts();
	// 	echo "<script> window.history.go(-1);</script>";
	
	public function deletaPost($post_id = NULL){
		$this->M_home->apagarPost($post_id);
		echo "<script> window.history.go(-1);</script>";
	}
	
}




