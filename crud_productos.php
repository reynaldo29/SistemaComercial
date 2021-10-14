<?php
include_once "db.php";

if(isset($_POST['save'])){
  $nombre=$MySQLiconn->real_escape_string($_POST['nombre']);
  $procedencia=$MySQLiconn->real_escape_string($_POST['procedencia']);
  $comercial=$MySQLiconn->real_escape_string($_POST['r_comercial']);
  $pais=$MySQLiconn->real_escape_string($_POST['pais']);

  $SQL=$MySQLiconn->query("INSERT INTO productos(nombre,procedencia,r_comercial,pais) VALUES('$nombre','$procedencia','$comercial','$pais')");
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
  header("Location: flujo_producto.php");
}
if(isset($_GET['edit'])){
  $SQL= $MySQLiconn->query("SELECT *FROM productos WHERE id=".$_GET['edit']);
  $GetROW=$SQL->fetch_array();
}
if(isset($_POST['update'])){
  $SQL=$MySQLiconn->query("UPDATE productos SET nombre='".$_POST['nombre']."',procedencia='".$_POST['procedencia']."',r_comercial='".$_POST['r_comercial']."',pais='".$_POST['pais']."' WHERE id=".$_GET['edit']);
  header("Location:flujo_producto.php");
}
if(isset($_GET['del'])){
  $SQL=$MySQLiconn->query("DELETE FROM productos WHERE id=".$_GET['del']);
}

?>
