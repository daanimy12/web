<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$conecar= mysql_connect('localhost:8080','root','123456789');
if(!$conecar){
    echo 'error al conectar';
}else{
    $base=mysql_select_db('web');
    if(!$base){
        echo 'no se encontro bd';
    }
}
$sql="INSERT INTO web VALUES('$nombre','$email','$comentario')";
$ejecutar=mysql_query($sql);
if(!$ejecutar){
    echo 'no se envio nada';
}else{
    echo 'datos guardados<a href="index.html" >volver</a>';
}
echo "<h2>Listo a continuar..</h2>";
echo "<h2>Nombre: ".$nombre. "</h2>"; 
?>