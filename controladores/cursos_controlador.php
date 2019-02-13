<?php

	class ControladorCursos
	{

		/*====== Registrar Curso  ======*/


		public function ControladorRegistrarCurso($datos)
		{

			$tabla = "curso";

			$respuesta = ModeloCursos::ModeloRegistrarCurso($tabla, $datos);

			return $respuesta;

		}

		/*====== Consultar Cursos  ======*/


		public function ControladorConsultarCursos()
		{

			$tabla = "curso";

			$respuesta = ModeloCursos::ModeloConsultarCursos($tabla);

			return $respuesta;

		}

	}