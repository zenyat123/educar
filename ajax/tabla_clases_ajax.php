<?php

	require_once("../controladores/clases_controlador.php");
	require_once("../modelos/clases_modelo.php");

	class AjaxTablaClases
	{

		/*======  Consultar Clases  ======*/


		public function AjaxConsultarClases()
		{

			$clases = ControladorClases::ControladorConsultarClase();

			if($clases)
			{

				$datos_json = '  

					{

						"data":

						[';

							for($i = 0; $i < count($clases); $i++)
							{
								 
								$datos_json .= ' 

									[
										"'.$clases[$i]["id_clase"].'",
										"'.$clases[$i]["profesion"].'",
										"'.$clases[$i]["materia"].'",
										"'.$clases[$i]["nombres"]." ".$clases[$i]["apellidos"].'"
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
							"No registrado"			
						]
					]

				}';

				echo $datos_json;

			}

		}

	}

	/*======  Activar Tabla de Clases  ======*/


	$activar_clases = new AjaxTablaClases();
	$activar_clases -> AjaxConsultarClases();