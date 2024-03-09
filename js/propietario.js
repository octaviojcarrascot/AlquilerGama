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
        var table = $('#tablaPropietarios').DataTable({

            "ajax":{
                    "url": "ajax/propietarios.ajax.php",
                    "type": "POST",
                    "data": {
                        "tipo" : "1"
                    },
                    "dataSrc": ""
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
                {
                    "targets": 6,
                    "sortable": false,
                    "render": function (data, type, full, meta){
                        return "<center>" +
                                "<button type='button' class ='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-propietarios'> " +
                                    "<i class='fas fa-pencil-alt'></i> " +
                                "</button> " +    
                                "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                                    "<i class='fas fa-trash'></i> " +
                                "</button> " +
                            "</center>";    
                    }
                }
            ],
                //aqui se define las columnas del tabla....
                "colunms":[
                        {"data":"idpropietario"},
                        {"data":"nombrep"},
                        {"data":"apellidop"},
                        {"data":"torre"},
                        {"data":"piso"},
                        {"data":"dpto"},
                        {"data":"accion"}
                    ]

        });
        //CODIGO PARA ABREGAR UN REGISTRO DE RODEO..
        $(".btn-agregar-propietarios").on('click',function(){
            accion = "registrar";
        });
        //CODIGO PARA ELIMINAR EL REGISTRO DE RODEO..
        $('#tablaPropietarios tbody').on('click','.btnEliminar',function(){
           
           var data = table.row($(this).parents('tr')).data();
            //$('#editId').val(data[0])
            var idpropietario = data["idpropietario"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('idpropietario',idpropietario);

                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea eliminar el Registro de Rodeo?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/propietarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                console.log(respuesta);

                                table.ajax.reload(null,false);

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
        //CODIGO PARA EDITAR EL REGISTRO DE RODEO.. INCOMPLETO.....
        $('#tablaPropietarios tbody').on('click','.btnEditar',function(){
            var data = table.row($(this).parents('tr')).data();

                accion = "actualizar";

                $("#idpropietario").val(data["idpropietario"]);
                $("#txtNombreP").val(data["nombrep"]);
                $("#txtApellidoP").val(data["apellidop"]);
                $("#ddlTorre").val(data["torre"]);
                $("#ddlPiso").val(data["piso"]);
                $("#ddlDpto").val(data["dpto"]);
                

        });
        //AQUI TENEMO LA FUNCION DE AGREGAR REGISTRO...
        $("#btnGuardar").on('click',function(){
                        
                //obteniendo el valor que se puso en campo text del formulario
                var txtNombreP = document.getElementById("txtNombreP").value;
                //la condición
                if (txtNombreP.length == "") {
                    alert('Debe Elegir una Nombre!');
                    return false;
                }
                    
                      //obteniendo el valor que se puso en campo text del formulario
                var txtApellidoP = document.getElementById("txtApellidoP").value;
                //la condición
                if (txtApellidoP.length =="") {
                    alert('Debe Elegir una Apellido!');
                    return false;
                }
                   
                    
                var ddlTorre = document.getElementById("ddlTorre").value;
                if(ddlTorre == ""){
                    alert('Debe Elegir la Torre!');
                    return false;
                }
                var ddlPiso = document.getElementById("ddlPiso").value;
                if(ddlPiso == ""){
                    alert('Debe Elegir el Piso!');
                    return false;
                }
                var ddlDpto = document.getElementById("ddlDpto").value;
                if(ddlDpto == ""){
                    alert('Debe Elegir el Departamento!');
                    return false;
                }                
               
                var idpropietario = $("#idpropietario").val(),
                    nombrep =$("#txtNombreP").val();
                    apellidop =$("#txtApellidoP").val();
                    torre = $("#ddlTorre").val(),
                    piso =$("#ddlPiso").val();
                    dpto =$("#ddlDpto").val();
                    

                var datos = new FormData();
                    datos.append('idpropietario',idpropietario);
                    datos.append('nombrep',nombrep);
                    datos.append('apellidop',apellidop);
                    datos.append('torre',torre);
                    datos.append('piso',piso);
                    datos.append('dpto',dpto);
                    datos.append('accion',accion);
                    

                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea registrar el Propietario.?",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/propietarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){
                                console.log(respuesta);
                         $("#modal-gestionar-propietarios").modal('hide');

                                table.ajax.reload(null,false);
                                $("#idpropietario").val("");
                                $("#txtNombreP").val("");
                                $("#txtApellidoP").val("");
                                $("#ddlTorre").val(""),
                                $("#ddlPiso").val("");
                                $("#ddlDpto").val("");
                                
                                Toast.fire({
                                        icon: 'success',
                                        title: respuesta
                                })

                            }
                        });

                    }
                    else{

                    }
                })
        })
    })