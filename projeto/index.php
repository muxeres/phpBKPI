<?php require_once "cabecalho.php" ?>

<section>
		<div class="p-5 bg-primary text-white text-center">
		  <h1>Projeto de Modulo I</h1>
		  <p>Vamos mostrar o aprendizado!</p> 
		</div>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <div class="container-fluid">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link active" href="home.php" target="janela">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="laranjas.php" target="janela">Laranjas</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="media.php" target="janela">Media Notas</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link " href="calculapago.php" target="janela">Pago Liquido</a>
		      </li>
		    </ul>
		  </div>
		</nav>
</section>
		<div class="container mt-5" >

		</div>
</body>
</html>



<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi Sitio</a>
    </div>
  </nav>

  <!-- Contenido principal -->
  <main class="container">
    <!-- Sección de perfil -->
    <section class="profile-section">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Perfil</h2>
              <form action="perfil.php" method="post">
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
                    <input class="form-check-input" type="radio" name="ubicacion" id="radio-urbana" value="urbana" checked>
                    <label class="form-check-label" for="radio-urbana">
                      Urbana
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ubicacion" id="radio-rural" value="rural">
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


  
  </main>

</body>
</html>