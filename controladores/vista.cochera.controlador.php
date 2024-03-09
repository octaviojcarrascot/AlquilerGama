<?php

    class ControladorVistacochera{
        //Muestra la vista de cocheras
        static public function ctrMostrarVistacochera(){

            $respuesta = ModeloVistacochera::mdlMostrarVistacochera();
            
            return $respuesta;
        }
      

         static public function ctrMostrarCargarcochera(){

            $respuesta = ModeloVistacochera::mdlMostrarCargarcochera();
            
            return $respuesta;
        }

    

        static public function ctrRegistrarVistacochera($numero,$piso,$estatus){

            $respuesta = ModeloVistacochera::mdlRegistrarVistacochera($numero, $piso,$estatus);

            return $respuesta;
        }

        static public function crtEliminarVistacochera($idcochera){

            $respuesta = ModeloVistacochera::mdlEliminarVistacochera($idcochera);
               
            return $respuesta;

        }
        static public function ctrActualizarVistacochera($idcochera,$numero,$piso,$estatus){

            $respuesta = ModeloVistacochera::mdlActualizarVistacochera($idcochera,$numero,$piso,$estatus);

            return $respuesta;
        }
    }

?>