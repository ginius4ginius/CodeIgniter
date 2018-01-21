<?php

class Cmodif extends CI_Controller {

	function __construct(){
		parent :: __construct();

	}
	public function index()
	{

	}

  public function modifier()
	{
    $id =$this->uri->segment(3,0);
  	$data=  $this->mclub->get($id) ;

		foreach ($data as $key => $value) {
			# code...
	$table = array(
	'id'=>$id,
	"nom"=>$value->nomClub,
	"ville"=>$value->villeClub,
	"pays"=>$value->paysClub,
	"site"=>$value->siteClub,
	"ligue"=>$value->ligue);
	}
	var_dump($table);
    $this->load->view('vmodification',$table);
  }

}
