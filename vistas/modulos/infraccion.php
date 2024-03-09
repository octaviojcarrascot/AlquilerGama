
<section class="content-header " id = "infraccion">

    <div class="contrainer-fluid">

        <div class="row mb-2">
             <div class="col-sm-6">
                <h1>Registro Infracción</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Infracción</li>
                </ol>
            </div>

        </div>
    </div>

        <div class="modal-content col-sm-12">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Infracción</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                 <div class="row">
                    <br>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Fecha Reporte:</label>
                            <input type="date" class="form-control" name="fechareporte" id="txtFechareporte" placeholder="Ingrese la Fecha 99/99/9999">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Hora Reporte:</label>
                            <input type="text" class="form-control" name="horareporte" id="txtHorareporte" placeholder="Ingrese la Hora 00:00">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-infraccion" data-dismiss="modal"><i class="fas fas-plus-square">Cargar Imagen</i></button>
                        </div>
                    </div>
                    
                </div>   
                <br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="from-groud">
                            <input type="hidden" id ="infraccion" name ="infraccion" value = "">
                            <label for="">Motivo de la Infraccón:</label>
                            <input type="text" class="form-control" name="infraccion" id="txtInfraccion" placeholder="Ingrese el Motivo de Infracción" onkeypress="return valideKey(event);">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Vehiculo:</label>
                            <input type="text" class="form-control" name="vehiculo" id="txtVehiculo" placeholder="Ingrese el Vehiculo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Dominio:</label>
                            <input type="text" class="form-control" name="dominio" id="txtDominio" placeholder="Ingrese el Dominio">
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Color:</label>
                            <input type="text" class="form-control" name="color" id="txtColor" placeholder="Ingrese el Color">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                      <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-infraccion" data-dismiss="modal"><i class="fas fas-plus-square">Cargar Propietario</i></button>

                </div>    
                <div class="row">
                    <br>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombrep" id="txtNombre" placeholder="Ingrese el Nombre">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Apelldo:</label>
                            <input type="text" class="form-control" name="apellidop" id="txtNombre" placeholder="Ingrese el Apellido">
                        </div>
                    </div>
                     <div class="col-sm-2">
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
                    <div class="col-sm-2">
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
                    <div class="col-sm-2">
                         <div class="from-groud">
                            <label for="ddlDpto">Departamento:</label>
                            <select name="dpto" id="ddlDpto" class="form-control select2bs4" >
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
                <hr>
                <div class="row">
                    <br>
                    <div class="col-sm-3">
                        <div class="from-groud">
                            <label for="">Responsable:</label>
                            <input type="text" class="form-control" name="responzable" id="txtResponzable" placeholder="Ingrese el Responzable">
                        </div>
                    </div>
                </div>    

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Limpiar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
              
            </div>
        </div>
         </div>
        </div>

                    


</section>
<hr>
<section class="content">

    <div class="container-fluid  col-sm-12">
 
        <table id="tablaInfraccion" class="table table-striped table-bordered nowrap" style="width: 180%;">
            <thead class="btn-info">
                <tr>
            
                    <td style= "width: 5%;">Id</td>
                    <td style= "width: 10%">Fecha</td>
                    <td style= "width: 5%">Hora</td>
                    <td style= "width: 15%">Vehiculo</td>
                    <td style= "width: 10%;">Dominio</td>
                    <td style= "width: 15%">Nombre</td>
                    <td style= "width: 15%">Apellido</td>
                    <td style= "width: 15%">Torre</td>
                    <td style= "width: 5%">Piso</td>
                    <td style= "width: 15%">Dpto</td>
                    <td style= "width: 20%">Responsable</td>
                    <td style= "width: 20%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</section>

 <!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
<div class="modal fade" id="modal-gestionar-infraccion">

    <div class="modal-dialog modal.lg" style="width: 100%;">

        <div class="modal-content" style="width: 121%;">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Cargar Propietario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body" style="width: 100%;">
                <div class="row">
                   <table id="tablaPropietarios" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 10%;">Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td style="width: 10%;">Torre</td>
                    <td style="width: 10%;">Piso</td>
                    <td style="width: 10%;">Dpto</td>    
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

<script src="js/infraccion.js"></script>