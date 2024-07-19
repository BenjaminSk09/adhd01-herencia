<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h1>Personas</h1>
                <form action="../objetos/objeto_persona.php" method="get">
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su nombre">
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido</label>
                            <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                                placeholder="Ingrese su apellido">
                        </div>

                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Telefono</label>
                            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control"
                                placeholder="Ingrese su Numero telefonico">
                        </div>
                        
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Direccion</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                                placeholder="Ingrese su Direccion">
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Enviar" class="form-control btn btn-primary" name="btnEnviar">
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>