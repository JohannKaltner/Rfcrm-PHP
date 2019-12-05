<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cliente extends CI_Model
{
	private $_limit;
	private $_pageNumber;
	private $_offset;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{ }

	//
	// ─── FOR PAGINATION ─────────────────────────────────────────────────────────────────
	//

	public function getAllClienteCount()
	{
		$this->db->from('cliente');
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


	function listarRegistros($query = '')
	{
		$this->db->select(array('c.cliente_id', 'c.cod_cliente', 'c.cliente_nome', 'c.cliente_cnpj', 'c.cliente_cpf', 'c.cliente_telefone', 'c.cliente_cidade', 'c.cliente_endereco', 'c.cliente_bairro', 'c.cliente_cep'));
		$this->db->from('cliente as c');
		$this->db->limit($this->_pageNumber, $this->_offset);
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result_array();
	}

	// ID 	Codigo 	Nome 	CNPJ/CPF 	TELEFONE 	CIDADE 	ENDEREÇO 	BAIRRO 	CEP 	FUNÇÕES

	//  function listarRegistros()
	//  {
	//  	$query = $this->db->query('SELECT * FROM cliente ORDER BY cliente_id ASC');

	//  	if ($query->num_rows() < 1) {
	//  		return FALSE;
	//  	}
	//  	return $query->result();
	//  }

	function listarRegistro($cliente_id = NULL)
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('cliente.cliente_id', $cliente_id);
		$query = $this->db->get();
		return $query->result();


		// $query = $this->db->query("SELECT * FROM cliente WHERE cliente_id =  '.$cliente_id.'");
		// if ($query->num_rows() > 0) {
		// 	return $query->row(); // will return single item;    
		// }
	}

	public function listarContatosCliente($cliente_id)
	{
		$this->db->select('*');
		$this->db->from('contato_secundario');
		$this->db->join('cliente', 'cliente.cliente_id = contato_secundario.cliente_contato_id');
		$this->db->where('contato_secundario.cliente_contato_id =' . $cliente_id);
		$this->db->order_by('contato_secundario_id', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result();
	}

	public function get_nome($cliente_id)
	{
		$this->db->select('cliente_nome');
		$this->db->from('cliente');
		$this->db->where('cliente_id = ' . $cliente_id);
		$query = $this->db->get();

		if ($query->num_rows() < 1) {
			return 'Cliente';
		}
		return $query->result();
	}

	public function listarChamadosCliente($cliente_id)
	{
		$this->db->select('*');
		$this->db->from('chamado');
		$this->db->join('cliente', 'cliente.cliente_id = chamado.chamado_id_cliente');
		$this->db->where('chamado.chamado_id_cliente =' . $cliente_id);
		$this->db->order_by('chamado_id', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result();
	}

	public function listarCorrecaoCliente($cliente_id)
	{
		$this->db->select('*');
		$this->db->from('correcao');
		$this->db->join('cliente', 'cliente_id = correcao_id_cliente');
		$this->db->where('correcao_id_cliente =' . $cliente_id);
		$this->db->order_by('correcao_id', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result();
	}

	public function listarBusca($match = NULL)
	{
		$match = $this->input->post('busca');
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->like('cliente_nome', $match);
		$this->db->or_like('cod_cliente', $match);
		$this->db->or_like('cliente_email', $match);
		$this->db->or_like('cliente_endereco', $match);
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return FALSE;
		}
		return $query->result();
	}

	public function retorna_contatos($cliente_id= NULL)
	{
		$this->db->select('*');
		$this->db->from('contato_secundario');
		$this->db->where('cliente_contato_id', $cliente_id);
		$this->db->order_by("contato_secundario_nome", "asc");
		$consulta = $this->db->get();
		return $consulta;
	}



	//
	// ─── CRIACAO ────────────────────────────────────────────────────────────────────
	//


	function criarDados()
	{
		$data = array(
			'cod_cliente'                  => $this->input->post('cod_cliente'),
			'cliente_id_usuario'           => $this->input->post('cliente_id_usuario'),
			'cliente_nome'                 => $this->input->post('cliente_nome'),
			'cliente_endereco'             => $this->input->post('cliente_endereco'),
			'cliente_bairro'               => $this->input->post('cliente_bairro'),
			'cliente_cidade'               => $this->input->post('cliente_cidade'),
			'cliente_estado'               => $this->input->post('cliente_estado'),
			'cliente_pais'                 => $this->input->post('cliente_pais'),
			'cliente_cep'                  => $this->input->post('cliente_cep'),
			'cliente_cnpj'                 => $this->input->post('cliente_cnpj'),
			'cliente_cpf'             	   => $this->input->post('cliente_cpf'),
			'cliente_inscricao_estadual'   => $this->input->post('cliente_inscricao_estadual'),
			'cliente_categoria'            => $this->input->post('cliente_categoria'),
			'cliente_telefone'             => $this->input->post('cliente_telefone'),
			'cliente_email'                => $this->input->post('cliente_email')
		);

		$this->db->insert('cliente', $data);
	}

	function criarContato()
	{
		$data = array(
			'cliente_contato_id'           => $this->input->post('cliente_contato_id'),
			'contato_id_usuario'           => $this->input->post('contato_id_usuario'),
			'contato_secundario_nome'      => $this->input->post('contato_secundario_nome'),
			'contato_secundario_email'     => $this->input->post('contato_secundario_email'),
			'contato_secundario_telefone'  => $this->input->post('contato_secundario_telefone'),
			'contato_secundario_funcao'    => $this->input->post('contato_secundario_funcao')
		);

		$this->db->insert('contato_secundario', $data);
	}

	function criarCorrecao()
	{
		$data = array(
			'correcao_id_chamado'         => $this->input->post('correcao_id_chamado'),
			'correcao_id_cliente'         => $this->input->post('correcao_id_cliente'),
			'correcao_usuario_id '        => $this->input->post('correcao_usuario_id '),
			'correcao_atividade'          => $this->input->post('correcao_atividade'),
			'correcao_duracao_minuto'     => $this->input->post('correcao_duracao_minuto'),
			'correcao_duracao_hora'       => $this->input->post('correcao_duracao_hora'),
			'correcao_assunto'            => $this->input->post('correcao_assunto'),
			'correcao_data'               => $this->input->post('correcao_data'),
			'correcao_hora'               => $this->input->post('correcao_hora'),
			'correcao_atendente_rf'       => $this->input->post('correcao_atendente_rf'),
			'correcao_atendente_cliente'  => $this->input->post('correcao_atendente_cliente'),
			'correcao_obs'                => $this->input->post('correcao_obs'),
			'correcao_telefone'           => $this->input->post('correcao_telefone'),
			'correcao_email'              => $this->input->post('chamado_email')

		);

		$this->db->insert('correcao', $data);
	}


	//
	// ─── ATUALIZACOES ───────────────────────────────────────────────────────────────
	//


	function atualizarRegistro($cliente_id)
	{
		$data = array(
			'cod_cliente'                  => $this->input->post('cod_cliente'),
			'cliente_id_usuario'           => $this->input->post('cliente_id_usuario'),
			'cliente_nome'                 => $this->input->post('cliente_nome'),
			'cliente_endereco'             => $this->input->post('cliente_endereco'),
			'cliente_bairro'               => $this->input->post('cliente_bairro'),
			'cliente_cidade'               => $this->input->post('cliente_cidade'),
			'cliente_estado'               => $this->input->post('cliente_estado'),
			'cliente_pais'                 => $this->input->post('cliente_pais'),
			'cliente_cep'                  => $this->input->post('cliente_cep'),
			'cliente_cnpj'                 => $this->input->post('cliente_cnpj'),
			'cliente_cpf'             	   => $this->input->post('cliente_cpf'),
			'cliente_inscricao_estadual'   => $this->input->post('cliente_inscricao_estadual'),
			'cliente_categoria'            => $this->input->post('cliente_categoria'),
			'cliente_telefone'             => $this->input->post('cliente_telefone'),
			'cliente_email'                => $this->input->post('cliente_email')
		);
		$this->db->where('cliente_id', $cliente_id);
		$this->db->update('cliente', $data);
	}

	function atualizarContatoCliente($contato_secundario_id = NULL, $cliente_id = NULL)
	{

		$data = array(
			'cliente_contato_id'           => $this->input->post('cliente_contato_id'),
			'contato_secundario_nome'      => $this->input->post('contato_secundario_nome'),
			'contato_secundario_email'     => $this->input->post('contato_secundario_email'),
			'contato_secundario_telefone'  => $this->input->post('contato_secundario_telefone'),
			'contato_secundario_funcao'    => $this->input->post('contato_secundario_funcao')
		);
		$this->db->where('contato_secundario_id', $contato_secundario_id);
		$this->db->update('contato_secundario', $data);
	}





	//
	// ─── EXCLUSAO ───────────────────────────────────────────────────────────────────
	//



	function apagarRegistro($cliente_id)
	{
		$this->db->where('cliente_id', $cliente_id);
		$this->db->delete('cliente');
	}

	function apagarContatoCliente($contato_secundario_id = NULL)
	{
		$this->db->where('contato_secundario_id', $contato_secundario_id);
		$this->db->delete('contato_secundario');
	}


	//
	// ─── FUNCOES PARA TRATAMENTO DE CONTEUDO ────────────────────────────────────────
	//




	function count_all($search = '')
	{
		$query = $this->db->get("cliente");
		return $query->num_rows();
		if ($search != '') {
			$this->db->like('cliente_nome', $search);
			$this->db->or_like('cod_cliente', $search);
			$this->db->or_like('cliente_cpf', $search);
			$this->db->or_like('cliente_cpnj', $search);
		}
	}

	function fetch_details($limit, $start)
	{
		$output = '';
		$this->db->select("*");
		$this->db->from("cliente");
		$this->db->order_by("cliente_nome", "ASC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$output .= '
		 <table class="table table-bordered">
			<tr>
			<th>Nome</th>
			<th>CNPJ</th>
			<th>CPF</th>
			<th>TELEFONE</th>
			<th>CIDADE</th>
			<th>ENDEREÇO</th>
			<th>Bairro</th>
			<th>Cep</th>
			<th>Funções</th>
			</tr>
		 ';
		foreach ($query->result() as $row) {
			$output .= '
			<tr>
			<th>' . $row->cliente_nome . '</th>
			<th>' . $row->cliente_cnpj . '</th>
			<th>' . $row->cliente_cpf . '</th>
			<th>' . $row->cliente_telefone . '</th>
			<th>' . $row->cliente_endereco . '</th>
			<th>' . $row->cliente_bairro . '</th>
			<th>' . $row->cliente_cep . '</th>
			
			</tr>
			';
		}
		$output .= '</table>';
		return $output;
	}
}
