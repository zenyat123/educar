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


		public function ControladorConsultarMaterias($campo, $valor)
		{

			$tabla = "materia";

			$respuesta = ModeloMaterias::ModeloConsultarMaterias($tabla, $campo, $valor);

			return $respuesta;

		}

		/*====== Actualizar Materia  ======*/


		public function ControladorActualizarMateria($datos)
		{

			$tabla = "materia";

			$respuesta = ModeloMaterias::ModeloActualizarMateria($tabla, $datos);

			return $respuesta;

		}

		/*====== Eliminar Materia  ======*/


		public function ControladorEliminarMateria($campo, $valor)
		{

			$tabla = "materia";

			$respuesta = ModeloMaterias::ModeloEliminarMateria($tabla, $campo, $valor);

			return $respuesta;

		}

	}