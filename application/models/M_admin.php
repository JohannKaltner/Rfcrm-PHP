<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_Admin extends CI_Model {

    private $_limit;
	private $_pageNumber;
	private $_offset;

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getAllUserCount()
  {
      $this->db->from('usuario');
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

  public function index()
  {

  }

  function listarRegistros($query = '')
	{
		$this->db->select(array('u.usuario_id', 'u.usuario_nome', 'u.usuario_setor', 'u.usuario_nivel', 'u.usuario_data_inicio'));
		$this->db->from('usuario as u');
		$this->db->limit($this->_pageNumber, $this->_offset);
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result_array();
	}

//   function contarLinhas($cliente){
//     $query = $this->db->get($cliente);
//     $contarLinhas = $query->num_rows();
//     return $contarLinhas;       
// }

}