
<button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".clientes">+ Agregar</button>


<div class="modal fade clientes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <center>
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Registrar clientes</h5>
                                                    </center>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                        <form action="operaciones/registrar_clientes.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">ruc_dni:</label>
                                <input type="number"class="form-control col-lg-4 col-md-4 col-sm-12"  name="dni" autocomplete="off"placeholder="Ingrese su Dni " required >

                            </div>



                            <div class="form-group row">
                            <label class="col-lg-2 col-md-2 col-sm-12" for="">razon_social</label>
                            <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="a_n"placeholder="Ingrese su apellido y su nombre  "required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">telefono</label>
                                <input type="number"class="form-control col-lg-10 col-md-10 col-sm-12"  name="telefono  "placeholder="Ingrese su Correo"required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Direccion:</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion"placeholder="Ingrese su Direccion"required>

                            </div>




                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">correo</label>
                                <input type="email"class="form-control col-lg-10 col-md-10 col-sm-12"  name="correo"placeholder="Ingrese su Correo"required>

                            </div>
                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">direccion_envio</label>
                                <input type="text"class="form-control ol-lg-10 col-md-10 col-sm-12"  name="direccion"placeholder="Ingrese su Direccion"required>

                            </div>

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for="">Rol</label>
                                
                             <select name="rol" class="form-control col-lg-4 col-md-4 col-sm-12" id="" type="file">
                           <optio value=""></optio>
                             <?php
                             $consulta_rol="SELECT*FROM roles";
                             $ejecutar= mysqli_query($conn, $consulta_rol);
                             while($datos_roles=mysqli_fetch_array($ejecutar)){?>
                            


                              <option value="<?php echo  $datos_roles['id'];?>"><?php  echo $datos_roles['nombre'];?></option>
                          
                             
                             
                            
                             <?php }?>
                            
                             </select>
                            </div>



                            

                            <div class="form-group row ">
                                <label class="col-lg-2 col-md-2 col-sm-12" for=""></label>
                                <button type="submit" class="btn btn-primary ">Registrar</button>

                            </div>

                      
                      


                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>