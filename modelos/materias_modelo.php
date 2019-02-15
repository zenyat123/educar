<?php

	require_once("conexion.php");

	class ModeloMaterias
	{

		/*====== Registrar Materia  ======*/


		public function ModeloRegistrarMateria($tabla, $datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into $tabla (materia, profesion) values (:materia, :profesion)");

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
		

		public function ModeloConsultarMaterias($tabla, $campo, $valor)
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

		/*====== Actualizar Materia  ======*/


		public function ModeloActualizarMateria($tabla, $datos)
		{

			$actualizar = Conexion::Conectar()->prepare("update $tabla set materia = :materia, profesion = :profesion where id_materia = :codigo");

			$actualizar -> bindParam(":codigo", $datos["codigo"]);
			$actualizar -> bindParam(":materia", $datos["materia"]);
			$actualizar -> bindParam(":profesion", $datos["profesion"]);

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

		/*====== Eliminar Materia  ======*/


		public function ModeloEliminarMateria($tabla, $campo, $valor)
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