<?php

    require_once "../controladores/infraccion.controlador.php";
    require_once "../modelos/infraccion.modelo.php";

    class ajaxInfraccion{

        public $idinfraccion;
        public $infraccion;
        public $fechainfracion;
        public $hora;
        public $vehiculo;
        public $dominio;
        public $nombrep;
        public $apellidop;
        public $torre;
        public $piso;
        public $dpto;
        public $responsable;
        

        public function MostrarInfraccion(){

            $respuesta = ControladorInfraccion::ctrMostrarInfraccion();

            echo json_encode($respuesta);

        }
       /* public function registrarUsuarios(){

            $respuesta = ControladorUsuarios::ctrRegistrarUsuarios($this->nombreu,$this->apellidou,$this->usuario,$this->clave,$this->estatus,$this->rol);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function eliminarUsuarios(){

            $respuesta = ControladorUsuarios::ctrEliminarUsuarios($this->idusuario);

            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
        }
        public function actualizarUsuarios(){

            $respuesta = ControladorUsuarios::ctrActualizarUsuarios($this->idusuario,$this->nombreu,$this->apellidou,$this->usuario,$this->clave,$this->estatus,$this->rol);


            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                                        
        }
*/
           
    }
    //SE EJECUTA LA ACCION GUARDAR, EDITAR, ELIMINAR...
    if(!isset($_POST["accion"])){

        $respuesta = new ajaxInfraccion();
        $respuesta -> MostrarInfraccion();

    }else{
/*
        if($_POST["accion"] == "registrar"){
            
            $insertar = new ajaxUsuarios();
            $insertar->nombreu = $_POST["nombreu"];
            $insertar->apellidou = $_POST["apellidou"];
            $insertar->usuario = $_POST["usuario"];
            $insertar->clave = $_POST["clave"];
            $insertar->estatus = $_POST["estatus"];
            $insertar->rol = $_POST["rol"];
            $insertar->registrarUsuarios();

        } 
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxUsuarios();
            $eliminar->idusuario = $_POST["idusuario"];
            $eliminar->eliminarUsuarios();
        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxUsuarios();
            $actualizar->idusuario = $_POST["idusuario"];
            $actualizar->nombreu = $_POST["nombreu"];
            $actualizar->apellidou = $_POST["apellidou"];
            $actualizar->usuario = $_POST["usuario"];
            $actualizar->clave = $_POST["clave"];
            $actualizar->estatus = $_POST["estatus"];
            $actualizar->rol = $_POST["rol"];
            $actualizar->actualizarUsuarios();

        }*/
    }


?>