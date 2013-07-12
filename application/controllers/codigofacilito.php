<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Codigofacilito extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("mihelper");
	}
	
	function index() {
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}
}