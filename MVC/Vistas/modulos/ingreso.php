<br>
	<h1>INGRESAR</h1>

	<form method="post">
		
		<input type="text" placeholder="Usuario" name="usuario" required>

		<input type="password" placeholder="Contraseña" name="clave" required>

		<input type="submit" value="Ingresar">

	</form>

<?php

$ingreso = new AdminC();
$ingreso -> IngresoC();