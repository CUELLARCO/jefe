<html>

<head>
  <title>ver</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "avanzado2") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select apodo,genero,curso
                        from cliente where cedula='$_REQUEST[cedula]'") or
    die("Problemas en el select:" . mysqli_error($conexion));


    if ($reg = mysqli_fetch_array($registros)) {
      echo "<table border='1'>";
      echo "<tr><th>Apodo</th><th>Género</th><th>Curso</th></tr>";
      echo "<tr><td>" . $reg['apodo'] . "</td><td>" . $reg['genero'] . "</td><td>" . $reg['curso'] . "</td></tr>";
      echo "</table>";

    } else {
      echo "No existe un usuario con esa cédula.";
    }

    

  mysqli_close($conexion);
  ?>
   <form action="pagina-busque.html" method="post">

  <button type="submit" class="btn btn-primary">volver</button>

  </form>

</body>

</html>
