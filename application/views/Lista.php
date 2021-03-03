<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<title> Lista </title>
<center>

<h1> Listado </h1>
</center>
<body>
<div class="container container-default" >


<div class="btn-lg btn-default btn-block">
<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select *from crud") or
die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
echo "ID:" . $reg['ID'] . "<br>";
echo "Nombre:" . $reg['Nombre'] . "<br>";
echo "Apellido:" . $reg['Apellido'] . "<br>";
echo "Edad:" . $reg['Edad'] . "<br>";
echo "Email:" . $reg['Email'] . "<br>";

echo "<br>";
echo "<hr>";
}

?>


<br><br>
<br>
</div>
</div>

</body>

</head>
</html>