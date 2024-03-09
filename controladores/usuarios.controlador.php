<?php

    class ControladorUsuarios{

        static public function ctrMostrarUsuarios(){

            $respuesta = ModeloUsuarios::mdlMostrarUsuarios();

            return $respuesta;
        }
        static public function ctrRegistrarUsuarios($nombreu,$apellidou,$usuario,$clave,$estatus,$rol){

            $respuesta = ModeloUsuarios::mdlRegistrarUsuarios($nombreu,$apellidou,$usuario,$clave,$estatus,$rol);

            return $respuesta;

        }
        static public function ctrEliminarUsuarios($idusuario){

            $respuesta = ModeloUsuarios::mdlEliminarUsuarios($idusuario);

            return $respuesta;

        }
        static public function ctrActualizarUsuarios($idusuario,$nombreu,$apellidou,$usuario,$clave,$estatus,$rol){

            $respuesta = ModeloUsuarios::mdlActualizarUsuarios($idusuario,$nombreu,$apellidou,$usuario,$clave,$estatus,$rol);

            return $respuesta;
        }
    }


?>