<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cursos extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("codigofacilito_model");
	}
	
	//desplegar todos los cursos ingresados
	function index() {
		# segment
		#este metodo segment va a retornar el segmento de la url
		#dependiendo del indice que nosotros mandemos por aca
		#ejem:http://localhost/ci-cf/index.php/cursos/nuevo
		#cursos es el 1
		#nuevo es el 2
		#luego viene el 3 que es que queremos retornar
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('codigofacilito/headers');
		//verifica si el usuario esta mandando el segmento 3
		if (!$data['segmento']) {
			$data['cursos'] = $this->codigofacilito_model->obtenerCursos();
		} else {
			$data['cursos'] = $this->codigofacilito_model->obtenerCurso($data['segmento']);
		}
		$this->load->view('cursos/cursos',$data);
		
	}
 	function nuevo() {
		$this->load->view('codigofacilito/headers');
		$this->load->view('cursos/formulario');
 	}
 	
 	function recibirDatos() {
 		//arreglo que enviara la informacion necesaria hacia el modelo
 		$data = array(
 					'nombre'	=>	$this->input->post('nombre'),
 					'videos'	=>	$this->input->post('videos')
 				);
 		$this->codigofacilito_model->crearCurso($data);
		$this->load->library("menu", array("Inicio","Contacto","Cursos"));
		$data["mi_menu"] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);		
 	}
 	
}