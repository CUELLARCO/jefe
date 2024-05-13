<html>

<head>
  <title>ACTULIZAR</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "avanzado2") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from cliente
                        where cedula='$_REQUEST[cedula]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="update2.php" method="post">
      Ingrese nuevo curso:
      <input type="text" name="mailnuevo" value="<?php echo $reg['curso'] ?>">
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['curso'] ?>">
      
      <input type="submit" class="btn btn-primary" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>

<form action="update.html" method="post">

<button type="submit" class="btn btn-primary">volver</button>

</form>

</body>

</html>