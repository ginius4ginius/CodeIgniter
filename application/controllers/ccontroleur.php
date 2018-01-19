<?php


class Ccontroleur extends CI_Controller {

	function __construct(){
		parent :: __construct();

	}

	public function index()
	{

		$bloc =  $this->mclub->gelAll();
		$data["table"] = $bloc;
		$this->load->view("ventree",$data);


	}




}
?>
