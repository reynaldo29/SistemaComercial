
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Gracias</title>
</head>
<body>
<header class="header content">
      <div class="transparente"></div>
      <div class="header-content">
        <h1>SESIÓN FIINALIZADA</h1>
        <p>Gracias por su acceso...</p>

        <!---Botones--->
        <a href="index.php" class="btn">Volver al inicio</a>

      </div>
    </header>
</body>
</html>
