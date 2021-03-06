<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Cliente extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cliente');
        $this->load->model('M_usuario');
        $this->load->model('M_login');
 
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        $data['page_title'] = "Clientes";
    }

    public function index($cliente_id = '', $usuario_id = '')
    {
        $data['result'] = $this->M_cliente->listarRegistros();
        $data['user'] = $this->M_login->consultarUsuario($usuario_id);
        $data['chamados'] = $this->M_cliente->listarChamadosCliente($cliente_id);
        $data['metaDescription'] = 'RFCRM';
        $data['metaKeywords'] = 'RFCRM';

        //
        // ─── BUSCA ──────────────────────────────────────────────────────────────────────
        //
        //    $data['busca'] = $this->M_cliente->listarBusca();

        //
        // ─── PAGINATION ──────────────────────────────────────────────────
        //
        
        $config['total_rows'] = $this->M_cliente->getAllClienteCount();
        $data['total_count'] = $config['total_rows'];
        $config['suffix'] = '';
        $page_number = $this->uri->segment(3);
        
        if ($config['total_rows'] > 1) {
            
            if ($page_number > 0) {
                $config['base_url'] = base_url() . 'C_cliente/index/';
            } else {
                $config['base_url'] = base_url() . 'C_cliente/index/';
            }
            if (empty($page_number)) {
                $page_number = 1;
            }

            //$offset = ($page_number - 1) * $this->pagination->per_page;
            $offset =$page_number;
            
            $this->M_cliente->setPageNumber($this->pagination->per_page);

            $this->M_cliente->setOffset($offset);

            $this->pagination->cur_page = $offset;

            $config['attributes'] = array('class' => 'page-link');

            $this->pagination->initialize($config);
            
            $data['page_links'] = $this->pagination->create_links();
            $data['clienteInfo'] = $this->M_cliente->listarRegistros();
            //
            // ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
            //

            $data['page_title'] = " RFCRM - Clientes";
            $this->template->show('cliente/V_cliente', $data);
        }
    }

    public function criar()
    {
        $this->M_cliente->criarDados();
        echo "<script> window.history.go(-1);</script>";
    }

    public function editar($cliente_id = '')
    {
        $data['row'] = $this->M_cliente->listarRegistro($cliente_id);
        $this->template->show('cliente/V_cliente_edit', $data);
    }

    public function update($cliente_id = NULL)
    {
        $this->M_cliente->atualizarRegistro($cliente_id);
        echo "<script> window.history.go(-1);</script>";
    }

    public function delete($cliente_id = 'NULL')
    {
        $this->M_cliente->apagarRegistro($cliente_id);
        // echo  "<script>alert('Cliente deletado com Sucesso!!');</script>";
        echo "<script> window.history.go(-1);</script>";
    }

    public function exibir($cliente_id = null, $usuario_id = null)
    {
        //$data['chamados'] = $this->M_cliente->listarChamadosCliente($cliente_id);
        //$data['correcoes'] = $this->M_cliente->listarCorrecaoCliente($cliente_id);
        //$data['contatos'] = $this->M_cliente->listarContatosCliente($cliente_id);
        $data['linha'] = $this->M_cliente->listarRegistro($cliente_id);
        $data['chamados'] = $this->M_cliente->listarChamadosClientePorId($cliente_id); 
        $data['chamadosLigacao'] = $this->M_cliente->listarChamadosClienteLigacao($cliente_id);
        $data['chamadosEmail'] = $this->M_cliente->listarChamadosClienteEmail($cliente_id);
        
        $data['contatos'] = $this->M_cliente->listarContatosClientePorId($cliente_id);
        $data['correcoes'] = $this->M_cliente->listarCorrecaoClientePorId($cliente_id);
        $data['permissao'] = $this->M_usuario->consultar_permissao($usuario_id);
        
        $contato_list = $this->M_cliente->retorna_contatos($cliente_id);
        $option = null;
        foreach ($contato_list->result() as $contato_list) {
            $option .= "<option value='$contato_list->contato_secundario_nome'>$contato_list->contato_secundario_nome</option>";
        }
       
        $data['options_contatos'] = $option;
        $data['page_title'] = "Informações do Cliente";
        $cliente_id = $this->uri->segment(3);
        $this->session->flashdata($cliente_id);
        $this->template->show('cliente/V_cliente_show', $data);
    }

    public function criarContato($cliente_id = '')
    {
        $this->M_cliente->criarContato($cliente_id);
        // redirect("C_cliente/", $cliente_id);
        echo "<script> window.history.go(-1);</script>";
        //redirect('C_Cliente/exibir/');

    }

    public function criarCorrecao($cliente_id = null)
    {
        $this->M_cliente->criarCorrecao();
        echo "<script> window.history.go(-1);</script>";
    }

    public function deletaContato($contato_secundario_id = null, $cliente_id = null)
    {
        $this->M_cliente->apagarContatoCliente($contato_secundario_id);
        // echo  "<script>alert('Cliente deletado com Sucesso!!');</script>";
        echo "<script> window.history.go(-1);</script>";
    }

    public function editaContato($contato_secundario_id = null, $cliente_id = null)
    {
        $this->M_cliente->atualizarContatoCliente($contato_secundario_id);
        echo "<script> window.history.go(-1);</script>";
    }

    public function busca()
    {

        $data['metaDescription'] = 'RFCRM';
        $data['metaKeywords'] = 'RFCRM';
        $data['title'] = "RFCRM";
        // $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#');
        $config['total_rows'] = $this->M_cliente->getAllClienteCount();
        $data['total_count'] = $config['total_rows'];
        $config['suffix'] = '';
        if ($config['total_rows'] > 1) {
            $page_number = $this->uri->segment(3);
            if ($page_number > 0) {
                $config['base_url'] = base_url() . 'C_cliente';
            } else {
                $config['base_url'] = base_url() . 'C_cliente/busca/';
            }
            if (empty($page_number)) {
                $page_number = 1;
            }

            $offset = ($page_number - 1) * $this->pagination->per_page;
            $this->M_cliente->setPageNumber($this->pagination->per_page);
            $this->M_cliente->setOffset($offset);
            $this->pagination->cur_page = $offset;
            $config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			
            $data['result'] = $this->M_cliente->listarBusca();
            //
            // ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
            //

            $data['page_title'] = "Resultados de Pesquisa";
            // $this->template->show('cliente/V_cliente', $data);

            // $data['result'] = $this->M_cliente->listarBusca();
            $this->template->show('cliente/V_cliente_search', $data);
        }
    }

    public function buscaContatos()
    {

        $data['metaDescription'] = 'RFCRM';
        $data['metaKeywords'] = 'RFCRM';
        $data['title'] = "RFCRM";
        // $data['breadcrumbs'] = array('Simple Pagination Using CodeIgniter and MySQL' => '#');
        $config['total_rows'] = $this->M_cliente->getAllContatosCount();
        $data['total_count'] = $config['total_rows'];
        $config['suffix'] = '';
        if ($config['total_rows'] > 1) {
            $page_number = $this->uri->segment(3);
            if ($page_number > 0) {
                $config['base_url'] = base_url() . 'C_cliente';
            } else {
                $config['base_url'] = base_url() . 'C_cliente/buscaContatos/';
            }
            if (empty($page_number)) {
                $page_number = 1;
            }

            $offset = ($page_number - 1) * $this->pagination->per_page;
            $this->M_cliente->setPageNumber($this->pagination->per_page);
            $this->M_cliente->setOffset($offset);
            $this->pagination->cur_page = $offset;
            $config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config);
			$data['page_links'] = $this->pagination->create_links();
			
            $data['result'] = $this->M_cliente->listarBuscaContatos();
            //
            // ─────────────────────────────────────────────────────────── FIM PAGINATION ─────
            //

            $data['page_title'] = "Resultados de Pesquisa";
            // $this->template->show('cliente/V_cliente', $data);

            // $data['result'] = $this->M_cliente->listarBusca();
            $this->template->show('cliente/V_cliente_searchContact', $data);
        }
    }
}
