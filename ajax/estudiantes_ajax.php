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

		/*====== Consultar Estudiante  ======*/


		public function AjaxConsultarEstudiante()
		{

			$campo = "documento";

			$valor = $this -> documento;

			$respuesta = ControladorEstudiantes::ControladorConsultarEstudiantes($campo, $valor);

			echo json_encode($respuesta);

		}

		/*======  Actualizar Estudiante  ======*/


		public function AjaxActualizarEstudiante()
		{

			$datos = array("documento" => $this -> documento,
						   "nombres" => $this -> nombres,
						   "apellidos" => $this -> apellidos,
						   "telefono" => $this -> telefono,
						   "email" => $this -> email);

			$respuesta = ControladorEstudiantes::ControladorActualizarEstudiante($datos);

			echo $respuesta;

		}

		/*====== Reconocer Estudiante Repetido  ======*/


		public function AjaxVerificarEstudiante()
		{

			$campo = "documento";

			$valor = $this -> verificar_estudiante;

			$respuesta = ControladorEstudiantes::ControladorConsultarEstudiantes($campo, $valor);

			echo json_encode($respuesta);

		}

		/*======  Eliminar Estudiante  ======*/


		public function AjaxEliminarEstudiante()
		{

			$campo = "documento";

			$valor = $this -> documento;

			$respuesta = ControladorEstudiantes::ControladorEliminarEstudiante($campo, $valor);

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

	/*====== Consultar Estudiante  ======*/


	if(isset($_POST["consultarDocumento"]))
	{

		$consultar_estudiante = new AjaxEstudiantes();
		$consultar_estudiante -> documento = $_POST["consultarDocumento"];
		$consultar_estudiante -> AjaxConsultarEstudiante();

	}

	/*======  Actualizar Estudiante  ======*/


	if(isset($_POST["actualizarDocumento"]))
	{

		$actualizar_estudiante = new AjaxEstudiantes();
		$actualizar_estudiante -> documento = $_POST["actualizarDocumento"];
		$actualizar_estudiante -> nombres = $_POST["actualizarNombres"];
		$actualizar_estudiante -> apellidos = $_POST["actualizarApellidos"];
		$actualizar_estudiante -> telefono = $_POST["actualizarTelefono"];
		$actualizar_estudiante -> email = $_POST["actualizarEmail"];
		$actualizar_estudiante -> AjaxActualizarEstudiante();

	}

	/*====== Reconocer Estudiante Repetido  ======*/


	if(isset($_POST["verificarEstudiante"]))
	{

		$verificar_estudiante = new AjaxEstudiantes();
		$verificar_estudiante -> verificar_estudiante = $_POST["verificarEstudiante"];
		$verificar_estudiante -> AjaxVerificarEstudiante();

	}

	/*======  Eliminar Estudiante  ======*/


	if(isset($_POST["eliminarEstudiante"]))
	{

		$eliminar_estudiante = new AjaxEstudiantes();
		$eliminar_estudiante -> documento = $_POST["eliminarEstudiante"];
		$eliminar_estudiante -> AjaxEliminarEstudiante();

	}