
<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Propietario</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Propietario</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-propietarios btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-propietarios" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Propietario</i></button>
        </div>
        <table id="tablaPropietarios" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>Nombre Propietario</td>
                    <td>Apellido Propietario</td>
                    <td>Torre</td>
                    <td style="width: 5%;">Piso</td>
                    <td style="width: 5%;">Dpto</td>
                    <td style="width: 20%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>
<!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
<div class="modal fade" id="modal-gestionar-propietarios">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Propietarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <input type="hidden" id ="idpropietario" name ="nombrep" value = "">
                            <label for="">Nombre Propietario</label>
                            <input type="text" class="form-control" name="nombrep" id="txtNombreP" placeholder="Ingrese Nombre Propietario.." requered>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="">Apellido Propietario</label>
                            <input type="text" class="form-control" name="apellidop" id="txtApellidoP" placeholder="Ingrese la Apellido Propietario..">
                        </div>
                    </div>
                </div>
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
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>

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
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>

            </div>
        </div>
    </div>

</div>

<script src = "js/propietario.js">

   


</script>