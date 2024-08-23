<?php

class Persona{

    protected $placa;
    protected $color;
    protected $marca;
    protected $tipovehiculo;
    protected $idconductor;
    protected $idpropietario;

    public function __construct(){

    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getColor(){
        return $this->color;
    }

    public function setPlaca($placa){
        $this->id = $placa;
    }
    
    public function setColor($color){
        $this->name = $color;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getTipovehiculo(){
        return $this->tipovehiculo;
    }

    public function setMarca($marca){
        $this->id = $marca;
    }
    
    public function setTipovehiculo($tipovehiculo){
        $this->name = $tipovehiculo;
    }

    public function getIdconductor(){
        return $this -> $idconductor;
    }

    public function setIdconductor($idconductor){
          $this -> $direccion;
    }
    
    public function getIdpropietario(){
        return $this -> idpropietario;
    }

    public function setIdpropietario($idpropietario){
          $this -> $idpropietario;
    }

}