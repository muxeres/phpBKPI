<?php require_once "cabecalho.php"; ?>

<section>
    <form action="perfil.php" method="POST">
        <h1>Perfil</h1>
        <p>Digite su nombre: <input type="text" name="nombre" size="40" required></p>
        <p>Elija su profesión: <br/>
            <input type="radio" name="profesion" value="desenvolvedor" required> Desenvolvedor
            <input type="radio" name="profesion" value="designer" required> Designer
            <input type="radio" name="profesion" value="marketing" required> Marketing
        </p>
        <p>Seleccione su ubicación: <br/>
            <input type="radio" name="ubicacion" value="urbana" required> Urbana
            <input type="radio" name="ubicacion" value="rural" required> Rural
        </p>
        <p><input type="submit" name="boton" value="Elegir"></p>
    </form>
</section>



<section>
    <?php
    if (isset($_POST['boton'])) {
        require_once 'model/Perfil.php';
        $perfil = new Perfil();
        $nombre = $perfil->getNombre();
        $profesion = $perfil->getProfesion();
        $ubicacion = $perfil->getUbicacion();

        echo "<h2>Perfil</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Profiss]ao: $profesion</p>";
        echo "<p>Ubicação: $ubicacion</p>";

    }
        echo "<p class='".$profesion->getUbicacion()."'>";
        echo  $ubicacion ->getProfesion($profesion->mostrarImagen());
        echo $profesion->$profesion->getProfesion($profesion->imagProfesion());
        echo "</p";



    ?>
</section>
</body>
</html>