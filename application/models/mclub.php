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
  var_dump($id);
  $query = $this->db->get('club', array('id' => $id));
  var_dump($query);
  foreach ($query as $key => $value) {
    # code...

  $data['tableau'] = array("nom"=>$query->$nom,
"ville"=>$query->$villeClub,
"pays"=>$query->$paysClub,
"Site"=>$query->$siteClub,
"ligue"=>$query->$ligue,);
}
var_dump($data);
  return $data->result() ;
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


 }


 ?>
