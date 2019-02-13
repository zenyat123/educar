<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf-8">
	<title>Inicio</title>

	<?php

		$servidor = Servidor::Ubicacion();

	?>

	<link href = "<?php echo $servidor ?>/css/bootstrap.css" rel = "stylesheet">
	<link href = "<?php echo $servidor ?>/css/estilos.css" rel = "stylesheet">
	<link href = "<?php echo $servidor ?>/css/datatables-bootstrap.css" rel = "stylesheet">	
	<link href = "<?php echo $servidor ?>/css/datatables-responsive.css" rel = "stylesheet">
	<link href = "<?php echo $servidor ?>/css/font-awesome.css" rel = "stylesheet">

	<script src = "<?php echo $servidor ?>/js/jquery.js"></script>
	<script src = "<?php echo $servidor ?>/js/bootstrap.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-jquery.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-bootstrap.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-responsive.js"></script>

</head>

<body>

	<div class = "container-fluid">

		<div class = "container">

			<h1 class = "text-center text-primary titulo">(SRE) Sistema de Registro de Estudiantes</h1>
			
			<ul class = "nav nav-tabs">
				
				<li class = "active"><a data-toggle = "tab" href = "#estudiantes">Estudiantes</a></li>
				<li><a data-toggle = "tab" href = "#materias">Materias</a></li>
				<li><a data-toggle = "tab" href = "#registros">Registros</a></li>
				<li><a data-toggle = "tab" href = "#incripciones">Inscripciones</a></li>
 
			</ul>

			<div class = "tab-content">
				
				<div id = "estudiantes" class = "tab-pane fade in active">
					
					<form method = "post" class = "form-horizontal formulario">
						
						<div class = "form-group">

							<label for = "documento" class = "col-xs-3">N° de Documento:</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "documento" id = "documento" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "nombres" class = "col-xs-3">Nombres:</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "nombres" id = "nombres" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "apellidos" class = "col-xs-3">Apellidos:</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "apellidos" id = "apellidos" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "telefono" class = "col-xs-3">Teléfono:</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "telefono" id = "telefono" class = "form-control">

							</div>

						</div>

						<div class = "form-group">

							<label for = "email" class = "col-xs-3">Correo Electrónico:</label>

							<div class = "col-xs-9">
								
								<input type = "email" name = "email" id = "email" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<div class = "col-xs-offset-10 col-xs-2">
							 
								<button type = "submit" class = "btn btn-primary boton" id = "botonRegistrarEstudiante">Registrar</button>

							</div>

						</div>

					</form>

				</div>

				<div id = "materias" class = "tab-pane fade">

					<form method = "post" class = "form-horizontal formulario">
						
						<div class = "form-group">

							<label for = "materia" class = "col-xs-3">Materia:</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "materia" id = "materia" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "profesion" class = "col-xs-3">Profesión:</label>

							<div class = "col-xs-9">
								
								<select name = "profesion" id = "profesion" class = "form-control">
									
									<option value = "Ingenieria">Ingenieria</option>
									<option value = "Administracion">Administración</option>
									<option value = "Cultura">Cultura</option>
									<option value = "Mercadeo">Mercadeo</option>

								</select>

							</div>

						</div>

						<div class = "form-group">

							<div class = "col-xs-offset-10 col-xs-2">
							 
								<button type = "submit" class = "btn btn-primary boton" id = "botonRegistrarMateria">Registrar</button>

							</div>

						</div>

					</form>
					
				</div>

				<div id = "registros" class = "tab-pane fade">

					<h1 class = "text-primary titulo">Estudiantes</h1>

					<div class = "col-xs-12" id = "panel-tabla">
			
						<table class = "table table-bordered tablaEstudiantes">
							
							<thead>
								
								<tr>

									<th>Documento</th>		
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Teléfono</th>	
									<th>Email</th>
									<th></th>
									<th></th>

								</tr>

							</thead>

						</table>

					</div>

					<h1 class = "text-primary titulo">Materias</h1>

					<div class = "col-xs-12" id = "panel-tabla">
			
						<table class = "table table-bordered tablaMaterias">
							
							<thead>
								
								<tr>

									<th>Código</th>
									<th>Materia</th>		
									<th>Profesión</th>
									<th></th>
									<th></th>

								</tr>

							</thead>

						</table>

					</div>

				</div>

				<div id = "incripciones" class = "tab-pane fade">

					<h1 class = "text-primary titulo">Cursos</h1>

					<form method = "post" class = "form-horizontal formulario">
						
						<div class = "form-group">
							
							<label for = "materia" class = "col-xs-3">Materia</label>

							<div class = "col-xs-9">
								
								<input type = "text" name = "materia" class = "form-control">

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>
		
	</div>

	<input type = "hidden" value = "<?php echo $servidor; ?>" id = "servidor">

	<script src = "<?php echo $servidor ?>/js/principal.js"></script>
	
</body>

</html>