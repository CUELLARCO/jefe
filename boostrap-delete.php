<html lang="es">
<head>
  <title>Borrar Cliente</title>
  <!-- Agrega el enlace a la hoja de estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <h1 class="mb-4">Borrar Cliente</h1>
    <?php
    $conexion = mysqli_connect("localhost", "id22060270_juan", "Juan@1234", "id22060270_juan") or
      die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select apodo from cliente
                          where cedula='$_REQUEST[cedula]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
      mysqli_query($conexion, "delete from cliente where cedula='$_REQUEST[cedula]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
      echo '<div class="alert alert-success">Se efectuó el borrado del cliente.</div>';
    } else {
      echo '<div class="alert alert-danger">No existe un cliente con esa cédula.</div>';
    }
    mysqli_close($conexion);
    ?>

    <!-- Formulario para volver -->
    <form action="BORRA-INFO.html" method="post">
      <button type="submit" class="btn btn-primary">Volver</button>
    </form>
  </div>

</body>
</html