<?php
include_once 'db.php';
session_start();
$datos = $MySQLiconn->query("SELECT *FROM usuarios");
$getDatos = $datos->fetch_array();

$data = $MySQLiconn->query("SELECT * FROM administrador");
$getData = $data->fetch_array();

if ($_POST['usuario']== $getDatos['user_name'] && $_POST['contrasena']== $getDatos['contrasena']) {
  $_SESSION["autenticado"]=="1";
  $_SESSION["user"]==$_POST['usuario'];
  header("Location: inicio_usuario.php");
}elseif ($_POST['usuario']== $getData['admin_name'] && $_POST['contrasena']== $getData['contrasena']) {
  $_SESSION["autenticado"]=="1";
  $_SESSION["user"]==$_POST['usuario'];
  header("Location: inicio_admin.php");
}else {
  header("Location: index.php?errorusuario=si");
}
?>
