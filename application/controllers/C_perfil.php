<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Perfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cliente');
		$this->load->model('M_usuario');

		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		
	}
	
	public function index($usuario_id = NULL)
	{
		
		$data['page_title'] = "RFCRM - Perfil";
		$data['result'] = $this->M_usuario->consultar_permissao($usuario_id);
		//$data['chamado'] = $this->M_usuario->userChamados($usuario_id); 
		$this->template->show('perfil',$data);	

	}

	public function editaUsuario()
	{
		$this->M_usuario->atualizarUsuarioComum();
		echo "<script> window.history.go(-1);</script>";
		
	}

	public function salvar(){
		$usuario          = $this->session->userdata('usuario_id');
		$foto    = $_FILES['foto'];
		$configuracao = array(
			'upload_path'   => './public/images/perfil',
			'allowed_types' => 'png|jpg|jpeg',
			'file_name'     => $usuario.'.png',
			'max_size'      => '20000'
		);      
		$this->load->library('upload');
		$this->upload->initialize($configuracao);

		 $data = array(
		 'usuario_img' => $this->input->post('foto'),
		 );
		 $this->db->where('usuario_id', $this->session->userdata('usuario_id'));
		 $this->db->update('usuario', $data);

		 if ($this->upload->do_upload('foto'))
		 echo "<script> window.history.go(-1);</script>";
		 else
			echo $this->upload->display_errors();
	}
}
