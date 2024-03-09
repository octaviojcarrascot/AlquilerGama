<?php

    class ControladorInfraccion{

         static public function ctrMostrarInfraccion(){

            $respuesta = ModeloInfraccion::mdlMostrarInfraccion();
            
            return $respuesta;
        }

       /* static public function ctrRegistrarPropietarios($nombrep,$apellidop,$torre,$piso,$id_propietario){

            $respuesta = ModeloPropietarios::mdlRegistrarPropietarios($nombrep, $apellidop,$torre,$piso,$id_propietario);

            return $respuesta;
        }

        static public function crtEliminarPropietarios($idpropietario){

            $respuesta = ModeloPropietarios::mdlEliminarPropietarios($idpropietario);

            return $respuesta;

        }
        static public function ctrActualizarPropietarios($idpropietario,$nombrep,$apellidop,$torre,$piso,$id_propietario){

            $respuesta = ModeloPropietarios::mdlActualizarPropietarios($idpropietario,$nombrep,$apellidop,$torre,$piso,$id_propietario);

            return $respuesta;
        }
        */
    }

?>