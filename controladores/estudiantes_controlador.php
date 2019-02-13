<?php

	class ControladorEstudiantes
	{

		/*====== Registrar Estudiante  ======*/
		

		public function ControladorRegistrarEstudiante($datos)
		{

			$tabla = "estudiante";

			$respuesta = ModeloEstudiantes::ModeloRegistrarEstudiante($tabla, $datos);

			return $respuesta;

		}

		/*====== Consultar Estudiante  ======*/


		public function ControladorConsultarEstudiantes()
		{

			$tabla = "estudiante";

			$respuesta = ModeloEstudiantes::ModeloConsultarEstudiantes($tabla);

			return $respuesta;

		}

	}