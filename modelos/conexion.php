<?php

	class Conexion
	{

		public function Conectar()
		{

			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "educar";

			$conexion = new PDO("mysql:host=".$host.";dbname=".$database."",$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			
			return $conexion;

		}

	}