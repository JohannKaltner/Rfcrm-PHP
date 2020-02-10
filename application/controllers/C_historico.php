<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Historico extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_historico');
        $this->load->library('csvimport');
    }


	public function index()
	{
        
        $data['page_title'] ="Historico de Ligações";
        $this->template->show('historico', $data);	
        
    }
    
    function load_data()
	{
		$result = $this->M_historico->select();
		$output = '
		 <h3 align="center">Imported User Details from CSV File</h3>
          
        <table class="table table-data2">
        	<thead>
            	<tr>
					<th> Nº </th>
                    <th> Data </th>
                    <th> Quem Ligou? </th>
                    <th> Quem Atendeu? </th>
                    <th> Status </th>
                    <th> Duração </th>
                    <th> Operações </th>
					</tr>
					</thead>
					';
					
                    // <th> Ring Group </th>
					// <th> Account Code </th>
                    // <th> Destination Channel </th>
                    // <th> Source Channel </th>
		$count = 0;
		if($result->num_rows() > 0)
		{
			foreach($result->result() as $row)
			{
				$count = $count + 1;
				$output .= '
				
				<tr class="tr-shadow">                               
                    <td>'.$count.'</td>
					<td>'.$row->cdr_data.'</td>
                    <td>'.$row->cdr_ligacao_de.'</td>
                    <td>'.$row->cdr_ligacao_para.'</td>
                    <td>'.$row->cdr_status.'</td>
                    <td>'.$row->cdr_duracao.'</td>
					<td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="Registrar como Chamado">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
					</tr>
					';
                    // <td>'.$row->ring_group.'</td>
                    // <td>'.$row->dst_channel.'</td>
					// <td>'.$row->cdr_src_channel.'</td>
					//  <td>'.$row->dst_codigo_conta.'</td>
				}
		}
		else
		{
			$output .= '
			<tr>
	    		<td align="center">Nenhum Registo</td>
	    	</tr>
			';
		}
		$output .= '</tbody> </table> ';
		echo $output;
	}

	function import()
	{
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data[] = array(
        		'cdr_data'		    =>	$row["Date"],
				'cdr_ligacao_de'   	=>	$row["Source"],
        		'ring_group'  	 	=> 	$row["Ring Group"],
        		'cdr_ligacao_para'	=>	$row["Destination"],
        		'dst_channel'      	=>	$row["Src. Channel"],
        		'dst_codigo_conta' 	=>	$row["Account Code"],
        		'dst_channel'      	=>	$row["Dst. Channel"],
         		'cdr_status'		=>	$row["Status"],
				'cdr_duracao'		=>	$row["Duration"],       		
                 
			);
		}
		$this->M_historico->insert($data);
	}
}