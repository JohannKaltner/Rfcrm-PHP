<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Log extends CI_Model
{
    private $_limit;
	private $_pageNumber;
	private $_offset;
    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    	//
	// ─── FOR PAGINATION ─────────────────────────────────────────────────────────────────
	//

	public function getAllLogCount()
	{
		$this->db->from('log');
		return $this->db->count_all_results();
	}

	public function setLimit($limit)
	{
		$this->_limit = $limit;
	}

	public function setPageNumber($pageNumber)
	{
		$this->_pageNumber = $pageNumber;
	}

	public function setOffset($offset)
	{
		$this->_offset = $offset;
	}

	//
	// ─── LISTAGEM ───────────────────────────────────────────────────────────────────
	//



    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------
    public function index()
    {
        // 
    }


    // function registrarAtividade()
    // {
       

    //     $this->db->insert('cliente', $data);
    // }

    function listarRegistros($query = '')
	{
		$this->db->select(array('l.log_id','l.log_atividade', 'l.log_tipo', 'l.log_data', 'l.log_usuario_nome'));
        $this->db->order_by('log_id', 'DESC');
        $this->db->from('log as l');
		$this->db->limit($this->_pageNumber, $this->_offset);
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result_array();
    }
    
    
    // function listarLogs()
    // {
    //     $this->db->select('*');
    //     $this->db->from('log');
    //     $this->db->order_by('log_data', 'DESC');
    //     $query = $this->db->get();
    //     if ($query->num_rows() < 1) {
    //         return FALSE;
    //     }
    //     return $query->result();
    // }
}


/* End of file M_usuario_model.php */
/* Location: ./application/models/M_usuario_model.php */
