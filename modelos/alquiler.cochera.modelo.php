<?php

require_once "conexion.php";

class ModeloAlquilerCocheras{

    static public function mdlMostrarAlquilerCocheras(){

        //$stmt = conexion::conectar()->prepare("SELECT idalquiler,numerocochera,tiempo,fechaingreso,horaingreso,fechaegreso,horaegreso,vehiculo,dominio,estatus, 'X' as acciones FROM alquilercocheragama");
        $stmt = conexion::conectar()->prepare("SELECT idalquiler,numerocochera,tiempo,fechaingreso,horaingreso,fechaegreso,horaegreso,vehiculo,dominio,estatus,nombrep,apellidop,torre,piso,dpto, 'X' as acciones FROM alquilercocheragama WHERE estatus = 'ocupada'");
        
        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    
    }

    static public function mdlRegistrarAlquilerCocheras($numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto){

        $stmt = Conexion::conectar()->prepare("INSERT INTO alquilercocheragama (numerocochera,nombrep,apellidop,tiempo,fechaingreso,horaingreso,fechaegreso,horaegreso,vehiculo,dominio,estatus,torre,piso,dpto) VALUE (:numerocochera,:nombrep,:apellidop,:tiempo,:fechaingreso,:horaingreso,:fechaegreso,:horaegreso,:vehiculo,:dominio,:estatus,:torre,:piso,:dpto)");
    
        $stmt -> bindparam(":numerocochera",$numerocochera, PDO::PARAM_STR);
        $stmt -> bindparam(":nombrep",$nombrep, PDO::PARAM_STR);
        $stmt -> bindparam(":apellidop",$apellidop, PDO::PARAM_STR);
        $stmt -> bindparam(":tiempo",$tiempo, PDO::PARAM_STR);
        $stmt -> bindparam(":fechaingreso",$fechaingreso, PDO::PARAM_STR);
        $stmt -> bindparam(":horaingreso",$horaingreso, PDO::PARAM_STR);
        $stmt -> bindparam(":fechaegreso",$fechaegreso, PDO::PARAM_STR);
        $stmt -> bindparam(":horaegreso",$horaegreso, PDO::PARAM_STR);
        $stmt -> bindparam(":vehiculo",$vehiculo, PDO::PARAM_STR);
        $stmt -> bindparam(":dominio",$dominio, PDO::PARAM_STR);
        $stmt -> bindparam(":estatus",$estatus, PDO::PARAM_STR);
        $stmt -> bindparam(":torre",$torre, PDO::PARAM_STR);
        $stmt -> bindparam(":piso",$piso, PDO::PARAM_STR);
        $stmt -> bindparam(":dpto",$dpto, PDO::PARAM_STR);

         if($stmt -> execute()){
                return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
            }else{
                return "ERROR, AL REGISTRAR EL REGISTRO?...";
            }
            $stmt = null;

    }

    static public function mdlActualizarAlquilerCocheras($idalquiler,$numerocochera,$nombrep,$apellidop,$tiempo,$fechaingreso,$horaingreso,$fechaegreso,$horaegreso,$vehiculo,$dominio,$estatus,$torre,$piso,$dpto){

            $stmt = Conexion::conectar()->prepare("UPDATE alquilercocheragama
                                                    SET numerocochera = :numerocochera,
                                                        nombrep = :nombrep,
                                                        apellidop = :apellidop,
                                                        tiempo = :tiempo,
                                                        fechaingreso = :fechaingreso,
                                                        horaingreso = :horaingreso,
                                                        fechaegreso = :fechaegreso,
                                                        horaegreso = :horaegreso,
                                                        vehiculo = :vehiculo,
                                                        dominio = :dominio,
                                                        estatus = :estatus,
                                                        torre = :torre,
                                                        piso = :piso,
                                                        dpto = :dpto
                                                    WHERE idalquiler = :idalquiler");

            $stmt -> bindParam(":idalquiler",$idalquiler, PDO::PARAM_INT);
            $stmt -> bindparam(":numerocochera",$numerocochera, PDO::PARAM_STR);
            $stmt -> bindparam(":nombrep",$nombrep, PDO::PARAM_STR);
            $stmt -> bindparam(":apellidop",$apellidop, PDO::PARAM_STR);
            $stmt -> bindparam(":tiempo",$tiempo, PDO::PARAM_STR);
            $stmt -> bindparam(":fechaingreso",$fechaingreso, PDO::PARAM_STR);
            $stmt -> bindparam(":horaingreso",$horaingreso, PDO::PARAM_STR);
            $stmt -> bindparam(":fechaegreso",$fechaegreso, PDO::PARAM_STR);
            $stmt -> bindparam(":horaegreso",$horaegreso, PDO::PARAM_STR);
            $stmt -> bindparam(":vehiculo",$vehiculo, PDO::PARAM_STR);
            $stmt -> bindparam(":dominio",$dominio, PDO::PARAM_STR);
            $stmt -> bindparam(":estatus",$estatus, PDO::PARAM_STR);
            $stmt -> bindparam(":torre",$torre, PDO::PARAM_STR);
            $stmt -> bindparam(":piso",$piso, PDO::PARAM_STR);
            $stmt -> bindparam(":dpto",$dpto, PDO::PARAM_STR);

            if($stmt -> execute()){
                    return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
                }else{
                    return "ERROR, AL REGISTRAR EL REGISTRO?...";
                }         
    }
}