$(document).ready(function () {
    var accion = "";
    //AQUI LLAMAMOS EL MENSAJE DE INFORMACION...
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    //Aqui mostramos los datos en la tabla....
    var table = $('#tablaAlquilerCocheras').DataTable({
        //aqui se cargar la tabla con el controlar..
        "ajax": {
            "url": "ajax/alquiler.cochera.ajax.php",
            "type": "POST",
            "data": {
                "tipo": 1
            },
            "dataSrc": ""
        },

        //este codigo es para cambiar el idioma...
        "language": {
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
        "columnDefs": [
                
            {
                "targets": 10,
                "sortable": false,
                "render": function (data, type, full, meta) {
                    return "<center>" +
                        "<button type='button' class ='btn btn-primary btn-sm btnEditarAlquilerCochera' data-toggle='modal' data-target='#modal-gestionar-alquilercochera'> " +
                        "<i class='fas  fa-search'></i> " +
                        "</button> " +
                            "<button type='button' class ='btn btn-primary btn-sm btnEditarLiberarCochera' data-toggle='modal' data-target='#modal-gestionar-liberarcochera'> " +
                        "<i class='fa fa-unlock'></i> " +
                        "</button> " +
                                
                        "</center>";
                }
            }
        ],
        //aqui se define las columnas del tabla....
                
        "colunms": [
            { "data": "idalquiler" },
            { "data": "numerocochera" },
            // { "data": "nombrep" },
            { "data": "tiempo" },
            { "data": "fechaingreso" },
            { "data": "horaingreso" },
            { "data": "fechaegreso" },
            { "data": "horaegreso" },
            { "data": "vehiculo" },
            { "data": "dominio" },
            { "data": "estatus"},
                        
        ]
    });
    //CODIGO PARA ABREGAR UN NUEVO REGISTRO POR MEDIO DE UNA ACCION..
    $(".btn-agregar-alquilercochera").on('click',function(){
        
        accion = "registrar";
        //alert("PASO POR EL REGISTRO ");
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
        
        // alert("FINAL DE LIMPIAR ");
                                
        
    });
     //CODIGO PARA EDITAR EL REGISTRO DE RODEO.. INCOMPLETO.....
    $('#tablaAlquilerCocheras tbody').on('click', '.btnEditarAlquilerCochera', function () {

            var data = table.row($(this).parents('tr')).data();
              
                accion = "actualizar";
            
                $("#idalquiler").val(data["idalquiler"]);
                $("#txtNumero").val(data["numerocochera"]);
                $("#txtNombreP").val(data["nombrep"]);
                $("#txtApellidoP").val(data["apellidop"]);
                $("#ddlTiempo").val(data["tiempo"]);
                $("#txtFechaingreso").val(data["fechaingreso"]);
                $("#txtHoraingreso").val(data["horaingreso"]);
                $("#txtFechaegreso").val(data["fechaegreso"]);
                $("#txtHoraegreso").val(data["horaegreso"]);
                $("#txtVehiculo").val(data["vehiculo"]);
                $("#txtDominio").val(data["dominio"]);
                $("#ddlEstatus").val(data["estatus"]);
                $("#ddlTorre").val(data["torre"]);
                $("#ddlPiso").val(data["piso"]);
                $("#ddlDpto").val(data["dpto"]);
           
        });
     //CODIGO PARA EDITAR EL REGISTRO DE RODEO.. INCOMPLETO.....
        $('#tablaAlquilerCocheras tbody').on('click','.btnEditarLiberarCochera',function(){

            var data = table.row($(this).parents('tr')).data();
              
                accion = "actualizar";
            
                $("#idalquiler").val(data["idalquiler"]);
                $("#txtNumero").val(data["numerocochera"]);
                $("#ddlEstatus").val(data["estatus"]);
                $("#txtNombreP").val(data["nombrep"]);
                $("#txtApellidoP").val(data["apellidop"]);
                $("#ddlTiempo").val(data["tiempo"]);
                $("#txtFechaingreso").val(data["fechaingreso"]);
                $("#txtHoraingreso").val(data["horaingreso"]);
                $("#txtFechaegreso").val(data["fechaegreso"]);
                $("#txtHoraegreso").val(data["horaegreso"]);
                $("#txtVehiculo").val(data["vehiculo"]);
                $("#txtDominio").val(data["dominio"]);
                $("#ddlTorre").val(data["torre"]);
                $("#ddlPiso").val(data["piso"]);
                $("#ddlDpto").val(data["dpto"]);           
        });

    
        //Aqui tenemos el Boton de guardar la Raza desde la ventana modal....
        $("#btnGuardar").on('click',function(){

                var txtNumero = document.getElementById("txtNumero").value;
                if (txtNumero.length == ""){
                    alert('Debe Elegir Una Cochera..!');
                    return false;
                }

                var txtNombreP = document.getElementById("txtNombreP").value;
                if (txtNombreP.length == ""){
                    alert('Debe Elegir Un Nombre..!');
                    return false;
                }

                var ddlTiempo = document.getElementById("ddlTiempo").value;
                if(ddlTiempo.length == ""){
                    alert('Debe Seleccionar Tiempo de Alquiler..!');
                    return false;
                }
                var txtFechaingreso = document.getElementById("txtFechaingreso").value;
                if (txtFechaingreso.length == ""){
                    alert('Debe Escribir Una Fecha de Ingreso..!');
                    return false;
                }
                var txtHoraingreso = document.getElementById("txtHoraingreso").value;
                if (txtHoraingreso.length == ""){
                    alert('Deber Ingresar Una Hora..!');
                    return false;
                }

                var txtFechaegreso = document.getElementById("txtFechaegreso").value;
                if (txtFechaegreso.length == ""){
                    alert('Debe Escribir Una La Fecha Egreso..!');
                    return false;
                }

                var txtHoraegreso = document.getElementById("txtHoraegreso").value;
                if (txtHoraegreso.length == ""){
                    alert('Deber Ingresar Una Hora..!');
                    return false;
                }

                var txtVehiculo = document.getElementById("txtVehiculo").value;
                if (txtVehiculo.length == ""){
                    alert('Debe Escribir Una Vehiculo..!');
                    return false;
                }

                var ddlTorre =document.getElementById("ddlTorre").value;
                if (ddlTorre.length == ""){
                    alert('Debe Seleccionar Una Torre');
                    return false;
                }

                var ddlPiso =document.getElementById("ddlPiso").value;
                if (ddlPiso.length == ""){
                    alert('Debe Seleccionar Un Piso..!');
                    return false;
                }

                var ddlDpto =document.getElementById("ddlDpto").value;
                if (ddlDpto.length == ""){
                    alert('Debe Seleccionar Un Departamento..!');
                    return false;
                }

                var idalquiler = $("#idalquiler").val(),
                    numerocochera = $("#txtNumero").val();
                    estatus = $("#ddlEstatus").val();
                    nombrep = $("#txtNombreP").val();
                    apellidop = $("#txtApellidoP").val();
                    tiempo = $("#ddlTiempo").val();
                    fechaingreso = $("#txtFechaingreso").val();
                    horaingreso = $("#txtHoraingreso").val();
                    fechaegreso = $("#txtFechaegreso").val(); 
                    horaegreso = $("#txtHoraegreso").val();
                    vehiculo = $("#txtVehiculo").val();
                    dominio = $("#txtDominio").val();
                    torre = $("#ddlTorre").val();
                    piso = $("#ddlPiso").val();
                    dpto  = $("#ddlDpto").val();

                var datos = new FormData();
                    datos.append('idalquiler',idalquiler);
                    datos.append('numerocochera', numerocochera);
                    datos.append('estatus', estatus);
                    datos.append('nombrep',nombrep);
                    datos.append('apellidop',apellidop);
                    datos.append('tiempo',tiempo);
                    datos.append('fechaingreso',fechaingreso);
                    datos.append('horaingreso', horaingreso);
                    datos.append('fechaegreso',fechaegreso);
                    datos.append('horaegreso',horaegreso);
                    datos.append('vehiculo',vehiculo);
                    datos.append('dominio',dominio);
                    datos.append('torre',torre);
                    datos.append('piso',piso);
                    datos.append('dpto',dpto);
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
                            //console.log(respuesta);

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                                $("#modal-gestionar-alquilercochera").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                                table.ajax.reload(null,false);

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