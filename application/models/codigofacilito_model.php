<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {
	function __construct() {
		parent::__construct();	
		$this->load->database();	
	}
	
	function crearCurso($data) {
		# Primer parametro, es donde se indica la tabla
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));
	}
	
	function obtenerCursos() {
		$query = $this->db->get('cursos');
		if ($query->num_rows() > 0)
			return $query;
		else
			return false;
	}

	function obtenerCurso($id) {
		#idCurso
		# es el nombre de un campo
		#$id
		# es el valor que deberia tener el idCurso para
		# que se cumpla esa condicion
		$this->db->where('idCurso',$id);
		$query = $this->db->get('cursos');
		if ($query->num_rows() > 0)
			return $query;
		else
			return false;
	}
}

?>