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

			$campo_uno = "id_materia";

			$valor_uno = $_POST["materia"];

			$campo_dos = "id_estudiante";

			$valor_dos = $_POST["estudiante"];

			/*====== Consultar Curso  ======*/


			$respuesta = ControladorCursos::ControladorConsultarCursos($campo_uno, $valor_uno, $campo_dos, $valor_dos);

			if($respuesta["id_materia"] == $_POST["materia"] && $respuesta["id_estudiante"] == $_POST["estudiante"])
			{

				echo "Advertencia";

			}
			else
			{

				$datos = array("materia" => $this -> materia, "estudiante" => $this -> estudiante);

				$respuesta = ControladorCursos::ControladorRegistrarCurso($datos);

				echo $respuesta;

			}
			
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