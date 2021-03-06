<?php

	require_once("../controladores/estudiantes_controlador.php");
	require_once("../modelos/estudiantes_modelo.php");

	class AjaxTablaEstudiantes
	{

		/*======  Consultar Estudiantes  ======*/
		

		public function AjaxConsultarEstudiantes()
		{

			$campo = "";
			$valor = "";

			$estudiantes = ControladorEstudiantes::ControladorConsultarEstudiantes($campo, $valor);

			if($estudiantes)
			{

				$datos_json = '  

					{

						"data":

						[';

							for($i = 0; $i < count($estudiantes); $i++)
							{								

								$editar = "<button type = 'submit' class = 'btn btn-warning botonEditarEstudiante' documento = '".$estudiantes[$i]["documento"]."' data-toggle = 'modal' data-target = '#modalEditarEstudiante'>Editar</button>";

								$eliminar = "<button type = 'submit' class = 'btn btn-danger botonEliminarEstudiante' documento = '".$estudiantes[$i]["documento"]."'>Eliminar</button>";
								 
								$datos_json .= '  
								
									[
										"'.$estudiantes[$i]["documento"].'",
										"'.$estudiantes[$i]["nombres"].'",
										"'.$estudiantes[$i]["apellidos"].'",
										"'.$estudiantes[$i]["telefono"].'",
										"'.$estudiantes[$i]["email"].'",
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

	/*======  Activar Tabla de Estudiantes  ======*/


	$activar_estudiantes = new AjaxTablaEstudiantes();
	$activar_estudiantes -> AjaxConsultarEstudiantes();