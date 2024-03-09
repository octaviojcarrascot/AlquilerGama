
  <div class= "fondo" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Disponibilidad de Cocheras</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Gestionar Alquiler</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <section class="content">
        <div   class="container-fluid">
            <!-- =========================================================== -->
        
                <div  class="row" >
            
                    <div  class="col-md-3 col-sm-6 col-12 ">
                        <div class="info-box bg-success" >
                           
                            
                                 <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                    <div  class="info-box-content">
                                        
                                            <div class="timeis" id="tm"></div>
                                            
                                           <div id="hora"></div> 
                                           <div id="minuto"></div>
                                              
                                                                            
                                        
                    </div>
                    
                
                    <!-- /.info-box -->
            </div>
        
            <!-- /.row -->
        </div>
    </section>
    <!--contentenido-->

    <section class="content">
        <div   class="container-fluid">
            <!-- =========================================================== -->
        
                <div  class="row" >
            
                    <div  class="col-md-3 col-sm-6 col-12 ">
                        
                        <div class="info-box bg-success" >
                           
                            
                                 <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                    <div  class="info-box-content">
                                        
                                            <div class="timeis" id="tablaCocheras"></div>
                                            
                                           <div id=""></div> 
                                           <div id=""></div>
                                              
                                                                            
                                        
                    </div>
                    
                
                    <!-- /.info-box -->
            </div>
        
            <!-- /.row -->
        </div>
    </section>
    
   
<section class="content">

    <div class="container-fluid">
      
        <table id="tablaCocheras" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 10%;">Id</td>
                    <td>Cochera</td>
                    <td>Piso</td>
                    <td>Estatus</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>
<div class="modal fade" id="modal-gestionar-cochera">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Registrar Cocherass</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <input type="hidden" id ="idcochera" name ="numero" value = "" >
                            <label for="">N° Cochera:</label>
                            <input type="text" class="form-control" name="numero" id="txtNumero" placeholder="Ingrese el Numero Cochera" onKeypress = "if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="ddlPiso">Piso</label>
                            <select name="piso" id="ddlPiso" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="SUB_1">SUB_1</option>
                                <option value="SUB_2">SUB_2</option>

                            </select>
                        </div>             
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="ddlEstatus">Estatus</label>
                            <select name="estatus" id="ddlEstatus" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="DISPONIBLE">DISPONIBLE</option>
                                <option value="OCUPADA">OCUPADA</option>

                            </select>
                        </div>
                    </div>
                   
                           <div class="row">
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombrep" id="txtNombreP" placeholder="Nombre Propietario">
                            
                        </div>
                    </div>    
                   
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="">Apellido:</label>
                            <input type="text" class="form-control" name="apellidop" id="txtApellidoP" placeholder="Apellido Propietario">
                        </div>
                    </div>
                     
                   
                </div>

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" id="btnGuardaralquiler" class="btn btn-primary">Guardar</button>



            </div>
        </div>
    </div>

</div>


<!--VENTANA MODAL PARA ASIGNACION DE COCHERA-->
<!--<div class="modal fade" id="modal-alquiler-cochera">

    <div class="modal-dialog modal.lg"  style="width: 150%;">

        <div class="modal-content"  style="width: 150%;">
            <!--Header-->
<!--<div class="modal fade" id="modal-alquiler-cochera">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Alquiler Cocheras</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
<!--<div class="modal fade" id="modal-alquiler-cochera">
            <div class="modal-body" style="width: 100%;">
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Cochore:</label>
                            <input type="text"  class="form-control" name="numerocochera" id="txtNumero" placeholder="Ingrese la Cochera">
                        </div>
                   </div>

                    <div class="col-sm-3">
                        <div class="from-groud">
                           <label for="ddlEstatus">Estatus:</label>
                            <select name="estatus" id="ddlEstatus" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="DISPONIBLE">DISPONIBLE</option>
                                <option value="OCUPADA">OCUPADA</option>
                            </select>
                        </div>
                    </div>
                 
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombrep" id="txtNombreP" placeholder="Nombre Propietario">
                            
                        </div>
                    </div>    
                   
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Apellido:</label>
                            <input type="text" class="form-control" name="apellidop" id="txtApellidoP" placeholder="Apellido Propietario">
                        </div>
                    </div>
                     <div class="col-sm-2">
                        <div class="from-groud">
                           <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-propietario" data-dismiss="modal"><i class="fas fas-plus-square">Cargar Propietario</i></button>
                        </div>
                    </div>
                    
                </div>
                <hr>
                <label for="">Seleccionar el Tiempo de Alquiler:</label> 
                <div class="row">
                    
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="ddlTiempo">Tiempo de Alquiler</label>
                            <select name="tiempo" id="ddlTiempo" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="3 Horas">3 Horas</option>
                                <option value="6 Horas">6 Horas</option>
                                <option value="12 Horas">12 Horas</option>
                                <option value="24 Horas">24 Horas</option>
                                <option value="24 Horas">48 Horas</option>
                                <option value="24 Horas">72 Horas</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Tiempo Actual:</label>
                            <input type="text" class="form-control" name="tiempoactual" id="txtTiempoactual" placeholder="Tiempo Atual...">
                        </div>
                    </div>
                </div> 
                <br>  
                <div class="row">
                   
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Fecha Ingreso:</label>
                            <input type="date" class="form-control" name="fechaingreso" id="txtFechaingreso" placeholder="Ingrese la Fecha 99/99/9999">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Hora Ingreso:</label>
                            <input type="text" class="form-control" name="horaingreso" id="txtHoraingreso" placeholder="Ingrese la Hora 00:00">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Fecha Egreso:</label>
                            <input type="date" class="form-control" name="fechaegreso" id="txtFechaegreso" placeholder="Ingrese la Fecha 99/99/9999">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Hora Egreso:</label>
                            <input type="text" class="form-control" name="horaegreso" id="txtHoraegreso" placeholder="Ingrese la Hora 00:00">
                        </div>
                    </div>
                </div>  
                <hr> 
                <label for="">Datos del Vehiculo:</label> 
                <div class="row">
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Vehiculo:</label>
                            <input type="text" class="form-control" name="vehiculo" id="txtVehiculo" placeholder="Ingrese el Vehiculo...">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Dominio:</label>
                            <input type="text" class="form-control" name="dominio" id="txtDominio" placeholder="Ingrese el Dominio...">
                        </div>
                    </div>
                </div>
                <hr > <label for="">Selección de Ubicación:</label>
                <div class="row">
                     <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="ddlTorre">Torre</label>
                            <select name="torre" id="ddlTorre" class="form-control select2bs4" >
                                <option value="">...</div></option>
                                <option value="Aconcagua">Aconcagua</option>
                                <option value="Catedral">Catedral</option>
                                <option value="Champaqui">Champaqui</option>
                                <option value="Cerro Colorado">Cerro Colorado</option>
                                <option value="Bastión">Bastión</option>
                                <option value="Pan de Azucar">Pan de Azucar</option>
                                <option value="Tronador">Tronador</option>
                                <option value="Los Gigantes">Los Gigantes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="from-groud">
                            <label for="ddlPiso">Piso:</label>
                            <select name="piso" id="ddlPiso" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">11</option>
                                <option value="11">12</option>
                                <option value="12">13</option>
                                <option value="13">14</option>
                                <option value="14">15</option>
                                <option value="15">16</option>
                                <option value="16">17</option>
                                <option value="17">18</option>
                                <option value="18">10</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="from-groud">
                            <label for="ddlDpto">Departamento:</label>
                            <select name="dpto" id="ddlDpto" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>

                            </select>
                        </div>
                    </div>
                              
                </div>

            </div>
            <!--Footer del Modal-->
<!--<div class="modal fade" id="modal-alquiler-cochera">
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>
        </div>
         </div>
        </div>
        </div>

</div>-->


<script>

 $(document).ready(function(){

         var accion = "";
        //AQUI LLAMAMOS EL MENSAJE DE INFORMACION...
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
         //Aqui mostramos los datos en la tabla....
        var table = $('#tablaCocheras').DataTable({
             //aqui se cargar la tabla con el controlar..
            "ajax":{
                "url":"ajax/vista.cochera.ajax.php",
                "type":"POST",
                "data":{
                    "tipo": 1
                },
                "dataSrc":""
            },

            //este codigo es para cambiar el idioma...
            "language":{
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "infoThousands": ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad",
                        "collection": "Colección",
                        "colvisRestore": "Restaurar visibilidad",
                        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                        "copySuccess": {
                            "1": "Copiada 1 fila al portapapeles",
                            "_": "Copiadas %d fila al portapapeles"
                        },
                        "copyTitle": "Copiar al portapapeles",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todas las filas",
                            "1": "Mostrar 1 fila",
                            "_": "Mostrar %d filas"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Rellene todas las celdas con <i>%d<\/i>",
                        "fillHorizontal": "Rellenar celdas horizontalmente",
                        "fillVertical": "Rellenar celdas verticalmentemente"
                    },
                    "decimal": ",",
                    "searchBuilder": {
                        "add": "Añadir condición",
                        "button": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "clearAll": "Borrar todo",
                        "condition": "Condición",
                        "conditions": {
                            "date": {
                                "after": "Despues",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vacío",
                                "equals": "Igual a",
                                "notBetween": "No entre",
                                "notEmpty": "No Vacio",
                                "not": "Diferente de"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vacio",
                                "equals": "Igual a",
                                "gt": "Mayor a",
                                "gte": "Mayor o igual a",
                                "lt": "Menor que",
                                "lte": "Menor o igual que",
                                "notBetween": "No entre",
                                "notEmpty": "No vacío",
                                "not": "Diferente de"
                            },
                            "string": {
                                "contains": "Contiene",
                                "empty": "Vacío",
                                "endsWith": "Termina en",
                                "equals": "Igual a",
                                "notEmpty": "No Vacio",
                                "startsWith": "Empieza con",
                                "not": "Diferente de"
                            },
                            "array": {
                                "not": "Diferente de",
                                "equals": "Igual",
                                "empty": "Vacío",
                                "contains": "Contiene",
                                "notEmpty": "No Vacío",
                                "without": "Sin"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Eliminar regla de filtrado",
                        "leftTitle": "Criterios anulados",
                        "logicAnd": "Y",
                        "logicOr": "O",
                        "rightTitle": "Criterios de sangría",
                        "title": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Borrar todo",
                        "collapse": {
                            "0": "Paneles de búsqueda",
                            "_": "Paneles de búsqueda (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Sin paneles de búsqueda",
                        "loadMessage": "Cargando paneles de búsqueda",
                        "title": "Filtros Activos - %d"
                    },
                    "select": {
                        "1": "%d fila seleccionada",
                        "_": "%d filas seleccionadas",
                        "cells": {
                            "1": "1 celda seleccionada",
                            "_": "$d celdas seleccionadas"
                        },
                        "columns": {
                            "1": "1 columna seleccionada",
                            "_": "%d columnas seleccionadas"
                        }
                    },
                    "thousands": ".",
                    "datetime": {
                        "previous": "Anterior",
                        "next": "Proximo",
                        "hours": "Horas",
                        "minutes": "Minutos",
                        "seconds": "Segundos",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Cerrar",
                        "create": {
                            "button": "Nuevo",
                            "title": "Crear Nuevo Registro",
                            "submit": "Crear"
                        },
                        "edit": {
                            "button": "Editar",
                            "title": "Editar Registro",
                            "submit": "Actualizar"
                        },
                        "remove": {
                            "button": "Eliminar",
                            "title": "Eliminar Registro",
                            "submit": "Eliminar",
                            "confirm": {
                                "_": "¿Está seguro que desea eliminar %d filas?",
                                "1": "¿Está seguro que desea eliminar 1 fila?"
                            }
                        },
                        "error": {
                            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                        },
                        "multi": {
                            "title": "Múltiples Valores",
                            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                            "restore": "Deshacer Cambios",
                            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                        }
                    },
                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
            //aqui se nuestra en el datable los registros....
            "columnDefs":[
                //ESTE CODIGO MUESTRA DENTRO DE LA TABLA EL CAMPO ACTIVO = 1, INACTIVO = 0....
                        {       
                            "targets": 3,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                            "sortable": false,
                            "render": function (data, type, full, meta){

                                if(data == "DISPONIBLE") {
                                    return "<button type ='button' class='btn btn-bloc btn-primary btn-sm  btnEditar' data-toggle='modal' data-target='#modal-gestionar-cochera'>DISPONIBLE</button>"
                                }else{
                                    return "<button type ='button' class='btn btn-bloc btn-danger btn-sm  btnEditar' data-toggle='modal' data-target='#modal-gestionar-cochera'>OCUPADO</button>"
                                }
                            }
                            
                        },
                ],
                //aqui se define las columnas del tabla....
                "colunms":[
                        {"data":"idcochera"},
                        {"data":"nemero"},
                        {"data":"piso"},
                        {"data":"estatus"}
                       
                ]

        });

 //CODIGO PARA ABREGAR UN REGISTRO..
        $(".btn-agregar-cochera").on('click',function(){
            
            accion = "registrar";
           
        });
        
        /////////////////////////////////
        
        $(document).ready(function() {

           //alert("Esto es una función anónima");
        })

        $(document).ready(funcionConNombre);

        function funcionConNombre() {

            //alert("Esto es una funcion declarada");
          
        }   
        
        //CODIGO PARA EDITAR EL REGISTRO..
        $('#tablaCocheras tbody').on('click','.btnEditar',function(){

            var data = table.row($(this).parents('tr')).data();
              
                accion = "actualizar";
            
                $("#idcochera").val(data["idcochera"]);
                $("#txtNumero").val(data["numero"]);
                $("#ddlPiso").val(data["piso"]);
                $("#ddlEstatus").val(data["estatus"]);
               
               
              

        });
        //Aqui tenemos el Boton de guardar ventana modal....
        $("#btnGuardar").on('click',function(){                  

                var idcochera = $("#idcochera").val(),
                    numero =$("#txtNumero").val();
                    piso =$("#ddlPiso").val();
                    estatus =$("#ddlEstatus").val();

                var datos = new FormData();
                    datos.append('idcochera',idcochera);
                    datos.append('numero',numero);
                    datos.append('piso',piso);
                    datos.append('estatus',estatus);
                    datos.append('accion',accion);

                    alert("estoy en procesar datos");
                     


                //AQUI ESTA EL ALERTA DE CONFIRMACION...
                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea registrar los Datos?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/vista.cochera.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                        //alert("estoy en procesar ajax");

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                                $("#modal-gestionar-cochera").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                                table.ajax.reload(null,false);

                                //PARA LIMPIAR LOS CAMPOS DEL MODAL
                                $("#idcocera").val("");
                                $("#txtNumero").val("");
                                $("#ddlPiso").val("");
                                $("#ddlEstatus").val("");
                               

                                //QUI SE HACE LLAMADO AL MENSAJE QUE APARECE EN LA PARTE SUPERIOR DERECHA...
                                Toast.fire({
                                        icon: 'success',
                                        title: respuesta
                                    })

                            }
                        });
                    }else{
                    
                    }
                })
        });
       
        $("#btnGuardaralquiler").on('click',function(){

            
            alert("estoy por alquiler cochera1");
                var idalquiler = $("#idalquiler").val(),
                    numerocochera = $("#txtNumero").val();
                   // estatus = $("#ddlEstatus").val();
                    nombrep = $("#txtNombreP").val();
                    apellidop = $("#txtApellidoP").val();
                   /* tiempo = $("#ddlTiempo").val();
                    fechaingreso = $("#txtFechaingreso").val();
                    horaingreso = $("#txtHoraingreso").val();
                    fechaegreso = $("#txtFechaegreso").val(); 
                    horaegreso = $("#txtHoraegreso").val();
                    vehiculo = $("#txtVehiculo").val();
                    dominio = $("#txtDominio").val();
                    torre = $("#ddlTorre").val();
                    piso = $("#ddlPiso").val();
                    dpto  = $("#ddlDpto").val();*/

                var datos = new FormData();
                    datos.append('idalquiler',idalquiler);
                    datos.append('numerocochera', numerocochera);
                   // datos.append('estatus', estatus);
                    datos.append('nombrep',nombrep);
                    datos.append('apellidop',apellidop);
                    /*datos.append('tiempo',tiempo);
                    datos.append('fechaingreso',fechaingreso);
                    datos.append('horaingreso', horaingreso);
                    datos.append('fechaegreso',fechaegreso);
                    datos.append('horaegreso',horaegreso);
                    datos.append('vehiculo',vehiculo);
                    datos.append('dominio',dominio);
                    datos.append('torre',torre);
                    datos.append('piso',piso);
                    datos.append('dpto',dpto);*/
                    datos.append('accion',accion);

                //AQUI ESTA EL ALERTA DE CONFIRMACION...
                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea registrar los Datos?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/alquiler.cochera.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function (respuesta) {
                            console.log(respuesta);
                            alert("estoy por alquiler cochera");

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                               // $("#modal-gestionar-alquilercochera").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                               // table.ajax.reload(null,false);

                                //PARA LIMPIAR LOS CAMPOS DEL MODAL

                                $("#idalquiler").val(""),
                                $("#txtNumero").val("");
                                $("#ddlEstatus").val("");
                                $("#txtNombreP").val("");
                                $("#txtApellidoP").val("");
                                $("#ddlTiempo").val("");
                                $("#txtFechaingreso").val("");
                                $("#txtHoraingreso").val("");
                                $("#txtFechaegreso").val(""); 
                                $("#txtHoraegreso").val("");
                                $("#txtVehiculo").val("");
                                $("#txtDominio").val("");
                                $("#ddlTorre").val("");
                                $("#ddlPiso").val("");
                                $("#ddlDpto").val("");
                                
                                alert("FINAL DE LIMPIAR ");
                                //QUI SE HACE LLAMADO AL MENSAJE QUE APARECE EN LA PARTE SUPERIOR DERECHA...
                                Toast.fire({
                                        icon: 'success',
                                        title: respuesta
                                    })

                            }
                        });
                    }else{
                    
                    }
                })

        })
           

    })
   
        

       
</script>
<script src="js/archivo.js"></script>

