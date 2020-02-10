<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_historico extends CI_Model
{

    

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function select()
	{
		$this->db->order_by('chamado_cdr_id', 'DESC');
		$query = $this->db->get('chamado_cdr');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('chamado_cdr', $data);
	}
  
   
}

