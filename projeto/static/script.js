
    $(document).ready(function() {
      // Mostrar imagen al hacer clic en el botón
      $('#btn-mostrar-imagen').click(function() {
        $('#imagen-oculta').toggleClass('d-none');
      });
    });
    function mostrarImagen() {
      var ciudad = document.getElementById("ciudad").value;
      var profesion = document.querySelector('input[name="profesion"]:checked').value;

      // URL de la imagen según la ciudad y profesión seleccionadas
      var imagenURL = obtenerImagenURL(ciudad, profesion);

   
      var imagenPerfilDiv = document.getElementById("imagenPerfil");
      imagenPerfilDiv.innerHTML = `<img src="${imagenURL}" class="img-fluid" alt="Imagen de perfil">`;
    }

    function obtenerImagenURL(ciudad, profesion) {
      // Lógica para obtener la URL de la imagen según la ciudad y profesión seleccionadas
      // Aquí podrías tener un objeto o una base de datos que relacione ciudades, profesiones y URLs de imágenes
      // Por ahora, retornaremos una imagen de ejemplo
      return `imagen-${ciudad}-${profesion}.jpg`; // Reemplaza con la lógica real
    }

    $(document).ready(function() {
      // Mostrar imagen al hacer clic en el botón
      $('#btn-mostrar-imagen').click(function() {
        $('#imagen-oculta').toggleClass('d-none');
      });
    });