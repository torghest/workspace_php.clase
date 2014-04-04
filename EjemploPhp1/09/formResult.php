<html>
<head>
<title>Subida de ficheros</title>
</head>
<body>
<?php
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
echo "La foto se registro en el servidor.<br>";
$fichero=$_FILES['foto']['name'];
echo "<img src=\"$fichero\">";
?>
</body>
</html>
