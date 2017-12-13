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
  <title>Administrar noticias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="js/script.js"></script>
  <link rel="stylesheet" href="../css/style.css">
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

<div class="page-header">
      <h3 style="color:white;font-size: 200%; text-align: center;">Noticias</h3>
</div>


  <div class="container-fluid">
    <center>
    <button class="button" type="button" onclick="window.open('subir_noticia.php','_self')" >Agregar noticia</button>
    </center>
  </div>
<div>
    <center>
        <div class="table-responsive">
        <?php
          
          include("../MySQL/conexion.php");

          $consulta = "SELECT * FROM noticias";
          $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
          
          echo "<br>";
          echo "<table>";
          echo "<tr>";
          echo "<th></th>";
          echo "<th>Titulo</th>";
          echo "<th>Autor</th>";
          echo "<th>Info</th>";
           echo "<th>Borrar</th>";
          echo "</tr>";
          
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo "<tr>";
            echo "<td><img style=' width: 360px; height: 135px; ' src='../". $columna['foto'] ."' class='img-responsive'></td><td>" . $columna['titulo'] . "</td><td>" .  $columna['autor'] ."</td><td>" . $columna['info'] . "</td>";
            echo "<td><a  href='borrar_noticia.php?id=".$columna['id_noticias']."'> <font color= #FC4747> Eliminar noticia</font></a></td>";
            echo "</tr>";
          }
          echo "</table>"; 
          mysqli_close( $conexion );
          
        ?>
        </div>
    </center>
</div>
<br>
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