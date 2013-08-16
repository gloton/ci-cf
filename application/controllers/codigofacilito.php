<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Codigofacilito extends CI_Controller {
	function __construct() {
		parent::__construct();
//		$this->load->helper("mihelper");
		$this->load->helper("form");
	}
	
	function index() {
		//el parametro de library no es case-sensitive ("menu"),
		$this->load->library("menu", array("Inicio","Contacto","Cursos") );
		$data["mi_menu"] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);
 	} 
 	
 	function nuevo() {
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/formulario');
 	}
}