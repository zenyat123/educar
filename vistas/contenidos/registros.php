

<h1 class = "text-primary titulo">Estudiantes</h1>

<div class = "col-xs-12" id = "panel-tabla">

	<table class = "table table-bordered tablaEstudiantes">
		
		<thead>
			
			<tr>

				<th>Documento</th>		
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Teléfono</th>	
				<th>Correo Electrónico</th>
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

<h1 class = "text-primary titulo">Clases</h1>

<div class = "col-xs-12" id = "panel-tabla">

	<table class = "table table-bordered tablaClases">
		
		<thead>
			
			<tr>
				
				<th>Código</th>
				<th>Profesión</th>
				<th>Materia</th>
				<th>Estudiante</th>

			</tr>

		</thead>

	</table>

</div>

<div class = "modal fade" id = "modalEditarEstudiante" role = "dialog">

	<div class = "modal-dialog">
		
		<div class = "modal-content">
			
			<div class = "modal-header">
				
				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "close"><span aria-hidden = "true" class = "colorTexto">&times;</span></button>

				<h4>Editar Estudiante</h4>

			</div>

			<div class = "modal-body">

				<div class = "form-group">

					<input type = "hidden" class = "documento">
					
					<label for = "editarDocumento">Documento:</label>

					<input type = "text" class = "form-control editarDocumento" readonly>

				</div>
				
				<div class = "form-group">
					
					<label for = "editarNombres">Nombres:</label>

					<input type = "text" class = "form-control editarNombres">

				</div>

				<div class = "form-group">
					
					<label for = "editarApellidos">Apellidos:</label>

					<input type = "text" class = "form-control editarApellidos">

				</div>

				<div class = "form-group">
					
					<label for = "editarTelefono">Teléfono:</label>

					<input type = "text" class = "form-control editarTelefono">

				</div>

				<div class = "form-group">
					
					<label for = "editarEmail">Correo Electrónico:</label>

					<input type = "text" class = "form-control editarEmail">

				</div>

			</div>

			<div class = "modal-footer">
				
				<button type = "button" class = "btn btn-default" data-dismiss = "modal">Salir</button>

                <button type = "button" class = "btn btn-primary botonActualizarEstudiante">Guardar Cambios</button>

			</div>

		</div>

	</div>

</div>

<div class = "modal fade" id = "modalEditarMateria" role = "dialog">
	
	<div class = "modal-dialog">
		
		<div class = "modal-content">
			
			<div class = "modal-header">

				<button type = "button" class = "close" data-dismiss = "modal" aria-label = "close"><span aria-hidden = "true" class = "colorTexto">&times;</span></button>
				
				<h4>Editar Materia</h4>

			</div>

			<div class = "modal-body">

				<div class = "form-group">
					
					<label for = "editarCodigo">Código:</label>

					<input type = "text" class = "form-control editarCodigo" readonly>

				</div>	

				<div class = "form-group">
					
					<label for = "editarMateria">Materia:</label>

					<input type = "text" class = "form-control editarMateria">

				</div>			

				<div class = "form-group">
					
					<label for = "editarProfesion">Profesión:</label>

					<input type = "text" class = "form-control editarProfesion">

				</div>

			</div>

			<div class = "modal-footer">

				<button type = "button" class = "btn btn-default" data-dismiss = "modal">Salir</button>

                <button type = "button" class = "btn btn-primary botonActualizarMateria">Guardar Cambios</button>				

			</div>

		</div>

	</div>

</div>

