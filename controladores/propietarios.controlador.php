<?php

    class ControladorPropietarios{

         static public function ctrMostrarPropietarios(){

            $respuesta = ModeloPropietarios::mdlMostrarPropietarios();
            
            return $respuesta;
        }

        static public function ctrRegistrarPropietarios($nombrep,$apellidop,$torre,$piso,$dpto){

            $respuesta = ModeloPropietarios::mdlRegistrarPropietarios($nombrep,$apellidop,$torre,$piso,$dpto);

            return $respuesta;
        }

        static public function crtEliminarPropietarios($idpropietario){

            $respuesta = ModeloPropietarios::mdlEliminarPropietarios($idpropietario);

            return $respuesta;

        }
        static public function ctrActualizarPropietarios($idpropietario,$nombrep,$apellidop,$torre,$piso,$dpto){

            $respuesta = ModeloPropietarios::mdlActualizarPropietarios($idpropietario,$nombrep,$apellidop,$torre,$piso,$dpto);

            return $respuesta;
        }
    }

?>