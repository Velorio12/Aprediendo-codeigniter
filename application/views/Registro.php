
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<body>
<div class="container container-default">
<div class="container container-default ">
<div class="Jumbotron">
<div align="center"> 
<form method="post">
<h2>Registro</h2>
              
				
 <input type="text" name="nombre" value="" placeholder="Nombre" class="btn-lg btn-sucess btn-block">
<br>
<br>
<input type="text" name="ap" value="" placeholder="Apellido " class="btn-lg btn-sucess btn-block">
<br>
<br>
<br>
<input type="int" name="edad" value="" placeholder="Edad" class="btn-lg btn-sucess btn-block">
<br>
<br>
<br>
<input type="int" name="email" value="" placeholder="Email" class="btn-lg btn-sucess btn-block">
<br>
<br>
   <input type="submit" name="boton2" value="Registrar" class="btn-lg btn-primary btn-block">
  
 
  <div align=="center">
  <br>
  
  <?php
 
 if(isset($_REQUEST["boton2"])){
 $conexion = mysqli_connect("localhost", "root", "", "base1") or
 die("Problemas con la conexión");
 if($_REQUEST['nombre'] == "" and $_REQUEST['ap'] == "" and $_REQUEST['edad'] == "" and $_REQUEST['email'] == ""){

echo "Debe llenar los campos requeridos";

}
else{
 mysqli_query($conexion, "insert into crud(Nombre,Apellido,Edad,Email) values
 ('$_REQUEST[nombre]','$_REQUEST[ap]',$_REQUEST[edad],'$_REQUEST[email]')")
 or die("Problemas en el select" . mysqli_error($conexion));
 
 mysqli_close($conexion);
 }

 
}

	
?>
</div>
</form>
 </div>
 <br>
 <br>

 </div>
</div>
</div>

</div>
</body>
</head>
</html>