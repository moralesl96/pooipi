<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
  
    if ($_SESSION['usuario']!="admin") {
        header('Location: ../usuarios/index_usuario.php');
    }

  }
  else {

      header('Location: ../index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Ventas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="js/script.js"></script>
  <link rel="stylesheet" href="../css/stylejuego.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index_admin.php"><img src="../images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_admin.php">Inicio</a></li>
        <li><a href="administrar_usuarios.php">Administrar Usuarios</a></li>
        <li><a href="administrar_juegos.php">Administrar Juegos</a></li>
        <li><a href="administrar_noticias.php">Administrar Noticias</a></li>
        <li><a href="ventas.php">Ventas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrar.php"><span class="glyphicon glyphicon-remove"></span> Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div align="center">

  <center><h1>Ventas</h1></center>

  <table>
    <tr>
      <td>Imagen</td>
      <td>Nombre</td>
      <td>Precio</td>
      <td>Cantidad</td>
      <td>Subtotal</td>
      <td>Comprador</td>
      <td>Fecha de compra</td>

    </tr>

    <?php
          
          include("../MySQL/conexion.php");

          $consulta = "SELECT * FROM ventas";
          $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          $numeroventa=0;
          while ($columna = mysqli_fetch_array( $resultado ))
          {
                if ($numeroventa!=$columna['Noventa']){
                  echo '<tr><td>Numero de venta #:'.$columna['Noventa'].' </td></tr>';
                }
                $numeroventa=$columna['Noventa'];
                echo'<tr>
                      <td><img src="../'.$columna['imagen'].'" width="240px" height="120px"></td>
                      <td>'.$columna['Nombre'].'</td>
                      <td>'.$columna['Precio'].'</td>
                      <td>'.$columna['cantidad'].'</td>
                      <td>'.$columna['subtotal'].'</td>
                      <td>'.$columna['Comprador'].'</td>
                      <td>'.$columna['Fecha_compra'].'</td> 
                    </tr>';
          }
          mysqli_close( $conexion );
          
        ?>
  </table>
  
</div>

<footer  class="container-fluid text-center">
  <p style="color:white" >© 2017 Solid Joyce Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en UABC y otras facultades.
Todos los precios incluyen IVA (donde sea aplicable).</p>
<div class="row">
  <div class="col-lg-4">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/twitter.png" style="width:15px; height:15px"><font color=yellow> @Solid Joyce</font></a>
  </div>
  <div class="col-lg-4">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/fb.png" style="width:23px; height:23px"><font color=yellow> Solid Joyce</font></a> 
  </div>
  <div class="col-lg-4">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/yt.png" style="width:15px; height:15px"><font color=yellow> Solid Joyce</font></a> 
  </div>
</div>
</footer>

</body>
</html>