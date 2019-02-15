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

		/*======  Actualizar Estudiante  ======*/


		public function ControladorActualizarEstudiante($datos)
		{

			$tabla = "estudiante";

			$respuesta = ModeloEstudiantes::ModeloActualizarEstudiante($tabla, $datos);

			return $respuesta;

		}

		/*======  Eliminar Estudiante  ======*/


		public function ControladorEliminarEstudiante($campo, $valor)
		{

			$tabla = "estudiante";

			$respuesta = ModeloEstudiantes::ModeloEliminarEstudiante($tabla, $campo, $valor);

			return $respuesta;

		}

	}