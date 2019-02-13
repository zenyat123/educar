<?php

	require_once("../controladores/estudiantes_controlador.php");
	require_once("../modelos/estudiantes_modelo.php");

	class AjaxEstudiantes
	{

		public $documento;
		public $nombres;
		public $apellidos;
		public $telefono;
		public $email;

		/*====== Registrar Estudiante  ======*/


		public function AjaxRegistrarEstudiante()
		{

			$datos = array("documento" => $this -> documento,
						   "nombres" => $this -> nombres,
						   "apellidos" => $this -> apellidos,
						   "telefono" => $this -> telefono,
						   "email" => $this -> email);

			$respuesta = ControladorEstudiantes::ControladorRegistrarEstudiante($datos);

			echo $respuesta;

		}

	}

	/*====== Registrar Estudiante  ======*/


	if(isset($_POST["documento"]))
	{

		$registrar_estudiante = new AjaxEstudiantes();
		$registrar_estudiante -> documento = $_POST["documento"];
		$registrar_estudiante -> nombres = $_POST["nombres"];
		$registrar_estudiante -> apellidos = $_POST["apellidos"];
		$registrar_estudiante -> telefono = $_POST["telefono"];
		$registrar_estudiante -> email = $_POST["email"];
		$registrar_estudiante -> AjaxRegistrarEstudiante();

	}