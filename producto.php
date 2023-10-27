<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css">
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
   <?php include ("include/menu.php");

   ?>
   <div class="main-content">
    <div class="page-content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <center>
                    <h4>registro de producto</h4>
                    </center>
                    <div class="card">
                        <div class="card-body">
                        <form action="operaciones/registrar_usuarios.php" method="POST">
                        <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">id:</label>
                                <input type="number" name="dni" placeholder="Ingrese el id" class="form-control col-lg-4 col-md-4 col-sm-12 "required>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >descripcion:</label>
                                
                                <input type="text" name="nombre" placeholder="Ingrese la descripcion" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >detalle</label>
                                <input type="text" name="correo" placeholder="Ingrese el detalle" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >precio_compra</label>
                                <input type="num" name="direccion" placeholder="Ingrese el precio" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >precio_venta</label>
                                <input type="num" name="direccion" placeholder="Ingrese la venta" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >stock</label>
                                <input type="num" name="correo" placeholder="Ingrese el stock" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >estado</label>
                                <input type="text" name="direccion" placeholder="Ingrese el estado" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12" >imagen</label>
                                <input type="text" name="direccion" placeholder="Ingrese la imagen" class="form-control col-lg-10 col-md-6 col-sm-12"required>
                            </div>
                           
                            
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary">GUARDAR</button>

                            </div>   
                                   
                        </div>
                        
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

   </div>
   <!-- jQuery  -->
   <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
    
</body>
</html>