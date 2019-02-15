<?php

	require_once("../controladores/materias_controlador.php");
	require_once("../modelos/materias_modelo.php");

	class AjaxTablaMaterias
	{

		/*======  Consultar Materias  ======*/
		

		public function AjaxConsultarMaterias()
		{

			$campo = "";
			$valor = "";

			$materias = ControladorMaterias::ControladorConsultarMaterias($campo, $valor);

			if($materias)
			{

				$datos_json = '  

					{

						"data":

						[';

							for($i = 0; $i < count($materias); $i++)
							{								

								$editar = "<button type = 'submit' class = 'btn btn-warning botonEditarMateria' codigo = '".$materias[$i]["id_materia"]."' data-toggle = 'modal' data-target = '#modalEditarMateria'>Editar</button>";

								$eliminar = "<button type = 'submit' class = 'btn btn-danger botonEliminarMateria' idMateria = '".$materias[$i]["id_materia"]."' materia = '".$materias[$i]["materia"]."'>Eliminar</button>";
								 
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