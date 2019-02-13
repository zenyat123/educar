

/*======  Ruta del Servidor  ======*/


var servidor = $("#servidor").val();

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
		success: function(){}

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
		success: function(){}

	})

})

/*======  Botón Registrar Curso  ======*/


$("#botonRegistrarCurso").click(function()
{

	var materia = $("#materiaCurso").val();
	var estudiante = $("#estudianteCurso").val();

	var datos = new FormData();

	datos.append("materia", materia);
	datos.append("estudiante", estudiante);

	$.ajax
	({

		url: servidor + "/ajax/cursos_ajax.php",
		method: "post",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(){}

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

/*======  Cargar la Tabla Dinámica de Cursos  ======*/


$(".tablaCursos").DataTable
({

	"ajax": servidor + "/ajax/tabla_cursos_ajax.php",
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

