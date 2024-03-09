<?php

    class ControladorVistacocheraocupada{

        static public function ctrMostrarVistacocheraocupada(){

            $respuesta = ModeloVistacocheraocupada::mdlMostrarVistacocheraocupada();
            
            return $respuesta;
        }
    }