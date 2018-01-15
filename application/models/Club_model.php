<?php
Class Club_model extends CI_Model {

var $id = ´´ ;
var $nomClub = ´´;
var $villeClub = ´´;
var $paysClub = ´´;
var $siteClub = ´´;
var $ligue = ´´;


function __construct ()
{
parent:: __construct ();
$this->load->database();
}

public function gelAll()
{

  $query = $this->db->get('club');
  return $query->result() ;


}



 }


 ?>
