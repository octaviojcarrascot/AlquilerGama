<?php

require_once "conexion.php";

class ModeloPropietarios{

    static public function mdlMostrarpropietarios(){

        $stmt = conexion::conectar()->prepare("SELECT idpropietario,nombrep,apellidop,torre,piso,dpto, 'X' as acciones FROM propietario");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarPropietarios($nombrep,$apellidop,$torre,$piso,$dpto){

        $stmt = Conexion::conectar()->prepare("INSERT INTO propietario (nombrep,apellidop,torre,piso,dpto)VALUES(:nombrep,:apellidop,:torre,:piso,:dpto)");

        $stmt -> bindParam(":nombrep",$nombrep, PDO::PARAM_STR);
        $stmt -> bindParam(":apellidop",$apellidop, PDO::PARAM_STR);
        $stmt -> bindParam(":torre",$torre, PDO::PARAM_STR);
        $stmt -> bindParam(":piso",$piso, PDO::PARAM_STR);
        $stmt -> bindParam(":dpto",$dpto, PDO::PARAM_STR);
        

        if($stmt -> execute()){
            return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
        }else{
            return "ERROR, AL REGISTRAR EL REGISTRO?..."; 
        }
        $stmt = null;
    }

    static public function mdlEliminarPropietarios($idpropietario){

        $stmt = Conexion::conectar()->prepare("DELETE FROM propietario WHERE idpropietario = :idpropietario");

        $stmt -> bindParam(":idpropietario", $idpropietario, PDO::PARAM_INT);

        if($stmt -> execute()){
            return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";

        }
        $stmt = null;
    }

    static public function mdlActualizarPropietarios($idpropietario,$nombrep,$apellidop,$torre,$piso,$dpto){

        $stmt = Conexion::conectar()->prepare("UPDATE propietario 
                                                SET nombrep = :nombrep,
                                                    apellidop =:apellidop,
                                                    torre = :torre,
                                                    piso =:piso,
                                                    dpto =:dpto
                                                WHERE idpropietario = :idpropietario");
        $stmt -> bindParam(":idpropietario",$idpropietario, PDO::PARAM_INT);
        $stmt -> bindParam(":nombrep",$nombrep, PDO:: PARAM_STR);
        $stmt -> bindParam(":apellidop",$apellidop, PDO:: PARAM_STR);
        $stmt -> bindParam(":torre",$torre, PDO:: PARAM_STR);
        $stmt -> bindParam(":piso",$piso, PDO:: PARAM_STR);
        $stmt -> bindParam(":dpto",$dpto, PDO:: PARAM_STR);
        
        if($stmt -> execute()){
            return "EL REGISTRO DE ACTUALIZÓ CORRECTAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";
        }
    }
}




?>