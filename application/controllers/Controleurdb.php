<?php


class Controleurdb extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->helper('form');
    $this->load->model("Club_model");

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
	public function index()
	{


		$this->load->view("entree");


	}


	public function mkHtmlTable($aTable) {
	  $sHtml = null;
	  //
	  if(is_array($aTable)) {
	    foreach($aTable as $k=>$v) {
	      if(is_array($v)) {
	        if($k == 0) {
	          $aLabels = array_keys($v);
	          $sHtml .= '<tr><th>'.implode('</th><th>', $aLabels).'</th></tr>';
	        }
	        //
	        $sHtml .= '<tr><td>'.implode('</td><td>', $v).'</td></tr>';
	      }
	    }
	  }
	  //
	  if(!empty($sHtml))
	    $sHtml = "<table class=\"tpListTable\" > $sHtml </table>";
	  //
	  return $sHtml;
	}



}
?>
