<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<title> Consulta </title>
<h1> Consultar </h1>
<body>
<div class="container container-default">
<div class="container container-default ">
<div class="Jumbotron">
<form>
 <h4>Ingrese el ID a consultar:</h4>
 <input type="text" name="ID" class="btn-lg btn-sucess btn-block">
 <br>
  <br>
 <input type="submit" name="boton1" value="Buscar" class="btn-lg btn-primary btn-block">
 <input type="submit" name="boton2" value="Eliminar" class="btn-lg btn-primary btn-block">
 <input type="submit" name="boton3" value="Modificar" class="btn-lg btn-primary btn-block">
  <br>
   <br>
 </form>  
<?php

$conexion = mysqli_connect("localhost", "root", "", "base1") or
 die("Problemas con la conexión");
if(isset($_REQUEST["boton1"])){
	
 $registros = mysqli_query($conexion, "select Nombre,Apellido,Edad,Email
 from crud where ID='$_REQUEST[ID]'") or
 die("Problemas en el select:" . mysqli_error($conexion));
 
 if ($reg = mysqli_fetch_array($registros)) {
 echo "Nombre: " . $reg['Nombre'] . "<br>";
  echo "Apellido: " . $reg['Apellido'] . "<br>";
  echo "Edad: " . $reg['Edad'] . "<br>";
   echo "Email: " . $reg['Email'] . "<br>";

 }
 else {
 echo "No existe un cliente con ese ID.";
 }
 
 
}

if(isset($_REQUEST["boton2"])){
	
 $registros = mysqli_query($conexion, "select * from crud
 where ID='$_REQUEST[ID]'") or
 die("Problemas en el select:" . mysqli_error($conexion));
 if ($reg = mysqli_fetch_array($registros)) {
 mysqli_query($conexion, "delete from crud where ID='$_REQUEST[ID]'") or
 die("Problemas en el select:" . mysqli_error($conexion));
 echo "Se efectuó el borrado del cliente con dicho ID.";
 } else {
 echo "No existe un cliente con ese ID.";
 }

}

if(isset($_REQUEST["boton3"])){
	
 $registros = mysqli_query($conexion, "select * from crud
 where ID='$_REQUEST[ID]'") or
 
 die("Problemas en el select:" . mysqli_error($conexion));
 if ($reg = mysqli_fetch_array($registros)) {
 ?>
 <h3>Modifica</h3>
 <form action="Consult.php" method="post">
 Ingrese su nuevo nombre:
  <br>
 <input type="text" name="nombre" value="<?php echo $reg['Nombre'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
 <input type="hidden" name="vinombre" value="<?php echo $reg['Nombre'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
  Ingrese su nuevo Apellido:
   <br>
 <input type="text" name="ap" value="<?php echo $reg['Apellido'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
 <input type="hidden" name="viap" value="<?php echo $reg['Apellido'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
  
  Ingrese su nueva Edad:
   <br>
<input type="text" name="edad" value="<?php echo $reg['Edad'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
 <input type="hidden" name="viedad" value="<?php echo $reg['Edad'] ?>" class="btn-lg btn-sucess btn-block">
<br>
  Ingrese su nuevo Email:
   <br>
<input type="text" name="email" value="<?php echo $reg['Email'] ?>" class="btn-lg btn-sucess btn-block">
 <br>
 <input type="hidden" name="viemail" value="<?php echo $reg['Email'] ?>" class="btn-lg btn-sucess btn-block">
  <br>
 <input type="submit" value="Modificar" class="btn-lg btn-primary btn-block">
 </form>
 <?php
 } else
 echo "No existe cliente con dicho ";

}
	mysqli_close($conexion);
?>
 
<br>
<br>
<br>
<br>
<br>
<form action="inicio.php">
 <input type="submit" value="Volver" class="btn-lg btn-primary aling-left">

 </div>
</div>
</div>
</form>
</body>



</head>
</html>