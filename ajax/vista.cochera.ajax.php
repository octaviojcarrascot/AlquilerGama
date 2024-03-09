    <?php
    require_once "../controladores/vista.cochera.controlador.php";
    require_once "../modelos/vista.cochera.modelo.php";

    class ajaxVistacochera{

        public $idcochera;
        public $numero;
        public $piso;
        public $estatus;
    

        public function MostrarVistacochera(){
            

            $respuesta = ControladorVistacochera::ctrMostrarVistacochera();
                         
            echo json_encode ($respuesta);

        }
        public function MostrarVistacocheradiponible(){
            

            $respuesta = ControladorVistacochera::ctrMostrarVistacocheradisponible();
                         
            echo json_encode ($respuesta);

        }
         public function MostrarCargarcochera(){
            

            $respuesta = ControladorVistacochera::ctrMostrarCargarcochera();
                         
            echo json_encode ($respuesta);

        }

        public function registrarVistacochera(){

            $respuesta = ControladorVistacochera::ctrRegistrarVistacochera($this->numero,$this->piso,$this->estatus);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function eliminarVistacochera(){

            $respuesta = ControladorVistacochera::crtEliminarVistacochera($this->idcochera);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }
        public function actualizarVistacochera(){

            $respuesta = ControladorVistacochera::ctrActualizarVistacochera($this->idcochera,$this->numero,$this->piso,$this->estatus);

            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        }

    }

    //SE EJECUTA LA ACCION DE GUARDAR, EDITAR, ELIMINAR....
    if(!isset($_POST["accion"])){

    //AQUI SE CARGA LA PAGINA...
    $respuesta = new ajaxVistacochera();
    $respuesta -> MostrarVistacochera();
   

    }else{

        if($_POST["accion"] == "registrar"){

            $insertar = new ajaxVistacochera();
            $insertar->numero = $_POST["numero"];
            $insertar->piso = $_POST["piso"];
            $insertar->estatus = $_POST["estatus"];
            $insertar->registrarVistacochera();
            

        }
        if($_POST["accion"] == "eliminar"){

            $eliminar = new ajaxVistacochera();
            $eliminar->idcochera = $_POST["idcochera"];
            $eliminar->eliminarVistacochera();

        }
        if($_POST["accion"] == "actualizar"){

            $actualizar = new ajaxVistacochera();
            $actualizar->idcochera = $_POST["idcochera"];
            $actualizar->numero = $_POST["numero"];
            $actualizar->piso = $_POST["piso"];
            $actualizar->estatus = $_POST["estatus"];
            
            $actualizar->actualizarVistacochera();
           
            
        }
    }
?>