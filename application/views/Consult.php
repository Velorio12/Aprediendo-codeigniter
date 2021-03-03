<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<title> upgrate</title>
<body>
<div class="container container-default">
<div class="container container-default ">
<div class="Jumbotron">
<div>
<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");
mysqli_query($conexion, "update crud
	set Nombre='$_REQUEST[nombre]'
	where Nombre ='$_REQUEST[vinombre]'") or
	die("Problemas en el select:" . mysqli_error($conexion));
	echo "El mail fue modificado con exito";

 mysqli_query($conexion, "update crud
	set Apellido='$_REQUEST[ap]'
	where Apellido ='$_REQUEST[viap]'") or
	die("Problemas en el select:" . mysqli_error($conexion));
	
	mysqli_query($conexion, "update crud
	set Edad=$_REQUEST[edad]
	where Edad =$_REQUEST[viedad]") or
	die("Problemas en el select:" . mysqli_error($conexion));
	
	mysqli_query($conexion, "update crud
	set Email='$_REQUEST[email]'
	where Email ='$_REQUEST[viemail]'") or
	die("Problemas en el select:" . mysqli_error($conexion));
	mysqli_close($conexion);
?>
</div>
<br>
<br>
<br>
<form action="inicio.php">
 <input type="submit" value="Volver" class="btn-lg btn-primary aling-left" >
 </div>
</div>
</div>
</form>
</body>
</head>
</html>