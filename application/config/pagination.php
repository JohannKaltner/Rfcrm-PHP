<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['per_page'] = 6;
$config['num_links'] = 5;
 
$config['use_page_numbers'] = TRUE;
$config['page_query_string'] = FALSE;
 
$config['query_string_segment'] = '';
 
$config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-end">';
$config['full_tag_close'] = '</ul>';
$config['attributes'] = ['class' => 'page-link'];
 
$config['first_link'] = '&laquo;';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';
 
$config['last_link'] = ' &raquo;';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';
 
$config['next_link'] = ' &rarr;';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';
 
$config['prev_link'] = '&larr;';
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tag_close'] = '</li>';
 
$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';
 
$config['anchor_class'] = 'follow_link';