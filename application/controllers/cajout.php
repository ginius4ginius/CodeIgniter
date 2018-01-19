<?php

class Cajout extends CI_Controller {

	function __construct(){
		parent :: __construct();

	}
	public function index()
	{

	}

  public function ajouter()
	{
    $this->mclub->add($id) ;

    $bloc =  $this->mclub->gelAll();
    $data["table"] = $bloc;
    $this->load->view('vaffichage',$data);
  }

}
