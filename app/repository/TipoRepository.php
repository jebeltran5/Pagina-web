<?php 

require_once(__DIR__ . '/../model/Tipo.php');
require_once(__DIR__ . '/../config/Connection.php');

class TipoRepository{

    protected $table = 'tipos';

    public function __construct(){

    }

    public function getAll():array{
        $result = [];

        try{
            $db = Connection::connect();
            $stmt = $db->prepare("SELECT * FROM $this->table");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, Tipo::class);
            $result = $stmt->fetchAll();
        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        return $result;
    }

}