<?php

	require_once("../controladores/materias_controlador.php");
	require_once("../modelos/materias_modelo.php");

	class AjaxTablaMaterias
	{

		public function AjaxConsultarMaterias()
		{

			$materias = ControladorMaterias::ControladorConsultarMaterias();

			if($materias)
			{

				$datos_json = '  

					{

						"data":

						[';

							for($i = 0; $i < count($materias); $i++)
							{

								/*======  Consultar Materias  ======*/


								$editar = "<button type = 'submit' class = 'btn btn-warning'>Editar</button>";

								$eliminar = "<button type = 'submit' class = 'btn btn-danger'>Eliminar</button>";
								 
								$datos_json .= ' 

									[
										"'.$materias[$i]["id_materia"].'",
										"'.$materias[$i]["materia"].'",
										"'.$materias[$i]["profesion"].'",
										"'.$editar.'",
										"'.$eliminar.'"
									],';

							}

							$datos_json = substr($datos_json, 0, -1);
							$datos_json .= '

						]

					}';

				echo $datos_json;

			}
			else
			{

				$datos_json = ' 
				{

					"data": 
					[
						[
							"0",
							"No registrado",
							"No registrado",
							"",
							""				
						]
					]

				}';

				echo $datos_json;

			}

		}

	}

	/*======  Activar Tabla de Materias  ======*/


	$activar_estudiantes = new AjaxTablaMaterias();
	$activar_estudiantes -> AjaxConsultarMaterias();