<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Cochera</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Registrar Cochera</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-cochera btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-cochera" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Cocheras</i></button>
        </div>
        <table id="tablaCocheras" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 10%;">Id</td>
                    <td>Cochera</td>
                    <td>Piso</td>
                    <td>Estatus</td>
                   
                    <td style="width: 30%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>

<!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
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
                   
                              
                </div>

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>

            </div>
        </div>
    </div>

</div>
<script src = "js/cargar.cochera.js"></script>