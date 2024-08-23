<?php 
require_once(__DIR__ . '/app/repository/TipoRepository.php');

$tipoRepository = new TipoRepository();
$tipos = $tipoRepository->getAll();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de ejemplo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .blue-background {
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container text-center">
            <h1>Registro de Persona</h1>
        </div>
        <form action="app/controller/PersonaController.php" method="post" id="personaForm">
            <div>
                <label for="numero_cedula">Número de Cédula:</label><br>
                <input type="text" id="numero_cedula" name="numero_cedula" required>
            </div>
            <div>
                <label for="primer_nombre">Primer Nombre:</label><br>
                <input type="text" id="primer_nombre" name="primer_nombre" required>
            </div>
            <div>
                <label for="segundo_nombre">Segundo Nombre:</label><br>
                <input type="text" id="segundo_nombre" name="segundo_nombre">
            </div>
            <div>
                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div>
                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label><br>
                <input type="text" id="telefono" name="telefono" required>
            </div>
            <div>
                <label for="ciudad">Ciudad:</label><br>
                <input type="text" id="ciudad" name="ciudad" required>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="flex-grow-1 me-3 mt-4">
                    <select name="id_tipo">
                        <?php foreach ($tipos as $tipo) :  ?>
                        <option id="tipo" value="<?php echo $tipo->getId(); ?>">
                            <?php echo $tipo->getName(); ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="http://localhost/acme/paginainicio.php" class="btn btn-primary">Volver</a>
                    <div class="mb-2 blue-background text-center">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>