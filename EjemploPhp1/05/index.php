<html>
<head>
<title>Insertar en DEPT</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("Hospital",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into DEPT values 
    (10,'CONTABILIDAD','SEVILLA')",
        $conexion) or die("Problemas en el select [".mysql_error()."]");
mysql_close($conexion);
echo "El departamento fue dado de alta.";
?>
</body>
</html>
