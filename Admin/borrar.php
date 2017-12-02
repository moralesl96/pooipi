<?php session_start();
  
if (isset($_SESSION['usuario'])) {
  
    if ($_SESSION['usuario']!="admin") {
        header('Location: ../usuarios/index_usuario.php');
    }
  	else  
  	{
	include("../MySQL/conexion.php");
	$id=$_GET['id'];
	
	$borrar="DELETE from usuarios where id_usuario=$id";
	mysqli_query($conexion,$borrar);
	mysqli_close($conexion);
	echo "$id";
	header('location:administrar.php');
	}
}
else
{

	header('location:../index.php');
}
?>