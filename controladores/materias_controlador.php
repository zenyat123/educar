<?php

	class ControladorMaterias
	{

		/*====== Registrar Materia  ======*/
		

		public function ControladorRegistrarMateria($datos)
		{

			$tabla = "materia";

			$respuesta = ModeloMaterias::ModeloRegistrarMateria($tabla, $datos);

			return $respuesta;

		}

		/*====== Consultar Materias  ======*/


		public function ControladorConsultarMaterias()
		{

			$tabla = "materia";

			$respuesta = ModeloMaterias::ModeloConsultarMaterias($tabla);

			return $respuesta;

		}

	}