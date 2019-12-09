<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Usuario extends CI_Controller {


	public function index()
	{
		$this->load->library('upload');
		$config['upload_path'] = './public/images/perfil/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
	}

	public function editarUsuario($usuario_id = NULL){
		$this->M_usuario->atualizarUsuario($usuario_id);
		redirect('c_admin/');
	}
}
