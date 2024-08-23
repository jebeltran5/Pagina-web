<?php
require_once(__DIR__ . '/app/repository/PersonaRepository.php');

$repository = new PersonaRepository();
$personas = $repository->getAllOwner();

$conductores = $repository->getAllConduc();


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
        .button-link {
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container text-center">
            <h1>Registro de Vehiculo</h1>
        </div>
        <div class="">
            <form action="app/controller/VehiculosController.php" method="post" id="vehiculoForm">
                <div>
                    <label for="placa">Número de placa:</label>
                </div>
                <div>
                    <input type="text" id="placa" name="placa" required>
                </div>
                <div>
                    <label for="color">Color del Vehiculo:</label>
                </div>
                <div>
                    <input type="text" id="color" name="color" required>
                </div>
                <div>
                    <label for="marca">marca del vehiculo</label>
                </div>
                <div>
                    <input type="text" id="marca" name="marca">
                </div>
                <div>
                    <label for="tipo_vehiculo">tipo vehiculo:</label>
                </div>
                <div>
                    <input type="text" id="tipo_vehiculo" name="tipo_vehiculo" required>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 me-3 mt-4">
                        <label for="id_conductor">id_conductor:</label>
                        <select name="id_conductor">
                            <?php foreach ($conductores as $persona) :  ?>
                            <option id="id_conductor" value="<?php echo $persona->getNumerocedula(); ?>">
                                <?php echo $persona->getPrimernombre(); ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <label for="id_propietario">id_propietario:</label>
                        <select name="id_propietario">
                            <?php foreach ($personas as $persona) :  ?>
                            <option id="id_propietario" value="<?php echo $persona->getNumerocedula(); ?>">
                                <?php echo $persona->getPrimernombre(); ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div>
            <div class="button-link">
                <input type="submit" value="Registrar">
            </div>
            <div class="text-center mt-4">
                <a href="http://localhost/acme/paginainicio.php" class="btn btn-secondary">Devolver</a>
            </div>
        </div>
    </div>
</body>

</html>