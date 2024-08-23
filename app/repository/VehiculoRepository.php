<?php 

require_once(__DIR__ . '/../config/Connection.php');

class VehiculoRepository{

    protected $table = 'vehiculos';

    public function __construct(){

    }

    public function save(array $data):bool {
        $result = false;

        var_dump($data);
        try{
            $db = Connection::connect();
            $stmt = $db->prepare("INSERT INTO $this->table (placa, color, marca, tipo_vehiculo, id_conductor, id_propietario) values (:placa, :color, :marca, :tipo_vehiculo, :id_conductor, :id_propietario)");
            $stmt->bindValue(':placa', $data['placa']);
            $stmt->bindValue(':color', $data['color']);
            $stmt->bindValue(':marca', $data['marca']);
            $stmt->bindValue(':tipo_vehiculo', $data['tipo_vehiculo']);
            $stmt->bindValue(':id_conductor', $data['id_conductor']);
            $stmt->bindValue(':id_propietario', $data['id_propietario']);
            $result = $stmt->execute();
        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        return $result;
    }

}