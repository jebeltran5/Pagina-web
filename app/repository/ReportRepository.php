<?php
require_once(__DIR__ . '/../config/Connection.php');
require_once(__DIR__ . '/../repository/VehiculoRepository.php');
require_once(__DIR__ . '/../repository/PersonaRepository.php');

class ReportRepository {
     
    public function getAllVehicleDetails():  array{
        $result = [];

        try{
            $db = Connection::connect();
            $stmt = $db->prepare("
                SELECT v.placa, v.marca, v.color, 
                       c.primer_nombre AS conductor_nombre, 
                       p.primer_nombre AS propietario_nombre
                FROM vehiculos AS v
                INNER JOIN personas AS c ON v.id_conductor = c.numero_cedula
                INNER JOIN personas AS p ON v.id_propietario = p.numero_cedula
            ");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOExeption $e){
            echo $e->getMessage();
            exit();
        }

        return $result;
    }

}
