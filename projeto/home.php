<?php require_once "cabecalho.php" ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Selecciona tu género y ubicación</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form id="perfil-form">
                        <div class="mb-3">
                            <label class="form-label">Género:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="radio-hombre" value="hombre" checked>
                                <label class="form-check-label" for="radio-hombre">
                                    Hombre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="radio-mujer" value="mujer">
                                <label class="form-check-label" for="radio-mujer">
                                    Mujer
                                </label>
                            </div>
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
                        <button type="button" class="btn btn-primary" id="btn-mostrar-imagen">Mostrar Imagen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <iframe id="imagen-oculta" class="mt-4 d-none" name="janela"></iframe>

    </div>
</div>

</body>
</html>