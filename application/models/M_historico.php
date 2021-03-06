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
		$this->db->order_by('chamado_cdr_id', 'ASC');
		$this->db->where('cdr_status', 'ANSWERED');
		$query = $this->db->get('chamado_cdr');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('chamado_cdr', $data);
	}
  
	function truncarHistorico(){
		$this->db->empty_table('chamado_cdr');
	}
   
}

