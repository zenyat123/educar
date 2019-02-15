<?php

	require_once("../controladores/clases_controlador.php");
	require_once("../modelos/clases_modelo.php");

	class AjaxClases
	{

		public $materia;
		public $estudiante;

		/*====== Registrar Clase  ======*/


		public function AjaxRegistrarClase()
		{

			$campo_uno = "id_materia";

			$valor_uno = $_POST["materia"];

			$campo_dos = "id_estudiante";

			$valor_dos = $_POST["estudiante"];

			/*====== Consultar Clase  ======*/


			$respuesta = ControladorClases::ControladorConsultarClases($campo_uno, $valor_uno, $campo_dos, $valor_dos);

			if($respuesta["id_materia"] == $_POST["materia"] && $respuesta["id_estudiante"] == $_POST["estudiante"])
			{

				echo "Advertencia";

			}
			else
			{

				$datos = array("materia" => $this -> materia, "estudiante" => $this -> estudiante);

				$respuesta = ControladorClases::ControladorRegistrarClase($datos);

				echo $respuesta;

			}
			
		}

	}

	/*====== Registrar Clase  ======*/


	if(isset($_POST["materia"]))
	{

		$registrar_clase = new AjaxClases();
		$registrar_clase -> materia = $_POST["materia"];
		$registrar_clase -> estudiante = $_POST["estudiante"];
		$registrar_clase -> AjaxRegistrarClase();

	}