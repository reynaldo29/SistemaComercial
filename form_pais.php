<?php
include_once "crud_pais.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link  rel = " stylesheet " href = " https://use.fontawesome.com/releases/v5.0.8/css/solid.css " >
    <meta charset="utf-8">
    <title></title>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <style media="screen">
  @charset "UTF-8";
    body{
      background-image: url(https://www.toptal.com/designers/subtlepatterns/patterns/floor-tile.png);
    }
    .seccion-principal{
    	margin: auto;
    	margin-top: 15%;
    	padding: 0;
    }
    .encabezado{
      font-family: Didot, serif;
    }
  </style>
  <body>
      <div class="container modal-dialog">
          <div class="col-sm-8 seccion-principal">
            <div class="modal-content border-info ">
              <form class="" method="post">
                <div class="card-header text-center encabezado  bg-info text-white">
                  <h3>REGISTRAR PAIS</h3>
                </div>
                  <div class="card-body">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="id" id="nombre" placeholder="ID">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="procedencia" placeholder="Pais">
                    </div>
                    <div class="col-12 text-center">
                      <?php
                        if(isset($_GET['edit'])){
                          ?>
                          <button type="submit" class="btn btn-warning" name="update"><i class="fas fa-sign-in-alt"></i> Modificar</button>
                          <?php
                        }else {
                          ?>
                          <button type="submit" class="btn btn-success" name="save" onclick="return confirm('¿Desea agregar este nuevo pais?')"><i class="fas fa-sign-in-alt"></i> Agregar</button>
                          <?php
                        }
                       ?>
                    </div>
                  </div>
                </form>
                <div class="card-footer text-center bg-info text-white encabezado">
                  <h6><?php echo date("d") . " del " . date("m") . " de " . date("Y"); ?></h6>
                </div>
                </div>
          </div>
      </div>
  </body>
</html>
