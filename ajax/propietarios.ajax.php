<?php

    require_once "../controladores/propietarios.controlador.php";
    require_once "../modelos/propietarios.modelo.php";

    class ajaxPropietarios{

        public $idpropietario;
        public $nombrep;
        public $apellidop;
        public $torre;
        public $piso;
        public $dpto;

        public function MostrarPropietarios(){

            $respuesta = ControladorPropietarios::ctrMostrarPropietarios();

            echo json_encode ($respuesta);

        }
        public function registrarPropietarios(){

            $respuesta = ControladorPropietarios::ctrRegistrarPropietarios($this->nombrep,$this->apellidop,$this->torre,$this->piso,$this->dpto);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function eliminarPropietarios(){

            $respuesta = ControladorPropietarios::crtEliminarPropietarios($this->idpropietario);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function actualizarPropietarios(){

            $respuesta = ControladorPropietarios::ctrActualizarPropietarios($this->idpropietario,$this->nombrep,$this->apellidop,$this->torre,$this->piso,$this->dpto);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }

    }

    //SE EJECUTA LA ACCION DE GUARDAR, EDITAR, ELIMINAR....
    if(!isset($_POST["accion"])){

    //AQUI SE CARGA LA PAGINA...
    $respuesta = new ajaxPropietarios();
    $respuesta -> MostrarPropietarios();

    }else{

        if($_POST["accion"] == "registrar"){

            $insertar = new ajaxPropietarios();
            $insertar->nombrep = $_POST["nombrep"];
            $insertar->apellidop = $_POST["apellidop"];
            $insertar->torre = $_POST["torre"];
            $insertar->piso = $_POST["piso"];
            $insertar->dpto = $_POST["dpto"];
            $insertar->registrarPropietarios();

        }
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxPropietarios();
            $eliminar->idpropietario = $_POST["idpropietario"];
            $eliminar->eliminarPropietarios();

        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxPropietarios();
            $actualizar->idpropietario = $_POST["idpropietario"];
            $actualizar->nombrep = $_POST["nombrep"];
            $actualizar->apellidop = $_POST["apellidop"];
            $actualizar->torre = $_POST["torre"];
            $actualizar->piso = $_POST["piso"];
            $actualizar->dpto = $_POST["dpto"];
            $actualizar->actualizarPropietarios();
        }
    }
?>