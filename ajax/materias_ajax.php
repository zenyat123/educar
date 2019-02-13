<?php

	require_once("../controladores/materias_controlador.php");
	require_once("../modelos/materias_modelo.php");

	class AjaxMaterias
	{

		public $materia;
		public $profesion;

		/*====== Registrar Materia  ======*/


		public function AjaxRegistrarMateria()
		{

			$datos = array("materia" => $this -> materia,
						   "profesion" => $this -> profesion);

			$respuesta = ControladorMaterias::ControladorRegistrarMateria($datos);

			echo $respuesta;

		}

	}

	/*====== Registrar Materia  ======*/


	if(isset($_POST["materia"]))
	{

		$registrar_materia = new AjaxMaterias();
		$registrar_materia -> materia = $_POST["materia"];
		$registrar_materia -> profesion = $_POST["profesion"];
		$registrar_materia -> AjaxRegistrarMateria();

	}