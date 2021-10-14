<?php
include_once "crud_productos.php";
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
    body{
      background-image: url(https://www.toptal.com/designers/subtlepatterns/patterns/blue-snow.png);
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
                  <h3>REGISTRAR PRODUCTOS</h3>
                </div>
                  <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php if(isset($_GET['edit'])) echo $GetROW['nombre'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="procedencia" class="form-label">Procedencia:</label>
                        <input type="text" class="form-control" name="procedencia" id="procedencia" placeholder="Procedencia" value="<?php if(isset($_GET['edit'])) echo $GetROW['procedencia'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="r_comercial" class="form-label">Relacion comercial:</label>
                        <input type="text" class="form-control" name="r_comercial" id="r_comercial" placeholder="Relacion comercial" value="<?php if(isset($_GET['edit'])) echo $GetROW['r_comercial'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pais" class="form-label">Pais:</label>
                        <input type="text" class="form-control" name="pais" id="pais" placeholder="Pais" value="<?php if(isset($_GET['edit'])) echo $GetROW['pais'] ?>">
                    </div>

                    <div class="col-12 text-center">
                      <?php
                        if(isset($_GET['edit'])){
                          ?>
                          <button type="submit" class="btn btn-warning" name="update"><i class="fas fa-sign-in-alt"></i> Modificar</button>
                          <?php
                        }else {
                          ?>
                          <button type="submit" class="btn btn-success" name="save"><i class="fas fa-sign-in-alt"></i> Agregar</button>
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
</htm
