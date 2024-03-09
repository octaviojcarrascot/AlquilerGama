<?php

require_once "conexion.php";

class ModeloVistacochera{

    static public function mdlMostrarVistacochera(){

       $stmt = conexion::conectar()->prepare("SELECT idcochera,numero,piso,estatus, 'X' as acciones FROM cochera");
//$stmt = conexion::conectar()->prepare("SELECT cochera.idcochera, alquilercocheragama.numerocochera, alquilercocheragama.tiempo,alquilercocheragama.fechaingreso, alquilercocheragama.horaingreso, alquilercocheragama.fechaegreso, alquilercocheragama.horaegreso, 'X' as acciones FROM cochera  INNER JOIN alquilercocheragama ON alquilercocheragama.numerocochera = cochera.numero WHERE alquilercocheragama.estatus = 'OCUPADA'");
//$stmt = conexion::conectar()->prepare("SELECT cochera.numero,alquilercocheragama.numerocochera, alquilercocheragama.tiempo, alquilercocheragama.fechaingreso, alquilercocheragama.horaingreso, alquilercocheragama.fechaegreso, alquilercocheragama.horaegreso,cochera.estatus, 'X' as acciones FROM alquilercocheragama RIGHT JOIN cochera ON alquilercocheragama.numerocochera = cochera.numero");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }
    
  

     static public function mdlMostrarCargarcochera(){

        $stmt = conexion::conectar()->prepare("SELECT numero,estatu, 'X' as acciones FROM cochera");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }
    

    static public function mdlRegistrarVistacochera($numero,$piso,$estatus){

        $stmt = Conexion::conectar()->prepare("INSERT INTO cochera (numero,piso,estatus) VALUES (:numero,:piso,:estatus)");

        $stmt -> bindParam(":numero",$numero, PDO::PARAM_STR);
        $stmt -> bindParam(":piso",$piso, PDO::PARAM_STR);
        $stmt -> bindParam(":estatus",$estatus, PDO::PARAM_STR);
        

        if($stmt -> execute()){
            return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
        }else{
            return "ERROR, AL REGISTRAR EL REGISTRO?..."; 
        }
        $stmt = null;
    }

    static public function mdlEliminarVistacochera($idcochera){

        $stmt = Conexion::conectar()->prepare("DELETE FROM cochera WHERE idcochera = :idcochera");

        $stmt -> bindParam(":idcochera", $idcochera, PDO::PARAM_INT);

        if($stmt -> execute()){
            return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";

        }
        $stmt = null;
    }

    static public function mdlActualizarVistacochera($idcochera,$numero,$piso,$estatus){

        $stmt = Conexion::conectar()->prepare("UPDATE cochera 
                                                SET numero = :numero,
                                                    piso =:piso,
                                                    estatus = :estatus
                                                    
                                                WHERE idcochera = :idcochera");
        $stmt -> bindParam(":idcochera",$idcochera, PDO::PARAM_INT);
        $stmt -> bindParam(":numero",$numero, PDO:: PARAM_STR);
        $stmt -> bindParam(":piso",$piso, PDO:: PARAM_STR);
        $stmt -> bindParam(":estatus",$estatus, PDO:: PARAM_STR);
        
        
        if($stmt -> execute()){
            return "EL REGISTRO DE ACTUALIZÓ CORRECTAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";
        }
    }
}




?>