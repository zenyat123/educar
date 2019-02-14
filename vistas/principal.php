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
	<link href = "<?php echo $servidor ?>/css/sweetalert.css" rel = "stylesheet">

	<script src = "<?php echo $servidor ?>/js/jquery.js"></script>
	<script src = "<?php echo $servidor ?>/js/bootstrap.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-jquery.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-bootstrap.js"></script>
	<script src = "<?php echo $servidor ?>/js/datatables-responsive.js"></script>
	<script src = "<?php echo $servidor ?>/js/sweetalert.js"></script>

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
					
					<?php

						include("contenidos/estudiantes.php");

					?>

				</div>

				<div id = "materias" class = "tab-pane fade">

					<?php

						include("contenidos/materias.php");

					?>

				</div>

				<div id = "incripciones" class = "tab-pane fade">
					
					<?php

						include("contenidos/inscripciones.php");

					?>

				</div>

				<div id = "registros" class = "tab-pane fade">

					<?php

						include("contenidos/registros.php");

					?>

				</div>

			</div>

		</div>
		
	</div>

	<input type = "hidden" value = "<?php echo $servidor; ?>" id = "servidor">

	<script src = "<?php echo $servidor ?>/js/principal.js"></script>
	
</body>

</html>