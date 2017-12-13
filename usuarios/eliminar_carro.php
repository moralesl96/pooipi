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

      			for ($i=0; $i <count($datos) ; $i++){
      				if ($datos[$i]['id']==$id) {
      					var_export($datos);
      					if ($datos[$i]['cantidad']>1) {
      						$datos[$i]['cantidad']=$datos[$i]['cantidad']-1;
                  var_export($datos);
      					}
      					else{

      						unset($datos[$i]);
                  var_export($datos[$i]);
                  echo'entro';
      					}
      				}


      			}
      		}
  		}
      $_SESSION['carrito']=$datos;
  		header('Location: carro.php')
        
?>