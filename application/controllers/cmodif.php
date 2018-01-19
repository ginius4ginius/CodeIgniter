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
    $this->mclub->get($id) ;

    $this->load->view('ventree',$data);
  }

}
