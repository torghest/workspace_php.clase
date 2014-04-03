<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title></title>
    </head>
    <body bgcolor="blue">
<?php
    $conexion=mysql_connect("localhost","root","") 
      or  die("Problemas en la conexion");

    mysql_select_db("Hospital",$conexion) 
      or  die("Problemas en la selección de la base de datos");

    $registro=mysql_query("select dept_no,dnombre,loc
                           from dept where dept_no = ".$_POST['dept_no'],$conexion) or
      die("Problemas en el select:".mysql_error());

    $reg = mysql_fetch_object($registro);
?>
  Departamento: <?php echo $reg->dept_no ?><br/>
  Nombre: <?php echo $reg->dnombre ?><br/>
  Localidad: <?php echo $reg->loc ?><br/>
<?php
  mysql_close($conexion);
?>
    </body>
</html>