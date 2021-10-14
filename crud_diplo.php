<?php
include_once "db.php";

if(isset($_POST['save'])){
  $id=$MySQLiconn->real_escape_string($_POST['id']);
  $pais=$MySQLiconn->real_escape_string($_POST['pais']);
  $year=$MySQLiconn->real_escape_string($_POST['year']);
  $descripcion=$MySQLiconn->real_escape_string($_POST['descripcion']);

  $SQL=$MySQLiconn->query("INSERT INTO r_diplomatica (id,pais,año,descripcion) VALUES('$id','$pais','$year','$descripcion')");
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
  header("Location: rel_diplo.php");
}
if(isset($_GET['edit'])){
  $SQL= $MySQLiconn->query("SELECT * FROM r_diplomatica  WHERE id=".$_GET['edit']);
  $GetROW=$SQL->fetch_array();
}

if(isset($_POST['update'])){
  $SQL = $MySQLiconn->query("UPDATE r_diplomatica  SET id='".$_POST['id']."',pais='".$_POST['pais']."',año='".$_POST['year']."',
  descripcion='".$_POST['descripcion']."' WHERE id=".$_GET['edit']);
  header("Location: rel_diplo.php");
}
if (isset($_GET['del'])) {
  $SQL = $MySQLiconn->query("DELETE FROM r_diplomatica WHERE id=".$_GET['del']);
  header("Location: rel_diplo.php");
}

?>
