<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title></title>
    </head>
    <body bgcolor="blue">
     Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
    Usted tiene <?php echo (int)$_POST['edad']; ?> años de edad y aparenta muchísimo menos.
    </body>
</html>
