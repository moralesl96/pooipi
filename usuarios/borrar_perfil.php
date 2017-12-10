<?php session_start();
  
if (isset($_SESSION['usuario'])) {
  
    if ($_SESSION['usuario']=="admin") {
        header('Location: ../Admin/index_admin.php');
    }
  	else  
  	{
	include("../MySQL/conexion.php");
	$usuario=$_SESSION['usuario'];
	echo $usuario;
	$borrar="DELETE from usuarios where usuario='$usuario'";
	mysqli_query($conexion,$borrar);
	mysqli_close($conexion);
	header('location:cerrar.php');
	}
}
else
{

	header('location:../index.php');
}
?>