<?php require_once "cabecalho.php" ?>

<div class="container mt-5">
    <h1>Calcula Pago</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalles del Perfil</h5>
            <form action="calculapago.php" method="post">
                <div class="mb-3">
                    <label for="input-profesion" class="form-label">Profesión:</label>
                    <input type="text" class="form-control" id="input-profesion" value="<?php echo $perfil->getProfesion(); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="input-ubicacion" class="form-label">Ubicación:</label>
                    <input type="text" class="form-control" id="input-ubicacion" value="<?php echo $perfil->getUbicacion(); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="input-nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="input-nombre" value="<?php echo $perfil->getNome(); ?>" disabled>
                </div>
                <input type="hidden" name="sector" id="input-sector" value="<?php echo $perfil->getSector(); ?>">
                <div class="mb-3">
                    <label for="input-area" class="form-label">Área:</label>
                    <input type="text" class="form-control" id="input-area" value="<?php echo $perfil->getArea(); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="input-horas" class="form-label">Horas trabajadas:</label>
                    <input type="text" class="form-control" id="input-horas" name="horas" value="<?php echo $perfil->getHoras(); ?>" >
                </div>
                <div class="mb-3">
                    <label for="input-costo" class="form-label">Costo por hora:</label>
                    <input type="text" class="form-control" id="input-costo" name="costo" value="<?php echo $perfil->getCosto(); ?>" >
                </div>
                <h5 class="card-title">Pago Total</h5>
                <p class="card-text">
                    El pago total es: $<?php echo $perfil->calcularPago(); ?>
                </p>
                <button type="submit" class="btn btn-primary" name="submit">Calcular Pago</button>
            </form>
        </div>
    </div>
</div>
   
    <?php
<?php
        require_once 'model/Calculapago.php';

        if (isset($_POST['submit'])) {
            $profesion = $_POST['profesion'];
            $ubicacion = $_POST['ubicacion'];
            $nombre = $_POST['nombre'];
            $sector = $_POST['sector']; 
            $area = $_POST['area'];
            $horas = $_POST['horas'];
            $costo = $_POST['costo'];

            $perfil = new CalculaPago($profesion, $ubicacion, $nombre, $sector, $area, $horas, $costo);

            echo "Profesión: " . $perfil->getProfesion() . "<br>";
            echo "Ubicación: " . $perfil->getUbicacion() . "<br>";
            echo "Nombre: " . $perfil->getNome() . "<br>";
            echo "Área: " . $perfil->getArea() . "<br>";
            echo "Sector: " . $perfil->getSector() . "<br>";
            echo "Horas trabajadas: " . $perfil->getHoras() . "<br>";
            echo "Costo por hora: $" . $perfil->getCosto() . "<br>";
            echo "Pago total: $" . $perfil->calcularPago();
        }
        ?>
</body>
</html>

