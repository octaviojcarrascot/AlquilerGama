<?php

require_once "conexion.php";

class ModeloInfraccion{

    static public function mdlMostrarInfraccion(){

        $stmt = conexion::conectar()->prepare("SELECT idinfraccion,fechainfraccion,hora,vehiculo,dominio,nombrep,apellidop,torre,piso,dpto,responsable, 'X' as acciones FROM infraccion");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt = null;
    }
 /*
    static public function mdlRegistrarPropietarios($nombrep,$apellidop,$torre,$piso,$dpto){

        $stmt = Conexion::conectar()->prepare("INSERT INTO propietario (nombrep,apellidop,torre,piso,dpto) VALUES (:nombre_propietario,:apellidop,:torre,:piso,;dpto)");

        $stmt -> bindParam(":nombre_propietario",$nombrep, PDO::PARAM_STR);
        $stmt -> bindParam(":identificacion",$apellidop, PDO::PARAM_STR);
        $stmt -> bindParam(":nombre_propietario",$torre, PDO::PARAM_STR);
        $stmt -> bindParam(":identificacion",$piso, PDO::PARAM_STR);
        $stmt -> bindParam(":nombre_propietario",$dpto, PDO::PARAM_STR);
        

        if($stmt -> execute()){
            return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
        }else{
            return "ERROR, AL REGISTRAR EL REGISTRO?..."; 
        }
        $stmt = null;
    }

    static public function mdlEliminarPropietarios($id_propietario){

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
        $stmt -> bindParam(":apellidopn",$apellidop, PDO:: PARAM_STR);
        $stmt -> bindParam(":torre",$torre, PDO:: PARAM_STR);
        $stmt -> bindParam(":ipiso",$piso, PDO:: PARAM_STR);
        $stmt -> bindParam(":idpto",$dpto, PDO:: PARAM_STR);
        
        if($stmt -> execute()){
            return "EL REGISTRO DE ACTUALIZÓ CORRECTAMENTE?...";
        }else{
            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";
        }
    }
    */
}




?>