<?php


class Ccontroleur extends CI_Controller {

	function __construct(){
		parent :: __construct();

	}

	public function index()
	{

		$bloc =  $this->mclub->gelAll();
		$data["table"] = $bloc;
		$this->load->view("vaffichage",$data);


	}

	public function entree()
	{

		$this->load->view("ventree");

	}

	public function ajouter($aVal){
			$this->mclub->ajouter($aVal);
			$bloc =  $this->mclub->gelAll();
			$data["table"] = $bloc;
			$this->load->view("vaffichage",$data);
	}

	public function ajout()
	{

		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required');


		$this->form_validation->set_rules('ville', '"La ville"', 'trim|required');


		$this->form_validation->set_rules('pays', '"Le pays"', 'trim|required');


		$this->form_validation->set_rules('site', '"Le site"', 'trim|required');


		$this->form_validation->set_rules('ligue', '"La ligue"', 'trim|required');


		if ($this->form_validation->run() == false) {

    $this->load->view('ventree');

    }else {
			$aData = array(
				"id"=>NULL,
			"nomClub"=>$this->input->post('nom'),
			"villeClub"=>$this->input->post('ville'),
			"paysClub"=>$this->input->post('pays'),
			"siteClub"=>$this->input->post('site'),
			"ligue"=>$this->input->post('ligue'));
			
     $this->ajouter($aData);

   }

	}






}
?>
