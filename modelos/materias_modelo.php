<?php

	require_once("conexion.php");

	class ModeloMaterias
	{

		/*====== Registrar Materia  ======*/


		public function ModeloRegistrarMateria($datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into materia (materia, profesion) values (:materia, :profesion)");

			$registrar -> bindParam(":materia" , $datos["materia"]);
			$registrar -> bindParam(":profesion" , $datos["profesion"]);

			if($registrar -> execute())
			{

				return "Registrado";

			}

			$registrar -> close();

			$registrar = null;

		}

		/*====== Consultar Materias  ======*/
		

		public function ModeloConsultarMaterias()
		{

			$consultar = Conexion::Conectar()->prepare("select * from materia");
			
			$consultar -> execute();
			
			return $consultar -> fetchAll();

		} 

	}	