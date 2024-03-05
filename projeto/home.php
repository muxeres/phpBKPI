<?php require_once "cabecalho.php" ?>


<section>
		<div class="p-5 bg-primary text-white text-center">
		  <h1>Projeto de Modulo I</h1>
		  <p>Vamos mostrar o aprendizado!</p> 
		</div>

		    <!-- Imagen oculta -->
    <iframe  id="imagen-oculta" class="mt-4 d-none" tarjet= janela>
      <img src="assets/amy.jpg" alt="Imagen de perfil" class="img-fluid">
    <!-- Bootstrap Bundle JS (Popper.js incluido) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Script personalizado -->
    <script>
      $(document).ready(function() {
        // Mostrar imagen al hacer clic en el botón
        $('#btn-mostrar-imagen').click(function() {
          $('#imagen-oculta').toggleClass('d-none');
        });
      });
        </script>


   </iframe>
</section>