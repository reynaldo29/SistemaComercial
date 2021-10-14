<?php
include_once "db.php";

if(isset($_POST['save'])){
  $user_name=$MySQLiconn->real_escape_string($_POST['user_name']);
  $contrasena=$MySQLiconn->real_escape_string($_POST['contrasena']);
  $nombre=$MySQLiconn->real_escape_string($_POST['nombre']);
  $apellido=$MySQLiconn->real_escape_string($_POST['apellido']);
  $edad=$MySQLiconn->real_escape_string($_POST['year']);
  $genero=$MySQLiconn->real_escape_string($_POST['genero']);
  $correo=$MySQLiconn->real_escape_string($_POST['correo']);

  $SQL=$MySQLiconn->query("INSERT INTO usuarios(user_name,contrasena,nombre,apellido,edad,genero,correo) VALUES('$user_name','$contrasena','$nombre','$apellido','$edad','$genero','$correo')");
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
  header("Location: inicio_admin.php");
}
if(isset($_GET['edit'])){
  $SQL= $MySQLiconn->query("SELECT *FROM usuarios WHERE id=".$_GET['edit']);
  $GetROW=$SQL->fetch_array();
}

if(isset($_POST['update'])){
  $SQL = $MySQLiconn->query("UPDATE usuarios SET user_name='".$_POST['user_name']."',contrasena='".$_POST['contrasena']."',nombre='".$_POST['nombre']."',
  apellido='".$_POST['apellido']."',edad='".$_POST['edad']."',genero='".$_POST['genero']."',correo='".$_POST['correo']."' WHERE id=".$_GET['edit']);
  header("Location:incio_admin.php");
}
if (isset($_GET['del'])) {
  $SQL = $MySQLiconn->query("DELETE FROM usuarios WHERE id=".$_GET['del']);
  header("Location:inicio_admin.php");
}

?>
