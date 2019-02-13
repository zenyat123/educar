<?php

	require_once("conexion.php");

	class ModeloCursos
	{

		/*====== Registrar Curso  ======*/


		public function ModeloRegistrarCurso($datos)
		{

			$registrar = Conexion::Conectar()->prepare("insert into curso (id_materia, id_estudiante) values (:materia, :estudiante)");

			$registrar -> bindParam(":materia", $datos["materia"]);
			$registrar -> bindParam(":estudiante", $datos["estudiante"]);

			if($registrar -> execute())
			{

				return "Registrado";

			}

			$registrar -> close();

			$registrar = null;

		}

		/*====== Consultar Cursos  ======*/


		public function ModeloConsultarCursos()
		{

			$consultar = Conexion::Conectar()->prepare("select * from curso inner join materia on curso.id_materia = materia.id_materia
																			inner join estudiante on curso.id_estudiante = estudiante.documento");

			$consultar -> execute();

			return $consultar -> fetchAll();

		}

	}