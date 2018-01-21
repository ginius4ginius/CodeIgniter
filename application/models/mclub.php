<?php
Class Mclub extends CI_Model {

var $id;
var $nomClub;
var $villeClub;
var $paysClub;
var $siteClub;
var $ligue;


function __construct ()
{
parent:: __construct ();
}

//fonction récupération de données
public function getAll()
{
  $query = $this->db->get('club');
  return $query->result() ;
}

//fonction pour récupérer les données d'une ligne
public function get($id)
{
  $query = $this->db->get('club', array( 'id' => $id));
return  $query->result();


}

//fonction de suppression de données
public function supp($id)
{

  $this->db->delete('club',  array('id' => $id));
}

public function ajouter($aData)
{
$this->db->insert('club', $aData);

}

public function modifier($id,$aData)
{

  $this->db->where('id', $id);
  $this->db->update('club', $aData);

}


 }


 ?>
