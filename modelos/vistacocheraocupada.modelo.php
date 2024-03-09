<?php

require_once "conexion.php";

class ModeloVistacocheraocupada{

    static public function mdlMostrarVistacocheraocupada(){

        //$stmt = conexion::conectar()->prepare("SELECT alquiler, 'X' as acciones FROM cochera");
        //$stmt = conexion::conectar()->prepare("SELECT cochera.numero,alquilercocheragama.numerocochera, alquilercocheragama.tiempo, alquilercocheragama.fechaingreso, alquilercocheragama.horaingreso, alquilercocheragama.fechaegreso, alquilercocheragama.horaegreso,cochera.estatus, 'X' as acciones FROM cochera  INNER JOIN alquilercocheragama ON alquilercocheragama.numerocochera = cochera.numero");
        $stmt = conexion::conectar()->prepare("SELECT cochera.numero,alquilercocheragama.numerocochera, alquilercocheragama.tiempo, alquilercocheragama.fechaingreso, alquilercocheragama.horaingreso, alquilercocheragama.fechaegreso, alquilercocheragama.horaegreso,cochera.estatus, 'X' as acciones FROM alquilercocheragama RIGHT JOIN cochera ON alquilercocheragama.numerocochera = cochera.numero");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }
}