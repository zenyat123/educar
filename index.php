<?php

	require_once("controladores/servidor_controlador.php");
	require_once("controladores/principal_controlador.php");

	require_once("controladores/estudiantes_controlador.php");
	require_once("controladores/materias_controlador.php");
	
	require_once("modelos/estudiantes_modelo.php");
	require_once("modelos/materias_modelo.php");

	$principal = new ControladorPrincipal();
	$principal -> Principal();