<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main class="container">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Bienvenido</h2>
            <form action="bienvenida.php" method="post">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
              <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>



//////////////////////////////////////////////


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main class="container">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <?php
              // Obtener datos del formulario
              $nombre = $_POST['nombre'];
              $edad = $_POST['edad'];

              // Mostrar mensaje de bienvenida
              echo "<h2 class='card-title'>Bienvenido, $nombre</h2>";
              echo "<p>Tienes $edad años.</p>";

              // Calcular el doble de la edad
              $dobleEdad = $edad * 2;
              echo "<p>El doble de tu edad es $dobleEdad.</p>";
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>

////////////////////////////////////////

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi perfil</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    /* Estilos personalizados aquí */
    .perfil {
      background-image: url('imagen-perfil.jpg'); /* Reemplaza 'imagen-perfil.jpg' con la URL de tu imagen de fondo */
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <!-- Contenido principal -->
  <main class="container">
    <!-- Página de perfil -->
    <section class="perfil">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Mi perfil</h2>
              <form id="perfilForm">
                <div class="mb-3">
                  <label for="ciudad" class="form-label">Ciudad:</label>
                  <select class="form-select" id="ciudad" name="ciudad">
                    <option value="nueva_york">Nueva York</option>
                    <option value="paris">París</option>
                    <option value="tokio">Tokio</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="profesion" class="form-label">Profesión:</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="profesion" id="programador" value="programador">
                      <label class="form-check-label" for="programador">Programador</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="profesion" id="doctor" value="doctor">
                      <label class="form-check-label" for="doctor">Doctor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="profesion" id="ingeniero" value="ingeniero">
                      <label class="form-check-label" for="ingeniero">Ingeniero</label>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="mostrarImagen()">Mostrar imagen</button>
              </form>
              <div id="imagenPerfil" class="mt-3">
                <!-- Aquí se mostrará la imagen seleccionada -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Bootstrap Bundle JS (Popper.js incluido) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <!-- Script personalizado para mostrar imagen -->
  <script>
    function mostrarImagen() {
      var ciudad = document.getElementById("ciudad").value;
      var profesion = document.querySelector('input[name="profesion"]:checked').value;

      // URL de la imagen según la ciudad y profesión seleccionadas
      var imagenURL = obtenerImagenURL(ciudad, profesion);

      // Mostrar la imagen en el div correspondiente
      var imagenPerfilDiv = document.getElementById("imagenPerfil");
      imagenPerfilDiv.innerHTML = `<img src="${imagenURL}" class="img-fluid" alt="Imagen de perfil">`;
    }

    function obtenerImagenURL(ciudad, profesion) {
      // Lógica para obtener la URL de la imagen según la ciudad y profesión seleccionadas
      // Aquí podrías tener un objeto o una base de datos que relacione ciudades, profesiones y URLs de imágenes
      // Por ahora, retornaremos una imagen de ejemplo
      return `imagen-${ciudad}-${profesion}.jpg`; // Reemplaza con la lógica real
    }
  </script>
</body>
</html>
////////////////////////////////////////////////////
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi sitio con Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    /* Estilos personalizados aquí */
    .profile-section {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  


php class


////////////////////////////


///////////////////////////////////////////



/////////////////////////////////////////////////

