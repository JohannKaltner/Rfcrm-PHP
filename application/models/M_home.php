<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_home extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }



  public function index()
  {

  }

//   function contarLinhas($cliente){
//     $query = $this->db->get($cliente);
//     $contarLinhas = $query->num_rows();
//     return $contarLinhas;       
// }

}