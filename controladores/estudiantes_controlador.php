<?php

	class ControladorEstudiantes
	{

		/*====== Registrar Estudiante  ======*/
		

		public function ControladorRegistrarEstudiante($datos)
		{

			$respuesta = ModeloEstudiantes::ModeloRegistrarEstudiante($datos);

			return $respuesta;

		}

		/*====== Consultar Estudiante  ======*/


		public function ControladorConsultarEstudiantes()
		{

			$respuesta = ModeloEstudiantes::ModeloConsultarEstudiantes();

			return $respuesta;

		}

	}