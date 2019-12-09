<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Export extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

	public function index(){
    }
    
    public function csv($value=''){
      $this->load->database();
      $data2 = array(
        'log_atividade' => 'Exportou a lista de Clientes',
        'log_tipo' => '2',
        'log_data' => date('d-m-Y - H-d'),
        'log_usuario_nome' => $this->session->userdata('usuario_nome'),
      );
      $this->db->insert('log', $data2);
      
        $filename = "CSV_CLIENTES_".date("d/m/y").'.csv';
        
        header('Content-type:text/csv');
        header('Content-Disposition: attachment;filename='.$filename);
        header('Cache-Control: no-store, no-cache, must revalidate');
        header('Cache-Control: post-check=0, pre-check=0');
        header('Pragma: no-cache');
        header('Expires:0');

        $handle = fopen('php://output', 'w');

        fputcsv($handle, array(
            'cliente_id',
            'cliente_nome',
            'cliente_endereco',
            'cliente_bairro',
            'cliente_cidade',
            'cliente_estado',
            'cliente_pais',
            'cliente_cep',
            'cliente_cnpj_cpf',
            'cliente_inscricao_estadual',
            'cliente_categoria',
            'cliente_email',
            'cliente_telefone',
            'cliente_regiao',
            'cliente_obs',
            'cliente_contato_nome',
            'cliente_contato_telefone',       
         ));

        
        $this->db->select('*');
        $this->db->from('cliente');
        $query = $this->db->get();
        $data['cliente'] = $query->result_array();
        
        // echo "<pre>";
        // print_r ( $data['cliente']);
        // echo "</pre>";
        
        foreach ($data['cliente'] as $key => $row){
          fputcsv($handle, $row);
        }
            fclose($handle);
       
      exit;
    }
    public function csv_log($value=''){
      
      $this->load->database();
      $data2 = array(
        'log_atividade' => 'Exportou a lista de Logs',
        'log_tipo' => '2',
        'log_data' => date('d-m-Y - H-d'),
        'log_usuario_nome' => $this->session->userdata('usuario_nome'),
      );
      $this->db->insert('log', $data2);

        $filename = "CSV_LOG_".date("d/m/y").'.csv';
        
        header('Content-type:text/csv');
        header('Content-Disposition: attachment;filename='.$filename);
        header('Cache-Control: no-store, no-cache, must revalidate');
        header('Cache-Control: post-check=0, pre-check=0');
        header('Pragma: no-cache');
        header('Expires:0');

        $handle = fopen('php://output', 'w');

        fputcsv($handle, array(
            'log_id',
            'log_usuario_nome',
            'log_atividade',
            'log_data',
            'log_tipo'            
         ));

        
        $this->db->select('*');
        $this->db->from('log');
        $query = $this->db->get();
        $data['log'] = $query->result_array();
        
        // echo "<pre>";
        // print_r ( $data['cliente']);
        // echo "</pre>";
        
        foreach ($data['log'] as $key => $row){
          fputcsv($handle, $row);
        }
            fclose($handle);
       
      exit;
    }
    
}