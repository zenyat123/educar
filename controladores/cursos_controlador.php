<?php

	class ControladorCursos
	{

		/*====== Registrar Curso  ======*/


		public function ControladorRegistrarCurso($datos)
		{

			$respuesta = ModeloCursos::ModeloRegistrarCurso($datos);

			return $respuesta;

		}

		/*====== Consultar Cursos  ======*/


		public function ControladorConsultarCursos()
		{

			$respuesta = ModeloCursos::ModeloConsultarCursos();

			return $respuesta;

		}

	}