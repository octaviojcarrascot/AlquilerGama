<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Alquiler Cocheras</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Alquiler Cocheras</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-alquilercochera btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-alquilercochera" data-dismiss="modal"><i class="fas fas fa-bus">   Asignar Alquiler Cochera</i></button>
        </div>
        <table id="tablaAlquilerCocheras" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>N° Cochera</td>
                    <td>Tiempo</td>
                    <td>Fecha Ingreso</td>
                    <td>Hora Ingreso</td>
                    <td>Fecha Egreso</td>
                    <td>Hora Egreso</td>
                    <td>Vehiculo</td>
                    <td>Dominio</td>
                    <td style="width: 10%;">Estado</td>
                    <td style="width: 10%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>

<!--VENTANA MODAL PARA ASIGNACION DE COCHERA-->
<div class="modal fade" id="modal-gestionar-alquilercochera">

    <div class="modal-dialog modal.lg"  style="width: 150%;">

        <div class="modal-content"  style="width: 150%;">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Alquiler Cocheras</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
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

                  
                <div class="col-sm-2">
                           <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-cochera" data-dismiss="modal"><i class="fas fas-plus-square">Cargar Cochera</i></button> 
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
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>
        </div>
         </div>
        </div>


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

<!--VENTANA MODAL PARA LIBERAR COCHERA-->

<div class="modal fade" id="modal-gestionar-liberarcochera">
    
    <div class="modal-dialog modal.lg"  style="width: 80%;">

        <div class="modal-content"  style="width: 80%;">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">LIBRAR COCHERA</h4></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
             <div class="modal-body" style="width: 110%;">
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Cochore:</label>
                            <input type="text"  class="form-control" name="numerocochera" id="txtCochera" placeholder="Ingrese la Cochera">
                        </div>
                   </div>

                    <div class="col-sm-6">
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
               
            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary"><i class="fas fas fa-bus">  Liberar Cochera</i></button>
            </div>
        </div>
         </div>
        </div>
   

<script src ="js/alquiler.cochera.gama.js"></script>



