<?php session_start();
  
if (isset($_SESSION['usuario'])) {
  
    if ($_SESSION['usuario']!="admin") {
        header('Location: ../usuarios/index_usuario.php');
    }
  	else  
  	{
	include("../MySQL/conexion.php");
	$id=$_GET['id'];
	
	$borrar="DELETE from noticias where id_noticias=$id";
	mysqli_query($conexion,$borrar);
	mysqli_close($conexion);
	header('location:administrar_noticias.php');
	}
}
else
{

	header('location:../index.php');
}
?>