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
        var table = $('#tablaUsuarios').DataTable({
             //aqui se cargar la tabla con el controlar..
            "ajax":{
                "url":"ajax/usuarios.ajax.php",
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
                                        "targets": 5,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                                        "sortable": false,
                                        "render": function (data, type, full, meta){

                                            if(data == "Activo"){
                                                return "<button type ='button' class='btn btn-bloc btn-primary btn-sm'>ACTIVO</button>"
                                            }else{
                                                return "<button type ='button' class='btn btn-bloc btn-danger btn-sm'>INACTIVO</button>"
                                            }
                                        }
                                        
                                    },
                                    {
                                        //ESTE CODIGO MUESTRA DENTRO DE LA TABLA EL CAMPO ADMINISTRADOR = 1, TRABAJADOR = 0....
                                     "targets": 6,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                                        "sortable": false,
                                        "render": function (data, type, full, meta){

                                            if(data == "Administrador"){
                                                return "<button type ='button' class='btn btn-bloc btn-primary btn-sm'>ADMINISTRADOR</button>"
                                            }else{
                                                return "<button type ='button' class='btn btn-bloc btn-danger btn-sm'>Usuario</button>"
                                            }
                                        }
                                        
                                    },
                
                {
                    "targets": 7,
                    "sortable": false,
                    "render": function (data, type, full, meta){
                        return "<center>" +
                                "<button type='button' class ='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-usuarios'> " +
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
                        {"data":"idusuario"},
                        {"data":"nombreu"},
                        {"data":"apellidou"},
                        {"data":"usuario"},
                        {"data":"clave"},
                        {"data":"estatus"},
                        {"data":"rol"},
                        {"data":"accion"}
                ]

        });
         //CODIGO PARA ABREGAR UN REGISTRO DE RODEO..
        $(".btn-agregar-usuarios").on('click',function(){
            
            accion = "registrar";
           
        });
        //CODIGO PARA ELIMINAR EL REGISTRO DE RODEO..
        $('#tablaUsuarios tbody').on('click','.btnEliminar',function(){

            var data = table.row($(this).parents('tr')).data();
            //$('#editId').val(data[0])
            var idusuario = data["idusuario"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('idusuario',idusuario);

                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea eliminar el Registro?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/usuarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                //console.log(respuesta);

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
        $('#tablaUsuarios tbody').on('click','.btnEditar',function(){

            var data = table.row($(this).parents('tr')).data();
              
                accion = "actualizar";
            
                $("#idusuario").val(data["idusuario"]);
                $("#txtNombre_Usu").val(data["nombreu"]);
                $("#txtApellido_Usu").val(data["apellidou"]);
                $("#txtUsuario").val(data["usuario"]);
                $("#txtClave").val(data["clave"]);
                $("#ddlEstado").val(data["estatus"]);
                $("#ddlPerfilP").val(data["rol"]);

        });
        //Aqui tenemos el Boton de guardar la Raza desde la ventana modal....
        $("#btnGuardar").on('click',function(){

            var txtNombre_Usu = document.getElementById("txtNombre_Usu").value;
            if (txtNombre_Usu.length == ""){
                alert('Debe Elegir Escribir Un Nombre..!');
                return false;
            }
            var txtApellido_Usu = document.getElementById("txtApellido_Usu").value;
            if (txtApellido_Usu.length == ""){
                alert('Deber Escribir Un Apellido..!');
                return false;
            }
            var txtUsuario = document.getElementById("txtUsuario").value;
            if (txtUsuario.length == ""){
                alert('Debe Escribir Un Usuario..!');
                return false;
            }
            var txtClave = document.getElementById("txtClave").value;
            if (txtClave.length == ""){
                alert('Debe Escribir Una Clave..!');
                return false;
            }
            var ddlEstado = document.getElementById("ddlEstado").value;
            if(ddlEstado.length == ""){
                alert('Debe Seleccionar Estado');
                return false;
            }
            var ddlPerfilP =document.getElementById("ddlPerfilP").value;
            if (ddlPerfilP.length == ""){
                alert('Debe Seleccionar Un Perfil Al Usuario');
                return false;
            }

                var idusuario = $("#idusuario").val(),
                    nombreu =$("#txtNombre_Usu").val();
                    apellidou =$("#txtApellido_Usu").val();
                    usuario =$("#txtUsuario").val();
                    clave =$("#txtClave").val(); 
                    estatus = $("#ddlEstado").val();
                    rol = $("#ddlPerfilP").val();

                var datos = new FormData();
                    datos.append('idusuario',idusuario);
                    datos.append('nombreu',nombreu);
                    datos.append('apellidou',apellidou);
                    datos.append('usuario',usuario);
                    datos.append('clave',clave);
                    datos.append('estatus',estatus);
                    datos.append('rol',rol);
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
                            url:"ajax/usuarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                                $("#modal-gestionar-usuarios").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                                table.ajax.reload(null,false);

                                //PARA LIMPIAR LOS CAMPOS DEL MODAL
                                $("#idusuario").val("");
                                $("#txtNombre_Usu").val("");
                                $("#txtApellido_Usu").val("");
                                $("#txtUsuario").val("");
                                $("#txtClave").val("");
                                $("#ddlEstado").val([""]);
                                $("#ddlPerfilP").val([""]);

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

