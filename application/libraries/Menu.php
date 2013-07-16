<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	//el nombre del archivo y la clase debe comenzar con mayuscula
	class Menu {
		private $arr_menu;
		public function __construct($arr) {
			$this->arr_menu = $arr;
		}
		
		//retornara una cadena con el menu formado
		public function construirMenu () {
			$ret_menu ="<nav><ul>";
			foreach ($this->arr_menu as $opcion) {
				$ret_menu .= "<li>".$opcion."</li>";
			}
				$ret_menu .= "</ul></nav>";
				return $ret_menu;
		}
	} 
?>