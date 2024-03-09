<?php

    class conexion{
            static public function conectar(){
                

                 $con =new PDO("mysql:host=localhost;dbname=alquilercochera",
                                "root",
                                "",
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

                return $con;

                
             
            }
    }
   $conexion = new Conexion();
   $conexion -> conectar(); 
?>