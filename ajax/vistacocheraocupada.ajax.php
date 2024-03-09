<?php
    require_once "../controladores/vistacocheraocupada.controlador.php";
    require_once "../modelos/vistacocheraocupada.modelo.php";

    class ajaxVistacocheraocupada{

        public $idcochera;
        public $numero;
        public $piso;
        public $estatus;
    

        public function MostrarVistacocheraocupada(){
            

            $respuesta = ControladorVistacocheraocupada::ctrMostrarVistacocheraocupada();
                         
            echo json_encode ($respuesta);

        }
    }
    if(!isset($_POST["accion"])){
    $respuesta = new ajaxVistacocheraocupada();
    $respuesta -> MostrarVistacocheraocupada();
}