

<form method = "post" class = "form-horizontal formulario">
						
	<div class = "form-group">
		
		<label for = "materia" class = "col-xs-3">Materia</label>

		<div class = "col-xs-9">

			<select class = "form-control" id = "materiaClase">

				<option></option>
			
				<?php

					$campo = "";
					$valor = "";

					$materias = ControladorMaterias::ControladorConsultarMaterias($campo, $valor);

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
			
			<select class = "form-control" id = "estudianteClase">
				
				<option></option>

				<?php

					$campo = "";
					$valor = "";

					$estudiantes = ControladorEstudiantes::ControladorConsultarEstudiantes($campo, $valor);

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

			<input type = "button" class = "btn btn-primary boton" id = "botonRegistrarClase" value = "Registrar">							

		</div>

	</div>

</form>

