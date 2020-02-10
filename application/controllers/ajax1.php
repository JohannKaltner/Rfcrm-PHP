<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


	public function index()	{
 			$mensagem_id_para = $this->uri->segment(3);
			$mensagem_id_de = $this->session->userdata('usuario_id');
			$where = "r.mensagem_id_de ='$mensagem_id_de' AND r.mensagem_id_para ='$mensagem_id_para' OR r.mensagem_id_de ='$mensagem_id_para' AND r.mensagem_id_para ='$mensagem_id_de'";
		   $this->db->select('r.mensagem_id_de,r.mensagem_id_para ,r.mensagem,r.mensagem_data,r.mensagem_hora');
		   $this->db->from('chat as r');
		   $this->db->where($where);
		  
		   $this->db->order_by('r.mensagem_data', 'ASC');
		   $query = $this->db->get();
		   if ($query->num_rows() < 1) {
			   return false;
		   }
		   return $query->result();
 
	 }
	 
}
