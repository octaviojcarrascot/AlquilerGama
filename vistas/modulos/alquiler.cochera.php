<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">
             <div class="col-sm-6">
                <h1>Registro  Alquiler de Cochera</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Registro Alquiler de Cochera</li>
                </ol>
            </div>

        </div>
    </div>

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Registro Alquiler de Cocheras</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Cochore:</label>
                            <input type="text" class="form-control" name="cochera" id="txtCochera" placeholder="Ingrese la Cochera">
                        </div>
                   </div>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Estatus:</label>
                            <input type="text" class="form-control" name="estatus" id="txtEstatus" placeholder="Estatus">
                        </div>
                    </div>
                    <div class="col-sm-2">
                           <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-cochera" data-dismiss="modal"><i class="fas fas-plus-square">Cargar Cochera</i></button> 
                    </div>
                   
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombrep" id="txtNpmbrep" placeholder="Nombre Propietario">
                            
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
                            <label for="ddlTiempoalquiler">Tiempo de Alquiler</label>
                            <select name="tiempo" id="ddlTiempoalquiler" class="form-control select2bs4" >
                                <option value="0">...</option>
                                <option value="1">3 Horas</option>
                                <option value="2">6 Horas</option>
                                <option value="3">12 Horas</option>
                                <option value="4">24 Horas</option>

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
                            <label for="">Fecha Ingreso:</label>
                            <input type="date" class="form-control" name="fechareporte" id="txtFechareporte" placeholder="Ingrese la Fecha 99/99/9999">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Hora Ingreso:</label>
                            <input type="text" class="form-control" name="horareporte" id="txtHorareporte" placeholder="Ingrese la Hora 00:00">
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
                                <option value="0">Aconcagua</option>
                                <option value="1">Catedral</option>
                                <option value="2">Champaqui</option>
                                <option value="3">Cerro Colorado</option>
                                <option value="4">Bastión</option>
                                <option value="5">Pan de Azucar</option>
                                <option value="0">Tronador</option>
                                <option value="1">Los Gigantes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="from-groud">
                            <label for="ddlPiso">Piso:</label>
                            <select name="piso" id="ddlPiso" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="0">01</option>
                                <option value="1">02</option>
                                <option value="2">03</option>
                                <option value="3">04</option>
                                <option value="4">05</option>
                                <option value="5">06</option>
                                <option value="6">07</option>
                                <option value="7">08</option>
                                <option value="8">09</option>
                                <option value="9">10</option>
                                <option value="10">11</option>
                                <option value="11">12</option>
                                <option value="12">13</option>
                                <option value="13">14</option>
                                <option value="14">15</option>
                                <option value="15">16</option>
                                <option value="16">17</option>
                                <option value="17">18</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="from-groud">
                            <label for="ddlDpto">Departamento:</label>
                            <select name="rol" id="ddlDpto" class="form-control select2bs4" >
                                <option value="">...</option>
                                <option value="0">A</option>
                                <option value="1">B</option>
                                <option value="2">C</option>
                                <option value="3">D</option>
                                <option value="4">E</option>
                                <option value="5">F</option>
                                <option value="6">G</option>
                                <option value="7">H</option>

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
         </section>

<!--VENTANA MODAL PARA CARGAR COCHERA-->
<div class="modal fade" id="modal-gestionar-cochera">

    <div class="modal-dialog modal.lg" style="width: 100%;">

        <div class="modal-content" style="width: 100%;">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Cargar Cochera</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                   <table id="tablaCochera" class="table table-striped table-bordered nowrap" style="width: 100%;">
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

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>

</div>

<!--VENTANA MODAL PARA CARGAR PROPIETARIO-->

<div class="modal fade" id="modal-gestionar-propietario">

    <div class="modal-dialog modal.lg" style="width: 100%;">

        <div class="modal-content" style="width: 100%;">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Cargar Propietario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                   <table id="tablaPropietarios" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 10%;">Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    
                    <td style= "width: 20%;">Acciones</td>              
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
                </div>

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>

</div>

<script src="js/alquiler.cochera.js"></script>