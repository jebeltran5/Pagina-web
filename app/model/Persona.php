<?php

class Persona{

    protected $id_persona;
    protected $id_tipo;
    protected $numero_cedula;
    protected $primer_nombre;
    protected $segundo_nombre;
    protected $apellido;
    protected $direccion;
    protected $telefono;
    protected $ciudad;

    public function __construct(){

    }

    public function getNumerocedula(){
        return $this->numero_cedula;
    }

    public function getPrimernombre(){
        return $this->primer_nombre;
    }

    public function setNumerocedula($numerocedula){
        $this->id = $numerocedula;
    }
    
    public function setPrimernombre($primernombre){
        $this->name = $primernombre;
    }

    public function getSegundonombre(){
        return $this->segundonombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->id = $apellido;
    }
    
    public function setSegundonombre($segundonombre){
        $this->name = $segundonombre;
    }

    public function getDireccion(){
        return $this -> $direccion;
    }

    public function setDireccion($direccion){
          $this -> $direccion;
    }
    
    public function getTelefono(){
        return $this -> $telefono;
    }

    public function setTelefono($telefono){
          $this -> $telefono;
    }

    public function getCiudad(){
        return $this -> $ciudad;
    }

    public function setCiudad($ciudad){
          $this -> $ciudad;
    }
}