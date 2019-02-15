<?php

	require_once("../controladores/materias_controlador.php");
	require_once("../modelos/materias_modelo.php");

	class AjaxMaterias
	{

		public $codigo;
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

		/*====== Consultar Materia  ======*/


		public function AjaxConsultarMateria()
		{

			$campo = "id_materia";

			$valor = $this -> codigo;

			$respuesta = ControladorMaterias::ControladorConsultarMaterias($campo, $valor);

			echo json_encode($respuesta);

		}

		/*====== Actualizar Materia  ======*/


		public function AjaxActualizarMateria()
		{

			$datos = array("codigo" => $this -> codigo,
						   "materia" => $this -> materia,
						   "profesion" => $this -> profesion);

			$respuesta = ControladorMaterias::ControladorActualizarMateria($datos);

			echo $respuesta;

		}

		/*====== Eliminar Materia  ======*/


		public function AjaxEliminarMateria()
		{

			$campo = "id_materia";

			$valor = $this -> id_materia;

			$respuesta = ControladorMaterias::ControladorEliminarMateria($campo, $valor);

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

	/*====== Consultar Materia  ======*/

	
	if(isset($_POST["codigo"]))
	{

		$consultar_materia = new AjaxMaterias();
		$consultar_materia -> codigo = $_POST["codigo"];
		$consultar_materia -> AjaxConsultarMateria();

	}

	/*====== Actualizar Materia  ======*/


	if(isset($_POST["actualizarCodigo"]))
	{

		$actualizar_materia = new AjaxMaterias();
		$actualizar_materia -> codigo = $_POST["actualizarCodigo"];
		$actualizar_materia -> materia = $_POST["actualizarMateria"];
		$actualizar_materia -> profesion = $_POST["actualizarProfesion"];
		$actualizar_materia -> AjaxActualizarMateria();

	}

	/*====== Eliminar Materia  ======*/


	if(isset($_POST["eliminarMateria"]))
	{

		$eliminar_materia = new AjaxMaterias();
		$eliminar_materia -> id_materia = $_POST["eliminarMateria"];
		$eliminar_materia -> AjaxEliminarMateria();

	}