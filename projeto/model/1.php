
<?php require_once "cabecalho.php"; ?>

<section>
    <?php
    if (isset($_POST['boton'])) {
        require_once 'Perfil.php';
        $perfil = new Perfil();
        $nombre = $perfil->getNombre();
        $profesion = $perfil->getProfesion();
        $ubicacion = $perfil->getUbicacion();

        echo "<h2>Perfil</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Profesión: $profesion</p>";
        echo "<p>Ubicación: $ubicacion</p>";

        // Mostrar imagen según la ubicación seleccionada
        if ($ubicacion == 'urbana') {
            echo '<img src="imagen-urbana.jpg" alt="Imagen de perfil">';
        } elseif ($ubicacion == 'rural') {
            echo '<img src="imagen-rural.jpg" alt="Imagen de perfil">';
        } else {
            echo '<p>No se seleccionó una ubicación válida</p>';
        }
    }
    ?>
</section>
</body>
</html>