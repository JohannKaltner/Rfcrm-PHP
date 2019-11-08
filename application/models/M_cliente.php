<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cliente extends CI_Model {


  public function __construct()
  {
    parent::__construct();
    $this->load->database();
   }

  public function index()
  {
    
  }

     function criarDados(){
    $data = array(
      'cod_cliente'               => $this->input->post('cod_cliente'),
      'cliente_nome'               => $this->input->post('cliente_nome'),
      'cliente_endereco'           => $this->input->post('cliente_endereco'),
      'cliente_bairro'             => $this->input->post('cliente_bairro'),
      'cliente_cidade'             => $this->input->post('cliente_cidade'),
      'cliente_estado'             => $this->input->post('cliente_estado'),
      'cliente_pais'               => $this->input->post('cliente_pais'),
      'cliente_cep'                => $this->input->post('cliente_cep'),
      'cliente_cnpj_cpf'           => $this->input->post('cliente_cnpj_cpf'),
      'cliente_inscricao_estadual' => $this->input->post('cliente_inscricao_estadual'),
      'cliente_categoria'          => $this->input->post('cliente_categoria'),
      'cliente_telefone'           => $this->input->post('cliente_telefone'),
      'cliente_contato_nome'       => $this->input->post('cliente_contato_nome'),
      'cliente_contato_telefone'   => $this->input->post('cliente_contato_telefone'),
      'cliente_email'              => $this->input->post('cliente_email')
    );
    $this->db->insert('cliente', $data);
  }

  function insereContato(){
    $data = array(
      'cod_cliente'               => $this->input->post('cod_cliente'),
      'cliente_nome'               => $this->input->post('cliente_nome'),
      'cliente_endereco'           => $this->input->post('cliente_endereco'),
      'cliente_bairro'             => $this->input->post('cliente_bairro'),
      'cliente_cidade'             => $this->input->post('cliente_cidade'),
      'cliente_estado'             => $this->input->post('cliente_estado'),
      'cliente_pais'               => $this->input->post('cliente_pais'),
      'cliente_cep'                => $this->input->post('cliente_cep'),
      'cliente_cnpj_cpf'           => $this->input->post('cliente_cnpj_cpf'),
      'cliente_inscricao_estadual' => $this->input->post('cliente_inscricao_estadual'),
      'cliente_categoria'          => $this->input->post('cliente_categoria'),
      'cliente_telefone'           => $this->input->post('cliente_telefone'),
      'cliente_contato_nome'       => $this->input->post('cliente_contato_nome'),
      'cliente_contato_telefone'   => $this->input->post('cliente_contato_telefone'),
      'cliente_email'              => $this->input->post('cliente_email')
    );
    $this->db->insert('cliente', $data);
  }

	   function listarRegistros(){
    $query = $this->db->query('SELECT * FROM cliente ORDER BY cliente_id ASC');

    if($query->num_rows() < 1){
      return FALSE;
    }
    return $query->result();
  }

  function listarRegistro($cliente_id){
    $query = $this->db->query("SELECT * FROM cliente WHERE `cliente_id` = ".$cliente_id );
    if($query->num_rows() < 1){
      return FALSE;
    }
    return $query->row();
  }

  // function listarRegistro($cliente_id){
  //   $query = $this->db->query("SELECT * FROM cliente
  //                              INNER JOIN chamado
  //                              ON cliente.chamado_idChamado = chamado.chamado_id
  //                              WHERE `cliente_id` = ".$cliente_id );
  //   return $query->row();
  // }
  
  function atualizarRegistro($cliente_id){
    $data = array(
        'cod_cliente'               => $this->input->post('cod_cliente'),
        'cliente_nome'               => $this->input->post('cliente_nome'),
        'cliente_endereco'           => $this->input->post('cliente_endereco'),
        'cliente_bairro'             => $this->input->post('cliente_bairro'),
        'cliente_cidade'             => $this->input->post('cliente_cidade'),
        'cliente_estado'             => $this->input->post('cliente_estado'),
        'cliente_pais'               => $this->input->post('cliente_pais'),
        'cliente_cep'                => $this->input->post('cliente_cep'),
        'cliente_cnpj_cpf'           => $this->input->post('cliente_cnpj_cpf'),
        'cliente_inscricao_estadual' => $this->input->post('cliente_inscricao_estadual'),
        'cliente_categoria'          => $this->input->post('cliente_categoria'),
        'cliente_telefone'           => $this->input->post('cliente_telefone'),
        'cliente_contato_nome'       => $this->input->post('cliente_contato_nome'),
        'cliente_contato_telefone'   => $this->input->post('cliente_contato_telefone'),
        'cliente_email'              => $this->input->post('cliente_email')
      );
      $this->db->where('cliente_id', $cliente_id);
      $this->db->update('cliente', $data);
            
    }

    public function listarChamadosCliente($cliente_id){
      $this->db->select('*');
      $this->db->from('chamado');
      $this->db->join('cliente', 'cliente.cliente_id = chamado.chamado_id_cliente');
      $this->db->where('chamado.chamado_id_cliente ='.$cliente_id );
      $this->db->order_by('chamado_data');
      $query = $this->db->get();
      if($query->num_rows() < 1){
        return FALSE;
      }
      return $query->result();
    }

    
    
    function apagarRegistro($cliente_id){
      $this->db->where('cliente_id', $cliente_id);
      $this->db->delete('cliente');
    }


    function count_all()
    {
     $query = $this->db->get("cliente");
     return $query->num_rows();
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
      <th>CNPJ/CPF</th>
      <th>TELEFONE</th>
      <th>CIDADE</th>
      <th>ENDEREÇO</th>
      <th>Bairro</th>
      <th>Cep</th>
      <th>Funções</th>
      </tr>
     ';
     foreach($query->result() as $row)
     {
      $output .= '
      <tr>
      <th>'.$row->cliente_nome.'</th>
      <th>'.$row->cliente_cnpj_cpf.'</th>
      <th>'.$row->cliente_telefone.'</th>
      <th>'.$row->cliente_endereco.'</th>
      <th>'.$row->cliente_bairro.'</th>
      <th>'.$row->cliente_cep.'</th>
      
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }

}