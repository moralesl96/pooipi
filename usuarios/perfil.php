<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{
    header('Location:../index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Mi perfil</title>
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
      <a href="index_usuario.php"><img src="../images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_usuario.php">Inicio</a></li>
        <li><a href="Lista Juegos.php">Juegos</a></li>
        <li><a href="Lista noticias.php">Noticias</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span><img class="user" style=" width:23px; height:23px" src=
          <?php
            $nombre=$_SESSION['usuario'];
           include("../MySQL/conexion.php");
           $consulta = "SELECT * FROM usuarios where usuario='$nombre'";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($columna = mysqli_fetch_array( $resultado ))
            {
              echo  $columna['imagen'];
            }
            mysqli_close( $conexion );
        ?> 
          ></span> <?php echo $_SESSION['usuario']; ?></a></li>
        <li><a href="cerrar.php"><span class="glyphicon glyphicon-remove"></span> Cerrar sesion</a></li>
        <li><a href="carro.php"><span><img style=" width:23px; height:23px" src="../images/carro.png"></span> Carrito</a></li>
      </ul>
    </div>
  </div>
</nav>

<div style="padding-top: 20px;" class="container">
  <div class="row">
    <center>
      <div class="col-sm-2">
        <img class="user" src=
        <?php
          $nombre=$_SESSION['usuario'];
         include("../MySQL/conexion.php");
             $consulta = "SELECT * FROM usuarios where usuario='$nombre'";
             $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
              while ($columna = mysqli_fetch_array( $resultado ))
              {
                echo  $columna['imagen'];
              }
              mysqli_close( $conexion );
          ?> 
          >
          <br><br>
          <div style="padding-left: 20px;">
            <button class="button" type="button" onclick="window.open('cambiar_foto.php','_self')" >Cambiar foto</button>
          </div>
      </div>

      <div class="col-sm-3">
        <p class="nombre"><?php echo $_SESSION['usuario']; ?> <a href="cambiar_nombre.php"><img style="width:25px; height:25px" src="../images/reload.png"></a></p>
      </div>
    </center>

      <div style="text-align: center;" class="col-sm-4">
        <h2>Info</h2>
        <p class="membresia"> Membresia: 
          <?php
              $nombre=$_SESSION['usuario'];
             include("../MySQL/conexion.php");
             $consulta = "SELECT * FROM usuarios where usuario='$nombre'";
             $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
              while ($columna = mysqli_fetch_array( $resultado ))
              {
                $fecha = $columna['registro'];
              }
             
              $oro = date('Y-m-d', strtotime('-1 year'));
              $platino = date('Y-m-d', strtotime('-3 year'));

              if ($fecha > $oro ) {
                echo "Normal";
                echo '</p> <img src="../images/normal.png">';
              }

               if ($fecha < $oro && $fecha > $platino) {
                echo "Oro";
                echo '</p> <img src="../images/oro.png">';
              }

              if ($fecha < $platino) {
                echo "Platino";
                echo '</p> <img src="../images/platino.png">';
              }
              mysqli_close( $conexion );
          ?> 

        </p>


        <p style="text-align: center; color: white; font-size: 20px;">Email: <br>
          <?php
              $nombre=$_SESSION['usuario'];
             include("../MySQL/conexion.php");
             $consulta = "SELECT * FROM usuarios where usuario='$nombre'";
             $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
              while ($columna = mysqli_fetch_array( $resultado ))
              {
                echo  $columna['email'] .' '. '<a href="cambiar_email.php"><img style="width:25px; height:25px" src="../images/reload.png"></a>';
                echo '<br>Miembro desde: ' .  $columna['registro'];
              }
              mysqli_close( $conexion );
          ?> 
        </p>
      </div>

      <div style="text-align: center;color: white;" class="col-sm-3">
        <p>Espacio publicitario</p>
        <a href="https://www.coca-cola.com.mx/es/home/" target="_blank" rel="noreferrer"><img src="../images/coca.jpg" width="100%"></a>
      </div>

    <!-- Esto ayuda a que la pagina sea estable no se porque la neta  -->
    <div class="col-sm-12"> </div>  


  <hr style="color: white;">
    <div class="row">

      <div class="col-sm-9">
        <h1>Juegos</h1>
          <?php
            $nombre=$_SESSION['usuario'];
             include("../MySQL/conexion.php");
             $consulta = "SELECT * FROM ventas where Comprador='$nombre'";
             $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
              while ($columna = mysqli_fetch_array( $resultado ))
              {
                echo '<img style="border-style: solid;border-width: 3px;border-color: white;width:180px; height: 90px" src="../';
                echo  $columna['imagen'];
                echo '">';
                echo '<span style="color: white;font-size: 16px;"> '.$columna['Nombre'].'<span>';
                echo ' Comprado el: '.$columna['Fecha_compra'];
                echo '<br><br>';
              }
              mysqli_close( $conexion );
          ?> 


      </div>



        <div class="col-sm-3">
          <h1>Opciones</h1>
          <center>
            <button class="button" type="button" onclick="window.open('cambiar_password.php','_self')" >Cambiar contraseña</button><br><br>
            <button class="button" type="button" onclick="window.open('confirmar.php','_self')" >Borrar perfil</button>
          </center>
        </div>
    </div>  
  </div>
</div>
<br>
<footer  class="container-fluid text-center">
  <p style="color:white" >© 2017 Solid Joyce Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en UABC y otras facultades.
Todos los precios incluyen IVA (donde sea aplicable).</p>
<div class="row">
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/twitter.png" style="width:15px; height:15px"><font color=yellow> @Solid Joyce</font></a>
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/fb.png" style="width:23px; height:23px"><font color=yellow> Solid Joyce</font></a> 
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="../images/yt.png" style="width:15px; height:15px"><font color=yellow> Solid Joyce</font></a> 
  </div>
  <div class="col-lg-3">
    <a href="Nosotros.php" target="_blank" rel="noreferrer"><img src="../images/LogoSFC.png" style="width:20px; height:20px"><font color=yellow> Sobre Nosotros</font></a> 
  </div>
</div>
</footer>

</body>
</html>