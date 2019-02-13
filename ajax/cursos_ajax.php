<?php

	require_once("../controladores/cursos_controlador.php");
	require_once("../modelos/cursos_modelo.php");

	class AjaxCursos
	{

		public $materia;
		public $estudiante;

		/*====== Registrar Curso  ======*/


		public function AjaxRegistrarCurso()
		{

			$datos = array("materia" => $this -> materia, "estudiante" => $this -> estudiante);

			$respuesta = ControladorCursos::ControladorRegistrarCurso($datos);

			echo $respuesta;

		}

	}

	/*====== Registrar Curso  ======*/


	if(isset($_POST["materia"]))
	{

		$registrar_curso = new AjaxCursos();
		$registrar_curso -> materia = $_POST["materia"];
		$registrar_curso -> estudiante = $_POST["estudiante"];
		$registrar_curso -> AjaxRegistrarCurso();

	}