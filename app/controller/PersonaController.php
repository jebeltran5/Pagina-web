<?php 

require_once(__DIR__ . '/../repository/PersonaRepository.php');
require_once(__DIR__ . '/../model/Persona.php');

if(!isset($_POST['numero_cedula']) || empty($_POST['numero_cedula'])){
    var_dump($_POST);
    header('Location: /acme/index.php');
    exit();
}


$data = $_POST;

$repository = new PersonaRepository();
$response = $repository->save($data);

if($response){
    header('Location: /acme/index.php');
    exit();
} else {
    header('Location: /acme/index.php');
    exit();
}

