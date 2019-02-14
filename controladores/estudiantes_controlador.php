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

		/*====== Consultar Estudiantes  ======*/


		public function ControladorConsultarEstudiantes($campo, $valor)
		{

			$tabla = "estudiante";

			$respuesta = ModeloEstudiantes::ModeloConsultarEstudiantes($tabla, $campo, $valor);

			return $respuesta;

		}

	}