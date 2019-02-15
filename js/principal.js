

/*======  Ruta del Servidor  ======*/


var servidor = $("#servidor").val();

/*======  Reconocer Estudiante Repetido  ======*/


var verificado = true;

$("#documento").change(function()
{

	var documento = $("#documento").val();

	var datos = new FormData();

	datos.append("verificarEstudiante", documento);

	$.ajax
	({

		url: servidor + "/ajax/estudiantes_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta)
		{

			if(respuesta != "false")
			{

				$(".container").after("<div class = 'alert alert-danger text-center col-xs-4 col-xs-offset-4'>" +

											"<strong>Advertencia:</strong> El estudiante ya se encuentra registrado" +

									  "</div>");

				verificado = false;

			}
			else
			{

				$(".alert").remove();

				verificado = true;

			}

		}

	})

})

/*======  Botón Registrar Estudiante  ======*/


$("#botonRegistrarEstudiante").click(function()
{

	var documento = $("#documento").val();
	var nombres = $("#nombres").val();
	var apellidos = $("#apellidos").val();
	var telefono = $("#telefono").val();
	var email = $("#email").val();

	var datos = new FormData();

	datos.append("documento", documento);
	datos.append("nombres", nombres);
	datos.append("apellidos", apellidos);
	datos.append("telefono", telefono);
	datos.append("email", email);

	$.ajax
	({

		url: servidor + "/ajax/estudiantes_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta)
		{

			if(respuesta == "Registrado")
			{

				swal
				({

					title: "Registrado",
					text: "Estudiante registrado correctamente",
					type: "success",
					confirmButtonText: "Bien",
					confirmButtonColor: "#337ab7"
				  
				},

				function(isConfirm)
				{

					if(isConfirm)
					{

						window.location = "";

					}

				});

			}

		}

	})

})

/*======  Botón Registrar Materia  ======*/


$("#botonRegistrarMateria").click(function()
{

	var materia = $("#materia").val();
	var profesion = $("#profesion").val();

	var datos = new FormData();

	datos.append("materia", materia);
	datos.append("profesion", profesion);

	$.ajax
	({

		url: servidor + "/ajax/materias_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta)
		{

			if(respuesta == "Registrado")
			{

				swal
				({

					title: "Registrada",
					text: "Materia registrada correctamente",
					type: "success",
					confirmButtonText: "Bien",
					confirmButtonColor: "#337ab7"
				  
				},

				function(isConfirm)
				{

					if(isConfirm)
					{

						window.location = "";

					}

				});

			}

		}

	})

})

/*======  Botón Registrar Clase  ======*/


$("#botonRegistrarClase").click(function()
{

	var materia = $("#materiaClase").val();
	var estudiante = $("#estudianteClase").val();

	var datos = new FormData();

	datos.append("materia", materia);
	datos.append("estudiante", estudiante);

	$.ajax
	({

		url: servidor + "/ajax/clases_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta)
		{

			if(respuesta == "Registrado")
			{

				swal
				({

					title: "Registrado",
					text: "Estudiante registrado correctamente",
					type: "success",
					confirmButtonText: "Bien",
					confirmButtonColor: "#337ab7"
				  
				},

				function(isConfirm)
				{

					if(isConfirm)
					{

						window.location = "";

					}

				});

			}
			else
			{

				swal
				({

					title: respuesta,
					text: "El o La estudiante ya se encuentra registrado en esa materia",
					type: "error",
					confirmButtonText: "Bien",
					confirmButtonColor: "#337ab7"
				  
				});

			}

		}

	})

})

/*======  Cargar la Tabla Dinámica de Estudiantes  ======*/


$(".tablaEstudiantes").DataTable
({

	"ajax": servidor + "/ajax/tabla_estudiantes_ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language":
	{

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

})

/*======  Cargar la Tabla Dinámica de Materias  ======*/


$(".tablaMaterias").DataTable
({

	"ajax": servidor + "/ajax/tabla_materias_ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language":
	{

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

})

/*======  Cargar la Tabla Dinámica de Clases  ======*/


$(".tablaClases").DataTable
({

	"ajax": servidor + "/ajax/tabla_clases_ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language":
	{

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

})

/*======  Actualizar Estudiante  ======*/


$(".tablaEstudiantes tbody").on("click", ".botonEditarEstudiante", function()
{

	//  Consultar Estudiante

	var documento = $(this).attr("documento");

	var datos = new FormData();

	datos.append("consultarDocumento", documento);

	$.ajax
	({

		url: servidor + "/ajax/estudiantes_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta)
		{

			$("#modalEditarEstudiante .editarDocumento").val(respuesta["documento"]);
			$("#modalEditarEstudiante .editarNombres").val(respuesta["nombres"]);
			$("#modalEditarEstudiante .editarApellidos").val(respuesta["apellidos"]);
			$("#modalEditarEstudiante .editarTelefono").val(respuesta["telefono"]);
			$("#modalEditarEstudiante .editarEmail").val(respuesta["email"]);

			//  Actualizar Estudiante

			$(".botonActualizarEstudiante").click(function()
			{

				var documento = $("#modalEditarEstudiante .editarDocumento").val();
				var nombres = $("#modalEditarEstudiante .editarNombres").val();
				var apellidos = $("#modalEditarEstudiante .editarApellidos").val();
				var telefono = $("#modalEditarEstudiante .editarTelefono").val();
				var email = $("#modalEditarEstudiante .editarEmail").val();

				var datos = new FormData();

				datos.append("actualizarDocumento", documento);
				datos.append("actualizarNombres", nombres);
				datos.append("actualizarApellidos", apellidos);
				datos.append("actualizarTelefono", telefono);
				datos.append("actualizarEmail", email);

				$.ajax
				({

					url: servidor + "/ajax/estudiantes_ajax.php",
					method: "post",
					data: datos,
					cache: false,
 					contentType: false,
 					processData: false,
 					success: function(respuesta)
 					{

 						if(respuesta == "Actualizado")
 						{

 							swal
							({

								title: "Actualizado",
								text: "Estudiante actualizado correctamente",
								type: "success",
								confirmButtonText: "Bien",
								confirmButtonColor: "#337ab7"
							  
							},

							function(isConfirm)
							{

								if(isConfirm)
								{

									window.location = "";

								}

							});

 						}

 					}

				})

			})

		}

	})

})

/*======  Eliminar Estudiante  ======*/


$(".tablaEstudiantes tbody").on("click", ".botonEliminarEstudiante", function()
{

	// Consultar Estudiante

	var documento = $(this).attr("documento");

	swal
	({

		title: "¿Está seguro de eliminar el Estudiante con número de documento: " + documento + "?",
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		confirmButtonText: "Eliminar",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		cancelButtonText: "Cancelar"
	  
	},

	function(isConfirm)
	{

		if(isConfirm)
		{

			var datos = new FormData();

			datos.append("eliminarEstudiante", documento);

			$.ajax
			({

				url: servidor + "/ajax/estudiantes_ajax.php",
				method: "post",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta)
				{

					if(respuesta == "Eliminado")
					{

						window.location = "";

					}

				}

			})

		}

	}); 		

})

/*======  Actualizar Materia  ======*/


$(".tablaMaterias tbody").on("click", ".botonEditarMateria", function()
{

	//  Consultar Materia

	var codigo = $(this).attr("codigo");

	var datos = new FormData();

	datos.append("codigo", codigo);

	$.ajax
	({

		url: servidor + "/ajax/materias_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta)
		{

			$("#modalEditarMateria .editarCodigo").val(respuesta["id_materia"]);
			$("#modalEditarMateria .editarMateria").val(respuesta["materia"]);
			$("#modalEditarMateria .editarProfesion").val(respuesta["profesion"]);

			//  Actualizar Materia

			$(".botonActualizarMateria").click(function()
			{

				var codigo = $("#modalEditarMateria .editarCodigo").val();
				var materia = $("#modalEditarMateria .editarMateria").val();
				var profesion = $("#modalEditarMateria .editarProfesion").val();

				var datos = new FormData();

				datos.append("actualizarCodigo", codigo);
				datos.append("actualizarMateria", materia);
				datos.append("actualizarProfesion", profesion);

				$.ajax
				({

					url: servidor + "/ajax/materias_ajax.php",
					method: "post",
					data: datos,
					cache: false,
 					contentType: false,
 					processData: false,
 					success: function(respuesta)
 					{

 						if(respuesta == "Actualizado")
 						{

 							swal
							({

								title: "Actualizado",
								text: "Materia actualizada correctamente",
								type: "success",
								confirmButtonText: "Bien",
								confirmButtonColor: "#337ab7"
							  
							},

							function(isConfirm)
							{

								if(isConfirm)
								{

									window.location = "";

								}

							});

 						}

 					}

				})

			})

		}

	})

})

/*======  Eliminar Materia  ======*/


$(".tablaMaterias tbody").on("click", ".botonEliminarMateria", function()
{

	//  Consultar Materia

	var idMateria = $(this).attr("idMateria");
	var materia = $(this).attr("materia");

	swal
	({

		title: "¿Está seguro de eliminar la materia: " + materia + "?",
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		confirmButtonText: "Eliminar",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		cancelButtonText: "Cancelar"
	  
	},

	function(isConfirm)
	{

		if(isConfirm)
		{

			var datos = new FormData();

			datos.append("eliminarMateria", idMateria);

			$.ajax
			({

				url: servidor + "/ajax/materias_ajax.php",
				method: "post",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta)
				{

					if(respuesta == "Eliminado")
					{

						window.location = "";

					}

				}

			})

		}

	});

})

