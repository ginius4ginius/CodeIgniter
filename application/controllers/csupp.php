<?php

class Csupp extends CI_Controller {

	function __construct(){
		parent :: __construct();

	}
	public function index()
	{

	}

  public function supprimer()
	{
    $id =$this->uri->segment(3,0);
    $this->mclub->supp($id) ;

    $bloc =  $this->mclub->gelAll();
    $data["table"] = $bloc;
    $this->load->view('vaffichage',$data);
  }

}
