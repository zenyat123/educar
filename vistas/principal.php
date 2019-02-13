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
				<li><a data-toggle = "tab" href = "#incripciones">Inscripciones</a></li>
				<li><a data-toggle = "tab" href = "#registros">Registros</a></li>
 
			</ul>

			<div class = "tab-content">
				
				<div id = "estudiantes" class = "tab-pane fade in active">
					
					<form method = "post" class = "form-horizontal formulario">
						
						<div class = "form-group">

							<label for = "documento" class = "col-xs-3">N° de Documento:</label>

							<div class = "col-xs-9">
								
								<input type = "text" id = "documento" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "nombres" class = "col-xs-3">Nombres:</label>

							<div class = "col-xs-9">
								
								<input type = "text" id = "nombres" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "apellidos" class = "col-xs-3">Apellidos:</label>

							<div class = "col-xs-9">
								
								<input type = "text" id = "apellidos" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "telefono" class = "col-xs-3">Teléfono:</label>

							<div class = "col-xs-9">
								
								<input type = "text" id = "telefono" class = "form-control">

							</div>

						</div>

						<div class = "form-group">

							<label for = "email" class = "col-xs-3">Correo Electrónico:</label>

							<div class = "col-xs-9">
								
								<input type = "email" id = "email" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<div class = "col-xs-offset-11 col-xs-1">
							 
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
								
								<input type = "text" id = "materia" class = "form-control" required>

							</div>

						</div>

						<div class = "form-group">

							<label for = "profesion" class = "col-xs-3">Profesión:</label>

							<div class = "col-xs-9">
								
								<select id = "profesion" class = "form-control">
									
									<option value = "Ingeniería">Ingeniería</option>
									<option value = "Administración">Administración</option>
									<option value = "Cultura">Cultura</option>
									<option value = "Mercadeo">Mercadeo</option>

								</select>

							</div>

						</div>

						<div class = "form-group">

							<div class = "col-xs-offset-11 col-xs-1">
							 
								<button type = "submit" class = "btn btn-primary boton" id = "botonRegistrarMateria">Registrar</button>

							</div>

						</div>

					</form>
					
				</div>

				<div id = "incripciones" class = "tab-pane fade">
					
					<form method = "post" class = "form-horizontal formulario">
						
						<div class = "form-group">
							
							<label for = "materia" class = "col-xs-3">Materia</label>

							<div class = "col-xs-9">

								<select class = "form-control" id = "materiaCurso">

									<option></option>
								
									<?php

										$materias = ControladorMaterias::ControladorConsultarMaterias();

										foreach($materias as $llave => $materia) 
										{

											echo "<option value = '".$materia["id_materia"]."'>".$materia["materia"]."</option>";
											
										}

									?>

								</select>

							</div>

						</div>

						<div class = "form-group">
							
							<label for = "estudiante" class = "col-xs-3">Estudiante</label>

							<div class = "col-xs-9">
								
								<select class = "form-control" id = "estudianteCurso">
									
									<option></option>

									<?php

										$estudiantes = ControladorEstudiantes::ControladorConsultarEstudiantes();

										foreach($estudiantes as $llave => $estudiante)
										{

											echo "<option value = '".$estudiante["documento"]."'>".$estudiante["nombres"]." ".$estudiante["apellidos"]."</option>";

										}

									?>

								</select>

							</div>

						</div>

						<div class = "form-group">

							<div class = "col-xs-offset-11 col-xs-1">
								
								<button type = "submit" class = "btn btn-primary boton" id = "botonRegistrarCurso">Registrar</button>

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

					<h1 class = "text-primary titulo">Cursos</h1>

					<div class = "col-xs-12" id = "panel-tabla">

						<table class = "table table-bordered tablaCursos">
							
							<thead>
								
								<tr>
									
									<th>Código</th>
									<th>Profesión</th>
									<th>Materia</th>
									<th>Estudiante</th>
									<th></th>
									<th></th>

								</tr>
	
							</thead>

						</table>

					</div>

				</div>

			</div>

		</div>
		
	</div>

	<input type = "hidden" value = "<?php echo $servidor; ?>" id = "servidor">

	<script src = "<?php echo $servidor ?>/js/principal.js"></script>
	
</body>

</html>