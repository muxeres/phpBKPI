$(document).ready(function() {
  // Mostrar imagen al hacer clic en el botón
  $('#btn-mostrar-imagen').click(function() {
      mostrarImagen();
  });
});

function mostrarImagen() {
  var genero = document.querySelector('input[name="genero"]:checked').value;
  var ubicacion = document.querySelector('input[name="ubicacion"]:checked').value;

  // URL de la imagen según el género y ubicación seleccionados
  var imagenURL = obtenerImagenURL(genero, ubicacion);

  var imagenPerfilDiv = document.getElementById("imagen-oculta");
  imagenPerfilDiv.innerHTML = `<img src="${imagenURL}" class="img-fluid" alt="Imagen de perfil">`;
  imagenPerfilDiv.classList.remove('d-none');
}

function obtenerImagenURL(genero, ubicacion) {
  // Lógica para obtener la URL de la imagen según el género y ubicación seleccionados
  if (genero === 'hombre') {
      if (ubicacion === 'urbana') {
          return 'assets/hombre_urbano.jpg';
      } else {
          return 'assets/hombre_rural.jpg';
      }
  } else {
      if (ubicacion === 'urbana') {
          return 'assets/mujer_urbana.jpg';
      } else {
          return 'assets/mujer_rural.jpg';
      }
  }
}

$(document).ready(function() {
  // Apagar el footer al cargar la página
  $('.footer').fadeOut(0);

  // Encender el footer al hacer clic en él
  $('.footer').click(function() {
      $(this).fadeToggle();
  });
});
