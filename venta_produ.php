<?php include("conexion.php");
session_start();
$_SESSION['productos'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cesar</title>

    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- Script obtenido desde CDN jquery -->
    

</head>
<body>
<?php
include('include/header.php');
?>
<!--INICIO DE CONTENIDO-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!--conteiner solo se usa el 80% de la pantalla conteiner-fluid ocupa todo-->
            <div class="row"><!--row ayuda a ser responsive pero en bootstrap-->
                <div class="col-12">

                    
                    <h4>REGISTRO DE VENTAS</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-12">
                              <form action="registrar_venta.php" method="POST">

                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">Dni:</label>
                                    <input type="number" name="dni"class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder>
                                    <button id="span1"id="span2" id="span3" id="span4"  class="btn btn-info col-lg-2 col-md-2 col-sm-4">Buscar</button>
                                </div>

                               

                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">Apellidos y Nombres:</label>
                                    <input type="text" name="numero_venta"class="form-control col-lg-7 col-md-10 col-sm-12" reandonly>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">Usuario:</label>
                                    <select name="usuario" id="usuario" class="form-control col-lg-8 col-md-8 col-sm-12">
                                        <option value="">Usuario 1</option>
                                        <option value="">Usuario 2</option>
                                        <option value="">Usuario 3</option>
                                       
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">Producto:</label>
                                    <input type="number" name="producto" id="producto" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder>
                                    <button  type="button"class="btn btn-info col-lg-2 col-md-2 col-sm-4">Agregar</button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">Fecha_Hora:</label>
                                    <label for=""class="form-control col-lg-7 col-md-10 col-sm-12">
                                    <?php date_default_timezone_set("America/Lima");
                                    echo date("Y-m-d h-m-i");?>
                                    </label>
                                </div>
                            
                            
                            </form>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                        
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>    
                                            <th colspan="5" id="prod" class="text-center">productos</th>
                                        </tr>
                                        <style>
                                            .ifm{
                                                background color: red;
                                            }
                                        </style>
                                        <tr>
                                            <th class="ifm" width="5%">nro</th>
                                            <th  class="ifm" width="60%">descripcion</th>
                                            <th class="ifm" width="10%">cant.</th>
                                            <th class="ifm" width="10%">p.unit.</th>
                                            <th class="ifm" width="5%">importes</th>

                                        </tr>

                                    </thead>
                                    <tbody id="contenido_tabla">
                                        <?php 
                                        $array_productos = $_SESSION['productos'];
                                        foreach ($array_productos as $key => $value) {
                                            // key =>id  value =>cantidad
                                            $consulta = "SELECT * FROM producto WHERE id='$key'";
                                            $ejecutar = mysqli_query($conn, $consulta);
                                            $producto = mysqli_fetch_array($ejecutar);
                                      
                                            ?>
                                        <tr>
                                        <td>1</td>
                                        <td>nombre producto</td>
                                        <td><input type="number" value="2" class="cantidad" onchange="actualizar_cantiad(id);"></td>
                                        <td>S/. 50.00</td>
                                        <td>S/. 100.00</td>
                                        <td><button class="btn btn-danger" onclik="eliminar_producto(i);">X</button></td>
                                        </tr>
                                        <?php }  ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Total</td>
                                            <td>S/. 100.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                             
            

                          
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIN DE CONTENIDO-->



    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <!-- Script obtenido desde CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <script>
        function agregar_producto(){
            var codigo = $('#producto').val();
            $.ajax({
                type:"POST",
                url:"agregar_producto",
                data:{cod:codigo},
                success: function(r){
                    $('#contenido_tabla').html(r);
                }          
             })

        };
        function actualizar_cantidad(id){

        };
        function eliminar_producto(id){

        };
        </script>
</body>
</html>