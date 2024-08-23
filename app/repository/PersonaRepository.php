<?php 

require_once(__DIR__ . '/../config/Connection.php');
require_once(__DIR__ . '/../model/Persona.php');

class PersonaRepository{

    protected $table = 'personas';

    protected $table_inner = 'personas_tipos';

    public function __construct(){

    }

    public function save(array $data):bool {
        $result = false;

        try{
            $db = Connection::connect();
            $stmt = $db->prepare("INSERT INTO $this->table (numero_cedula, primer_nombre, segundo_nombre, apellido, direccion, telefono, ciudad) values (:numero_cedula, :primer_nombre, :segundo_nombre, :apellido, :direccion, :telefono, :ciudad)");
            $stmt->bindValue(':numero_cedula', $data['numero_cedula']);
            $stmt->bindValue(':primer_nombre', $data['primer_nombre']);
            $stmt->bindValue(':segundo_nombre', $data['segundo_nombre']);
            $stmt->bindValue(':apellido', $data['apellido']);
            $stmt->bindValue(':direccion', $data['direccion']);
            $stmt->bindValue(':telefono', $data['telefono']);
            $stmt->bindValue(':ciudad', $data['ciudad']);
            $result = $stmt->execute();
            if($result){
                $stmt = $db->prepare("INSERT INTO $this->table_inner (id_persona, id_tipo) VALUES (:numero_cedula, :id_tipo)");
                $stmt->bindValue(':numero_cedula', $data['numero_cedula']);
                $stmt->bindValue(':id_tipo', $data['id_tipo']);
                $result = $stmt->execute();
            }
        

        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        return $result;
    }

    public function getAllOwner():array {
        $result = [];

        try{
            $db = Connection::connect();
            $stmt = $db->prepare("SELECT * FROM $this->table as p inner join $this->table_inner as pt on numero_cedula = id_persona where pt.id_tipo = 1");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, Persona::class);
            $result = $stmt->fetchAll();
        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        return $result;

    }

    public function getAllConduc():array {
        $result = [];

        try{
            $db = Connection::connect();
            $stmt = $db->prepare("SELECT * FROM $this->table as p inner join $this->table_inner as pt on numero_cedula = id_persona where pt.id_tipo = 2");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, Persona::class);
            $result = $stmt->fetchAll();
        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        return $result;

    }

}