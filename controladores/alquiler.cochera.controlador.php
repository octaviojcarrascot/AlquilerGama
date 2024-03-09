<?php

class ControladorAlquilerCocheras{

    static public function ctrMostrarAlquilerCocheras(){

        $respuesta = ModeloAlquilerCocheras::mdlMostrarAlquilerCocheras();

        return $respuesta;

    }
    static public function ctrRegistrarAlquilerCocheras($numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto){

        $respuesta = ModeloAlquilerCocheras::mdlRegistrarAlquilerCocheras($numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto);
    
        return $respuesta;
    }
    static public function ctrActualizarAlquilerCocheras($idalquiler,$numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto){

        $respuesta = ModeloAlquilerCocheras::mdlActualizarAlquilerCocheras($idalquiler,$numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto);
        
        return $respuesta;
    
    }

}
?>