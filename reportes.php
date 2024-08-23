<?php
require_once(__DIR__ . '/app/repository/ReportRepository.php');

$reportRepository = new ReportRepository();
$vehicles = $reportRepository->getAllVehicleDetails();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Vehículos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Informe de Vehículos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Nombre del Conductor</th>
                    <th>Nombre del Propietario</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicles as $vehicle): ?>
                <tr>
                    <td><?php echo htmlspecialchars($vehicle['placa']); ?></td>
                    <td><?php echo htmlspecialchars($vehicle['marca']); ?></td>
                    <td><?php echo htmlspecialchars($vehicle['color']); ?></td>
                    <td><?php echo htmlspecialchars($vehicle['conductor_nombre']); ?></td>
                    <td><?php echo htmlspecialchars($vehicle['propietario_nombre']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="http://localhost/acme/paginainicio.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>