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
    $query = $this->db->query('SELECT * FROM cliente');
    return $query->result();
  }

  function listarRegistro($cliente_id){
    $query = $this->db->query("SELECT * FROM cliente WHERE `cliente_id` = ".$cliente_id );
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

    public function listarChamadosCliente(  ){
      // chamado.chamado_atividade,
      // chamado.chamado_assunto,
      // chamado.chamado_duracao,
      // chamado.chamado_data,
      // chamado.chamado_hora,
      // chamado.chamado_atendente_rf,
      // chamado.chamado_atendente_cliente,
      // chamado.chamado_telefone,
      // chamado.chamado_email,
      // chamado.chamado_obs,
      // chamado.chamado_id_cliente
      // chamado.chamado_id,
      $this->db->select('*');
      $this->db->from('chamado');
      $this->db->join('cliente', 'cliente.cliente_id = chamado.chamado_id_cliente');
      $this->db->where('cliente.cliente_id = chamado.chamado_id_cliente');
      $this->db->order_by('chamado_data');
      $query = $this->db->get();
      return $query->result();
    }


    
      function apagarRegistro($cliente_id)
      {
          $this->db->where('cliente_id', $cliente_id);
          $this->db->delete('cliente');
      }
    
  }