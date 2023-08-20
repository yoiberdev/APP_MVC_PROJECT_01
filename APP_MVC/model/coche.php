<?php
class Coche
{
    var $marca;
    var $modelo;
    var $color;
    var $propietario;
    function __construct ($miMarca, $miModelo, $miColor, $miPropietario){
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
    }
    //Encapsulamiento : generar los set y los get (de los atributos de la clase )
    //set; colocar y poner
    //get; recuperar o obtener
    
    //Funciones o métodos
    function setMarca ($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){

    return $this->marca;

    }

    function setModelo ($miModelo){

    $this->modelo = $miModelo;

    }

    function getModelo(){

    return $this->modelo;

    }

    function setColor ($miColor){
    $this->color = $miColor;
    }

    function getColor (){

        return $this->color;

        }
    
    function setPropietario($miPropietario){

        $this->propietario = $miPropietario;

    }

    function getPropietario(){

        return $this->propietario;

    }

}