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

}

public Function gelAll()
{
  $this->load->database();
  $query = $this->db->get('club');
  return $query->result() ;


}



 }


 ?>
