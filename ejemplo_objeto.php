<?php
$lista=array("alfredo","yul", "eliana","wilian","stewar","deysi","raul","zamira","mayte","bruno","rosy","jerson","dennise","aaron","magaly");

$contar = count($lista);
print_r($lista);


echo"<br>";
array_push($lista,"anibal");
/*
$contar = count($lista);
for ($i=0; $i <=$contar ; $i++) { 
    echo $lista[$i]."<br>";
}
    */

$lista2 = array("alfredo"=>40, "yul"=>40);

print_r($lista2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

include('conexion.php');

$lista3 = array();

$consulta = "SELECT * FROM producto";
$ejecutar = mysqli_query($conn,$consulta);
while($r_ejecutar =mysqli_fetch_array($ejecutar)){  
    $lista3[$r_ejecutar['id']]= $r_ejecutar['descripcion'];
   
}
print_r($lista3);
?>