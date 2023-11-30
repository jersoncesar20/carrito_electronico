<?php
include("conexion.php");


$fechaHoraVenta=$_POST['fecha_pedido'];
$echaEntrega=$_POST['fecha_entrega'];
$monto=$_POST['monto'];
$comprobante=$_POST['comprobante'];
$estado=$_POST['estado'];



$consulta="INSERT INTO pedidos (fecha_pedido, fecha_entrega, monto, comprobante, estado) 
            VALUES ('$fechaHoraVenta','$echaEntrega','$monto','$comprobante','$estado')";



$ejecutar = mysqli_query($conn, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>