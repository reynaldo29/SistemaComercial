<?php
include_once "db.php";

if(isset($_POST['save'])){
  $id=$MySQLiconn->real_escape_string($_POST['id']);
  $pais=$MySQLiconn->real_escape_string($_POST['nombre']);

  $SQL=$MySQLiconn->query("INSERT INTO pais(id,nombre) VALUES('$id','$pais')");
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
  header("Location: flujo_producto.php");
}
?>
