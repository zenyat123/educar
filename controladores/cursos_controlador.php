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


		public function ControladorConsultarCursos($campo_uno, $valor_uno, $campo_dos, $valor_dos)
		{

			$tabla = "curso";

			$respuesta = ModeloCursos::ModeloConsultarCursos($tabla, $campo_uno, $valor_uno, $campo_dos, $valor_dos);

			return $respuesta;

		}

		/*====== Consultar Curso  ======*/


		public function ControladorConsultarCurso()
		{

			$tabla = "curso";

			$respuesta = ModeloCursos::ModeloConsultarCurso($tabla);

			return $respuesta;

		}

	}