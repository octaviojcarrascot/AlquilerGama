<?php

require_once "../controladores/alquiler.cochera.controlador.php";
require_once "../modelos/alquiler.cochera.modelo.php";

class ajaxAlquilerCocheras{

    public $numerocochera;
    public $nombrep;
    public $apellidop;
    public $tiempo;
    public $fechaingreso;
    public $horaingreso;
    public $fechaegreso;
    public $horaegreso;
    public $vehiculo;
    public $dominio;
    public $torre;
    public $piso;
    public $dpto;
    public $estatus;

    public function MostrarAlquilerCocheras(){

        $respuesta = ControladorAlquilerCocheras::ctrMostrarAlquilerCocheras();

        echo json_encode($respuesta);
        

    }
    public function RegistrarAlquilerCocheras(){

        $respuesta = ControladorAlquilerCocheras::ctrRegistrarAlquilerCocheras($this->numerocochera,$this->nombrep,$this->apellidop,$this->tiempo,$this->fechaingreso,$this->horaingreso,$this->fechaegreso,$this->horaegreso,$this->vehiculo,$this->dominio,$this->estatus,$this->torre,$this->piso,$this->dpto);

        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
    public function ActualizarAlquilerCocheras(){

        $respuesta = ControladorAlquilerCocheras::ctrActualizarAlquilerCocheras($this->idalquiler,$this->numerocochera,$this->nombrep,$this->apellidop,$this->tiempo,$this->fechaingreso,$this->horaingreso,$this->fechaegreso,$this->horaegreso,$this->vehiculo,$this->dominio,$this->estatus,$this->torre,$this->piso,$this->dpto);
    
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }

}
if(!isset($_POST["accion"])){
    $respuesta = new ajaxAlquilerCocheras();
    $respuesta -> MostrarAlquilerCocheras();
}else{

    if($_POST["accion"] == "registrar"){

        $insertar = new ajaxAlquilerCocheras();
        $insertar-> numerocochera = $_POST["numerocochera"];
        $insertar-> nombrep = $_POST["nombrep"];
        $insertar-> apellidop = $_POST["apellidop"];
        $insertar-> tiempo = $_POST["tiempo"];
        $insertar-> fechaingreso = $_POST["fechaingreso"];
        $insertar-> horaingreso = $_POST["horaingreso"];
        $insertar-> fechaegreso = $_POST["fechaegreso"];
        $insertar-> horaegreso = $_POST["horaegreso"];
        $insertar-> vehiculo = $_POST["vehiculo"];
        $insertar-> dominio = $_POST["dominio"];
        $insertar-> estatus = $_POST["estatus"];
        $insertar-> torre = $_POST["torre"];
        $insertar-> piso = $_POST["piso"];
        $insertar-> dpto = $_POST["dpto"];
        $insertar-> RegistrarAlquilerCocheras();

    }
      if($_POST["accion"] == "actualizar"){
        
        $actualizar = new ajaxAlquilerCocheras();
        $actualizar-> idalquiler = $_POST["idalquiler"];
        $actualizar-> numerocochera = $_POST["numerocochera"];
        $actualizar-> nombrep = $_POST["nombrep"];
        $actualizar-> apellidop = $_POST["apellidop"];
        $actualizar-> tiempo = $_POST["tiempo"];
        $actualizar-> fechaingreso = $_POST["fechaingreso"];
        $actualizar-> horaingreso = $_POST["horaingreso"];
        $actualizar-> fechaegreso = $_POST["fechaegreso"];
        $actualizar-> horaegreso = $_POST["horaegreso"];
        $actualizar-> vehiculo = $_POST["vehiculo"];
        $actualizar-> dominio = $_POST["dominio"];
        $actualizar-> estatus = $_POST["estatus"];
        $actualizar-> torre = $_POST["torre"];
        $actualizar-> piso = $_POST["piso"];
        $actualizar-> dpto = $_POST["dpto"];
        $actualizar-> ActualizarAlquilerCocheras();

    }
}
?>