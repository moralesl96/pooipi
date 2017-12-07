<?php session_start();
  
if (isset($_SESSION['usuario'])) {
  
    if ($_SESSION['usuario']!="admin") {
        header('Location: ../usuarios/index_usuario.php');
    }
  	else  
  	{
	include("../MySQL/conexion.php");
	$id=$_GET['id'];
	
	$borrar="DELETE from juegos where id_juego=$id";
	mysqli_query($conexion,$borrar);
	mysqli_close($conexion);
	header('location:administrar_juegos.php');
	}
}
else
{

	header('location:../index.php');
}
?>