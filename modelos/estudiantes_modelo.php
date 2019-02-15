<?php

	require_once("conexion.php");

	class ModeloEstudiantes
	{

		/*====== Registrar Estudiante  ======*/


		public function ModeloRegistrarEstudiante($tabla, $datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into $tabla (documento, nombres, apellidos, telefono, email) values (:documento, :nombres, :apellidos, :telefono, :email)");

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

		/*====== Consultar Estudiantes  ======*/
		

		public function ModeloConsultarEstudiantes($tabla, $campo, $valor)
		{

			if($campo == "")
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla");
				
				$consultar -> execute();
				
				return $consultar -> fetchAll();

			}
			else
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla where $campo = :valor");

				$consultar -> bindParam(":valor", $valor);

				$consultar -> execute();

				return $consultar -> fetch();

			}

			$consultar -> close();

			$consultar = null;

		} 

		/*======  Actualizar Estudiante  ======*/


		public function ModeloActualizarEstudiante($tabla, $datos)
		{

			$actualiza = "update $tabla set nombres = :nombres, apellidos = :apellidos, telefono = :telefono, email = :email where documento = :documento";

			$actualizar = Conexion::Conectar()->prepare($actualiza);

			$actualizar -> bindParam(":documento", $datos["documento"]);
			$actualizar -> bindParam(":nombres", $datos["nombres"]);
			$actualizar -> bindParam(":apellidos", $datos["apellidos"]);
			$actualizar -> bindParam(":telefono", $datos["telefono"]);
			$actualizar -> bindParam(":email", $datos["email"]);

			if($actualizar -> execute())
			{

				return "Actualizado";

			}
			else
			{

				return $actualizar -> errorInfo();

			}

			$actualizar -> close();

			$actualizar = null;

		}

		/*======  Eliminar Estudiante  ======*/


		public function ModeloEliminarEstudiante($tabla, $campo, $valor)
		{

			$eliminar = Conexion::Conectar()->prepare("delete from $tabla where $campo = :valor");

			$eliminar -> bindParam(":valor", $valor);

			if($eliminar -> execute())
			{

				return "Eliminado";

			}
			else
			{

				return $eliminar -> errorInfo();

			}

			$eliminar -> close();

			$eliminar = null;

		}

	}