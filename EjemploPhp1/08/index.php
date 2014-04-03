<?php
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","") or
  die("Problemas en la conexion");
mysql_select_db("hospital",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select dept_no,dnombre,loc from dept
                       limit $inicio,2", $conexion) or
  die("Problemas en el select:".mysql_error());
$impresos=0;
while ($reg=mysql_fetch_array($registros))
{
  $impresos++;
  echo "Dept_no:".$reg['dept_no']."<br>";
  echo "Dnombre:".$reg['dnombre']."<br>";
  echo "Loc:".$reg['loc']."<br>";
  echo "<hr>";
}
mysql_close($conexion);
if ($inicio==0)
  echo "anteriores ";
else
{
  $anterior=$inicio-2;
  echo "<a href=\"index.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==2)
{
  $proximo=$inicio+2;
  echo "<a href=\"index.php?pos=$proximo\">Siguientes</a>";
}
else
  echo "siguientes";
?>
</body>
</html>
