<?php require_once "cabecalho.php"; ?>
<section class="profile-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Perfil</h2>
                        <form action="perfil.php" method="post">
                            <div class="mb-3">
                                <label for="input-nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="input-nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="select-profesion" class="form-label">Profesión:</label>
                                <select class="form-select" id="select-profesion" name="profesion">
                                    <option value="1">Desarrollador</option>
                                    <option value="2">Diseñador</option>
                                    <option value="3">Marketing</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ubicación:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ubicacion" id="radio-urbana"
                                        value="urbana" checked>
                                    <label class="form-check-label" for="radio-urbana">
                                        Urbana
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ubicacion" id="radio-rural"
                                        value="rural">
                                    <label class="form-check-label" for="radio-rural">
                                        Rural
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn-mostrar-imagen">Mostrar Imagen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST['boton'])) {
        require_once 'model/Perfil.php';

        $nombre = $_POST['nombre'];
        $profesion = $_POST['profesion'];
        $ubicacion = $_POST['ubicacion'];

        $perfil = new Perfil($profesion, $ubicacion);

        echo "<h2>Perfil</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Profesión: $profesion</p>";
        echo "<p>Ubicación: $ubicacion</p>";

        echo "<img src='".$perfil->mostrarImagen()."'>"; 
        echo "<img src='".$perfil->imagProfesion()."'>"; 
    }
    ?>
</section>
</body>
</html>