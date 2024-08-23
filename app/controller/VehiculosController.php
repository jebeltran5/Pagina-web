<?php 

require_once(__DIR__ . '/../repository/VehiculoRepository.php');
require_once(__DIR__ . '/../model/Vehiculo.php');

if(!isset($_POST['placa']) || empty($_POST['color'])){
    var_dump($_POST);
    header('Location: /acme/vehiculos.php');
    exit();
}


$data = $_POST;

$repository = new VehiculoRepository();
$response = $repository->save($data);

if($response){
    header('Location: /acme/vehiculos.php');
    exit();
} else {
    header('Location: /acme/vehiculos.php');
    exit();
}
