<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("Hospital",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select dept_no,dnombre,loc
                       from dept",$conexion) or
  die("Problemas en el select:".mysql_error());

while ($reg=mysql_fetch_array($registros))
{
  echo "Departamento:".$reg['dept_no']."<br>";
  echo "Nombre:".$reg['dnombre']."<br>";
  echo "Localidad:".$reg['loc']."<br>";
  
  echo "<br>";
  echo "<hr>";
}
mysql_close($conexion);
?>
</body>
</html>
