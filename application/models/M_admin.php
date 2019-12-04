<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{

    private $_limit;
    private $_pageNumber;
    private $_offset;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
    //  public function exibirUsuario($usuario_id ='')
    //  {
    //         $query = $this->db->query("SELECT * FROM usuario WHERE usuario_id ='.$usuario_id.'");
    //         if ($query->num_rows() > 0) {
    //             return $query->row(); // will return single item;    
    //         }else{
    //             return NULL;
    //         }
        
    // }

    //     $query = $this->db->query("SELECT * FROM usuario WHERE usuario_id =  '.$usuario_id.'");
    // 	if ($query->num_rows() > 0) {
    // 		return $query->row(); // will return single item;    
    // 	}
    // 
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
    { }

    function listarRegistros($query = '')
    {
        $this->db->select(array('u.usuario_id', 'u.usuario_nome', 'u.usuario_setor', 'u.usuario_nivel', 'u.usuario_data_inicio'));
        $this->db->from('usuario as u');
        $this->db->order_by('usuario_nome', 'asc');
        $this->db->limit($this->_pageNumber, $this->_offset);
        $query = $this->db->get();
        if ($query->num_rows() < 1) {
            return FALSE;
        }
        return $query->result_array();
    }

    function listarRegistro($usuario_id = NULL)
	{   
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('usuario_id', $usuario_id);
        $query = $this->db->get();
		// $query = $this->db->query("SELECT * FROM usuario WHERE usuario_id", $usuario_id);
		if ($query->num_rows() > 0) {
			return $query; // will return single item;    
		}
    }
    
    //   function contarLinhas($cliente){
    //     $query = $this->db->get($cliente);
    //     $contarLinhas = $query->num_rows();
    //     return $contarLinhas;       
    // }

    public function truncarContatos()
    {
        $this->db->truncate('contato_secundario');
    }
    public function truncarCliente()
    {
        $this->db->truncate('cliente');
    }
    public function truncarChamado()
    {
        $this->db->empty_table('chamado_old');
    }
    public function truncarCorrecao()
    {
        $this->db->truncate('correcao');
    }



    public function criarAlerta()
    {
        $data = array(
            'alerta_id'       => $this->input->post('alerta_id'),
            'alerta_mensagem' => $this->input->post('alerta_mensagem'),
            'alerta_usuario'  => $this->input->post('alerta_usuario'),
            'alerta_data'     => $this->input->post('alerta_data'),
            'alerta_titulo'     => $this->input->post('alerta_titulo')
        );
        $this->db->insert('alerta', $data);
    }

    public function listarAlertas()
    {
        $this->db->select('*');
        $this->db->from('alerta');
        $this->db->order_by('alerta_id', 'desc');
        $this->db->limit('3', '3');
    }

    public function apagarUsuario($usuario_id)
	{
		$this->db->where('usuario_id', $usuario_id);
		$this->db->delete('usuario');
	}
}

