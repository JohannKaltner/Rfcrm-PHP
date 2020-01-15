<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
 
	
	 

		function show($view, $data=array()){
			
			$CI = & get_instance();
			// Load header
			$CI->load->view('template/crm/header',$data);
			// Load footer
			$CI->load->view($view,$data);
			$CI->load->view('template/crm/footer',$data);
			// Scripts
			$CI->load->view('template/crm/scripts',$data);
			
			// Load content
			
				//$CI->load->view('template/sidebar',$data);
				
			}

		function chat($view, $data=array()){
			$CI = & get_instance();
			// Load header
			$CI->load->view('template/chat/header',$data);
			// Load content
			$CI->load->view($view,$data);
			// Load footer
			$CI->load->view('template/chat/footer',$data);
			// Scripts
			$CI->load->view('template/chat/scripts',$data);

		}
		

		function admin($view, $data=array()){
 
			$CI = & get_instance();
			// Load header
			$CI->load->view('template/crm/header',$data);
			// Load content
			$CI->load->view($view,$data);
			// Load footer
			$CI->load->view('template/crm/footer',$data);
			// Scripts
			$CI->load->view('template/crm/scripts',$data);
			
		//	$CI->load->view('template/sidebar',$data);
            
        }
    }