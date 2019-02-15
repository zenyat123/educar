<?php

	require_once("conexion.php");

	class ModeloClases
	{

		/*====== Registrar Clase  ======*/


		public function ModeloRegistrarClase($tabla, $datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into $tabla (id_materia, id_estudiante) values (:materia, :estudiante)");

			$registrar -> bindParam(":materia", $datos["materia"]);
			$registrar -> bindParam(":estudiante", $datos["estudiante"]);

			if($registrar -> execute())
			{

				return "Registrado";

			}

			$registrar -> close();

			$registrar = null;

		}

		/*====== Consultar Clases  ======*/


		public function ModeloConsultarClases($tabla, $campo_uno, $valor_uno, $campo_dos, $valor_dos)
		{

			if($campo_uno == "")
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla");

				$consultar -> execute();

				return $consultar -> fetchAll();

			}
			else
			{

				$consultar = Conexion::Conectar()->prepare("select * from $tabla where $campo_uno = :valor_uno and $campo_dos = :valor_dos");

				$consultar -> bindParam(":valor_uno", $valor_uno);
				$consultar -> bindParam(":valor_dos", $valor_dos);

				$consultar -> execute();

				return $consultar -> fetch();

			}

			$consultar -> close();

			$consultar = null;

		}

		/*====== Consultar Clase  ======*/


		public function ModeloConsultarClase($tabla)
		{

			$consultar = Conexion::Conectar()->prepare("select * from $tabla inner join materia on clase.id_materia = materia.id_materia
																			 inner join estudiante on clase.id_estudiante = estudiante.documento");

			$consultar -> execute();

			return $consultar -> fetchAll();

		}

	}