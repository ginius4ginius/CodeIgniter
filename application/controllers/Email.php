<?php

class Email extends CI_Controller {

	function __construct(){
		parent :: __construct();
    $this->load->helper('form');

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function email_check($str)
	{
	if ($str == 'moi@moi.fr')
		{
      $this->form_validation->set_message('email_check', 'l\'email ne peut etre "moi@moi.fr"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

   function ajout(){

     $this->load->library('form_validation') ;
     $this->form_validation->set_rules('Email','messagerie électronique', 'required|valid_email') ;
     $this->form_validation->set_rules('pswd', 'Mot de passe', 'required');
     $this->form_validation->set_rules('pswdc', 'confirmation mot de passe', 'required');
     $this->form_validation->set_rules('login', 'identifiant', 'required|callback_email_check');
     $this->form_validation->set_rules('pswd', 'taille mot de passe','required|min_length[4]|max_length[10]');




//affichage de la vue selon le résultat
     if($this ->form_validation->run()==FALSE ){
       $this->load->view("Email.php");
     }
     else{
       $this->load->view("success.php");
     }



    // $vEmail = $_POST['Email'];


  }

	public function index()
	{
	  $data['adrEmail'] = "<h1>quel est votre Email</h1>";
	  $this->load->view('Email.php',$data);

    //

	}

}
