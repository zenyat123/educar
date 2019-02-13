<?php

	require_once("conexion.php");

	class ModeloEstudiantes
	{

		/*====== Registrar Estudiante  ======*/


		public function ModeloRegistrarEstudiante($datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into estudiante (documento, nombres, apellidos, telefono, email) values (:documento, :nombres, :apellidos, :telefono, :email)");

			$registrar -> bindParam(":documento" , $datos["documento"]);
			$registrar -> bindParam(":nombres" , $datos["nombres"]);
			$registrar -> bindParam(":apellidos" , $datos["apellidos"]);
			$registrar -> bindParam(":telefono" , $datos["telefono"]);
			$registrar -> bindParam(":email" , $datos["email"]);

			if($registrar -> execute())
			{

				return "Registrado";

			}

			$registrar -> close();

			$registrar = null;

		}

		/*====== Consultar Estudiante  ======*/
		

		public function ModeloConsultarEstudiantes()
		{

			$consultar = Conexion::Conectar()->prepare("select * from estudiante");
			
			$consultar -> execute();
			
			return $consultar -> fetchAll();

		} 

	}