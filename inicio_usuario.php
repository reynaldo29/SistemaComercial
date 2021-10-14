<?php include_once ('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <title>Usuario</title>
</head>
<body>
    <header class="header content">
      <div class="transparente"></div>
      <div class="header-content">
        <h1>HOLA USUARIO</h1>
        <?php
          $datos = $MySQLiconn->query("SELECT * FROM usuarios");
          $row = $datos->fetch_array()
        ?>

        <h1><?php echo $row['nombre']; ?></h1>
        <p>Tienes acceso para visualizar el resto de las funcionalidades de la aplicación</p>

        <!---Botones--->
        <a href="rel_diplo.php" class="btn">RELACIÓN DIPLOMÁTICA</a>
        <a href="flujo_producto.php" class="btn">FLUJO DE PRODUCTOS</a>

      </div>
    </header>
    <script src =" https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script >
    <script src="js/alerta.js"></script>
</body>
</html>
