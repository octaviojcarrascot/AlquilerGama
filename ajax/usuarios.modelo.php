<?php

    require_once "conexion.php";

    class MOdeloUsuarios{

        static public function mdlMostrarUsuarios(){

            $stmt = conexion::conectar()->prepare("SELECT idusuario,nombreu,apellidou,usuario,clave,estatus,rol, 'X' as acciones FROM usuario");

            $stmt -> execute();

            return $stmt -> fetchAll();

            $stmt = null;
        }
        static public function mdlRegistrarUsuarios($nombreu,$apellidou,$usuario,$clave,$estatus,$rol){

            $stmt = Conexion::conectar()->prepare("INSERT INTO usuario (nombreu,apellidou,usuario,clave,estatus,rol)VALUES(:nombreu,:apellidou,:usuario,:clave,:estatus,:rol)");

            $stmt -> bindparam(":nombreu",$nombreu, PDO::PARAM_STR);
            $stmt -> bindParam("apellidou",$apellidou,PDO::PARAM_STR);
            $stmt -> bindParam("usuario",$usuario,PDO::PARAM_STR);
            $stmt -> bindParam("clave",$clave,PDO::PARAM_STR);
            $stmt -> bindParam("estatus",$estatus,PDO::PARAM_STR);
            $stmt -> bindParam("rol",$rol,PDO::PARAM_STR);

            if($stmt -> execute()){
                return "EL REGISTRO SE AGREGO CORRECTAMENTE?...";
            }else{
                return "ERROR, AL REGISTRAR EL REGISTRO?...";
            }
            $stmt = null;

        }
        static public function mdlEliminarUsuarios($idusuario){

            $stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE idusuario = :idusuario");

            $stmt ->bindParam(":idusuario",$idusuario, PDO::PARAM_INT);

            if($stmt -> execute()){
                return "EL REGISTRO SE ELIMINAR CORRECAMENTE?...";
            }else{
                return "ERROR, NO SE PUDO ELIMINAR EL REGISTRO?...";  
            }
            $stmt = null;
        }
        static public function mdlActualizarUsuarios($idusuario,$nombreu,$apellidou,$usuario,$clave,$estatus,$rol){

            $stmt = Conexion::conectar()->prepare("UPDATE usuario
                                                   SET nombreu = :nombreu,
                                                       apellidou = :apellidou,
                                                       usuario = :usuario,
                                                       clave = :clave,
                                                       estatus = :estatus,
                                                       rol = :rol
                                                   WHERE idusuario = :idusuario");
            $stmt -> bindParam(":idusuario",$idusuario, PDO::PARAM_INT);
            $stmt -> bindparam(":nombreu",$nombreu, PDO::PARAM_STR);
            $stmt -> bindParam("apellidou",$apellidou, PDO::PARAM_STR);
            $stmt -> bindParam("usuario",$usuario, PDO::PARAM_STR);
            $stmt -> bindParam("clave",$clave, PDO::PARAM_STR);
            $stmt -> bindParam("estatus",$estatus, PDO::PARAM_STR);
            $stmt -> bindParam("rol",$rol, PDO::PARAM_STR);

             if($stmt -> execute()){

            return "EL REGISTRO SE ACTUALIZÓ CORRECTAMENTE?...";

             }else{

            return "ERROR, NO SE PUDO ACTUALIZAR EL REGISTRO?...";

            }

        }

    }

 

?>