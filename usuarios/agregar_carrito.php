<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{  
          header( 'Location:../index.php');
  }


  include("../MySQL/conexion.php");

?>