<?php

	class ControladorMaterias
	{

		/*====== Registrar Materia  ======*/
		

		public function ControladorRegistrarMateria($datos)
		{

			$respuesta = ModeloMaterias::ModeloRegistrarMateria($datos);

			return $respuesta;

		}

		/*====== Consultar Materias  ======*/


		public function ControladorConsultarMaterias()
		{

			$respuesta = ModeloMaterias::ModeloConsultarMaterias();

			return $respuesta;

		}

	}