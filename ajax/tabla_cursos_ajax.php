<?php

	require_once("../controladores/cursos_controlador.php");
	require_once("../modelos/cursos_modelo.php");

	class AjaxTablaCursos
	{

		/*======  Consultar Cursos  ======*/


		public function AjaxConsultarCursos()
		{

			$cursos = ControladorCursos::ControladorConsultarCursos();

			if($cursos)
			{

				$datos_json = '  

					{

						"data":

						[';

							for($i = 0; $i < count($cursos); $i++)
							{

								/*======  Consultar Cursos  ======*/


								$editar = "<button type = 'submit' class = 'btn btn-warning'>Editar</button>";

								$eliminar = "<button type = 'submit' class = 'btn btn-danger'>Eliminar</button>";
								 
								$datos_json .= ' 

									[
										"'.$cursos[$i]["id_curso"].'",
										"'.$cursos[$i]["profesion"].'",
										"'.$cursos[$i]["materia"].'",
										"'.$cursos[$i]["nombres"]." ".$cursos[$i]["apellidos"].'",
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
							"",
							""				
						]
					]

				}';

				echo $datos_json;

			}

		}

	}

	/*======  Activar Tabla de Cursos  ======*/


	$activar_cursos = new AjaxTablaCursos();
	$activar_cursos -> AjaxConsultarCursos();