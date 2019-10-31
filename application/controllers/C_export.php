<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Export extends CI_Controller {

    public function __construct(){
        parent::__construct();
          
    }

	public function index(){
        

    
    }
    
    public function csv($value=''){

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
            'cliente_cnpf_cpf',
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
}
