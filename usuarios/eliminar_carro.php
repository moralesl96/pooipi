<?php session_start();

 if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{
    header('Location:../index.php');
  }
	

  		if (isset($_GET['id'])){
      		if (isset($_SESSION['carrito'])){
      			$id=$_GET['id'];
      			$datos=$_SESSION['carrito'];
      			
      		}
  		}
        
?>