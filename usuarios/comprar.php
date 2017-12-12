<?php session_start();


if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{
    header('Location:../index.php');
  }

  if (empty($_SESSION['carrito'])){
    header( 'Location:Carro.php');
  }
 
 	$arreglo=$_SESSION['carrito'];
 	$usuario=$_SESSION['usuario'];
 	$Fecha_compra = date('Y-m-d');
 	$numeroventa=0; 

 	include("../MySQL/conexion.php");

 		$consulta = "SELECT * FROM ventas order by Noventa DESC limit 1";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
        while ($columna = mysqli_fetch_array( $resultado ))
        {
          $numeroventa=$columna['Noventa'];
        }

        if ($numeroventa==0) {
        	$numeroventa=1;
        }else{
        	$numeroventa++;
        }

        try {
          $conexion2 = new PDO('mysql:host=localhost;dbname=solidjoyce' , 'root' , '');
        } catch (PDOException $e){
          echo "Error" . $e->getMessage();
        }

        for ($i=0; $i <count($arreglo) ; $i++) { 
        $statement = $conexion2->prepare("INSERT INTO ventas(Noventa,imagen,Nombre,Precio,cantidad,subtotal,Comprador,Fecha_compra) VALUES ( :Noventa,:imagen,:nombre,:precio,:cantidad,:subtotal,:comprador,:Fecha_compra)");
        $statement->execute(array(
          ':Noventa' => $numeroventa, 
          ':imagen' => $arreglo[$i]['imagen'],
          ':nombre' => $arreglo[$i]['nombre'],
          ':precio' => $arreglo[$i]['precio'],
          ':cantidad' => $arreglo[$i]['cantidad'],
          ':subtotal' => $arreglo[$i]['precio']*$arreglo[$i]['cantidad'],
          ':comprador' => $_SESSION['usuario'],
          ':Fecha_compra' => $Fecha_compra
        )); 
        }

       	$carrito = array();
        $_SESSION['carrito'] = $carrito;

        header('Location: descargar_juego.php');

?>