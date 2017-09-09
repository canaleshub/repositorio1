<?php
//conectamos Con el servidor
$conectar=@mysql_connect('localhost:3306','root','$12345678');
//verificamos la conexion
if(!$conectar){
echo"No Se Pudo Conectar Con El Servidor";
}else{
$base=mysql_select_db('consumoelectrico');
if(!$base){
echo"No Se Encontro La Base De Datos";
}
}
//recuperar las variables
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
//hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES('$dni',
'$nombre',
'$apellido')";
//ejecutamos la sentencia de sql
$ejecutar=mysql_query($sql);
//verificamos la ejecucion
if(!$ejecutar){
echo"Hubo Algun Error";
}else{
echo"Datos Guardados Correctamente<br><a href='index1.html'>Volver</a>";
}
?>
