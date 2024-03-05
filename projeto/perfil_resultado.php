<section>
	<form action="perfil_resultado.php" method="POST">
		<h1>Perfil</h1>
		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Profesión:</label>
			<div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="profesion" id="profesion1" value="Desarrollador" required>
					<label class="form-check-label" for="profesion1">Desarrollador</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="profesion" id="profesion2" value="Diseñador" required>
					<label class="form-check-label" for="profesion2">Diseñador</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="profesion" id="profesion3" value="Marketing" required>
					<label class="form-check-label" for="profesion3">Marketing</label>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary" name="boton">Escolher</button>
	</form>
</section>

  <!-
<?php 
if (isset($_POST['boton'])) {
	require_once 'Perfil.php';
	$perfil = new Perfil();
	$perfil->setNombre($_POST['nombre']);
	$perfil->setProfesion($_POST['profesion']);
	echo "<div id='perfil'>";
	echo "<h2>Bienvenido, " . $perfil->getNombre() . "</h2>";
	echo "<p>Profesión: " . $perfil->getProfesion() . "</p>";

	echo "</div>";
}
?>
</body>
</html>