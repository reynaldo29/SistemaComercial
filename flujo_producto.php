<!DOCTYPE html>
<?php include_once "crud_productos.php" ;?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="/css/master.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>Proyecto</title>
  </head>
  <div class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="flujo_producto.php">Comercio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rel_diplo.php">R.Diplomaticas</a>
          </li>
        </ul>


            <a href="salir.php"><button class="btn btn-outline-danger" type="submit">Exit</button></a>

      </div>
    </div>
  </nav>
  </div>

  <body>
    <h3 align='center'>COMERCIO EXTERIOR E INTERIOR</h3>
    <hr><br><br>
<div class="tab">
<div class="container-lg">
  <table class="table table-hover">
    <header>
      <tr>
        <td>ID</td>
        <td>PRODUCTO</td>
        <td>PROCENDENCIA</td>
        <td>PAIS</td>
        <td>RELACION</td>
        <td colspan="2">ACCION</td>
      </tr>
    </header>
    <?php
    $result= $MySQLiconn->query("SELECT productos.id, productos.nombre, productos.procedencia, pais.nombre, r_comercial.relacion
      FROM productos INNER JOIN pais ON productos.pais = pais.id
      INNER JOIN r_comercial ON productos.r_comercial = r_comercial.id");

      while ($row=$result->fetch_array()) {
        ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><a href="form_prod.php?edit=<?php echo $row[0];?>"><i class="bi bi-pencil"></i></td>
          <td><a href="?del=<?php echo $row[0];?>"><i class="bi bi-x"></i></td>
        </tr>
        <?php
    }
      ?>
  </table>

</div>
<br>
<center>
  <p align="right">  <a href="form_prod.php"><button class= "btn btn-primary btn-flat" type="submit" name="" ><i class="bi bi-file-earmark-plus"></i> Nuevo</button></a></p>
    <p align="right">  <a href="form_pais.php"><button class= "btn btn-success btn-flat" type="submit" name="" ><i class="bi bi-file-earmark-plus"></i> Pais</button></a></p>
</center>

</div>
  </body>
</html>
