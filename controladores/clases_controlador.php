<?php

	class ControladorClases
	{

		/*====== Registrar Clase  ======*/


		public function ControladorRegistrarClase($datos)
		{

			$tabla = "clase";

			$respuesta = ModeloClases::ModeloRegistrarClase($tabla, $datos);

			return $respuesta;

		}

		/*====== Consultar Clases  ======*/


		public function ControladorConsultarClases($campo_uno, $valor_uno, $campo_dos, $valor_dos)
		{

			$tabla = "clase";

			$respuesta = ModeloClases::ModeloConsultarClases($tabla, $campo_uno, $valor_uno, $campo_dos, $valor_dos);

			return $respuesta;

		}

		/*====== Consultar Clase  ======*/


		public function ControladorConsultarClase()
		{

			$tabla = "clase";

			$respuesta = ModeloClases::ModeloConsultarClase($tabla);

			return $respuesta;

		}

	}