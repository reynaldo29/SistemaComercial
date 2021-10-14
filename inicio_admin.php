<?php include_once("crud_usuarios.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Usuario</title>
</head>
<body>
    <header class="header content">
      <div class="transparente"></div>
      <div class="header-content">
        <h1>HOLA SUPER ADMINISTRADOR</h1>
        <?php
          $datos = $MySQLiconn->query("SELECT *FROM administrador");
          $row = $datos->fetch_array()
        ?>

        <h1><?php echo $row['nombre']; ?></h1>
        <p>Tienes acceso a ver el listado de usuario, registrar, modificar y eliminar usuario</p>
        <div class="tab">
<div class="container-lg">
  <table class="table table-hover">
    <header>
      <tr>
        <td>ID</td>
        <td>USUARIO</td>
        <td>CONTRASEÑA</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>EDAD</td>
        <td>GÉNERO</td>
        <td>CORREO</td>
        <td colspan="2">ACCION</td>
      </tr>
    </header>
    <?php
    $result= $MySQLiconn->query("SELECT id,user_name,contrasena,nombre,apellido,edad,genero,correo FROM usuarios");

      while ($row=$result->fetch_array()) {
        ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
          <td><?php echo $row[7]; ?></td>

          <td><a href="form_usuario.php?edit=<?php echo $row[0];?>"><i class="bi bi-pencil"></i></td>

          <td><a href="?del=<?php echo $row[0];?>"><i class="bi bi-x"></i></td>
        </tr>
        <?php
    }
      ?>
  </table>

</div>
<br>
<center>
  <p align="center">  <a href="form_usuario.php"><button class= "btn btn-primary btn-flat" type="submit" name="" ><i class="bi bi-file-earmark-plus"></i> Nuevo</button></a> <a href="salir.php"><button class= "btn btn-danger btn-flat" type="submit" name="" ><i class="bi bi-x-lg"></i>Salir</button></a></p>
</center>
</div>

      </div>
    </header>
    <script src =" https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script >
    <script src="js/alertaA.js"></script>
</body>
</html>
