<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{  
          header( 'Location:../index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>

<link rel="shortcut icon" href="../images/ico.ico">

  <title>Juego: 
  <?php

  $id=$_GET['id'];
  include("../MySQL/conexion.php");
  $consulta = "SELECT * FROM juegos where id_juego=$id";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
    while ($columna = mysqli_fetch_array( $resultado ))
  {
  echo $columna['Nombre']; 
  }
  mysqli_close( $conexion );
  ?> 
  </title>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <a href="index_usuario.php"><img src="../images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_usuario.php">Inicio</a></li>
        <li><a href="Lista Juegos.php">Juegos</a></li>
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


<div class="container">
    <div class="page-header">
      <h3 style="color:white;font-size: 300%;">
      <?php
        $id=$_GET['id'];
        include("../MySQL/conexion.php");
        $consulta = "SELECT * FROM juegos where id_juego=$id";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
          while ($columna = mysqli_fetch_array( $resultado ))
        {
        echo $columna['Nombre']; 
        }
        mysqli_close( $conexion );
      ?> 
      </h3><br>
    </div>
<div class="row">
  <div class="col-sm-8">
    <div style="border-style: solid; border-width: 8px; border-color: gray;" id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../images/Joyce/1.png" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="../images/Joyce/2.jpeg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="../images/Joyce/3.jpeg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="../images/Joyce/4.jpeg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="col-sm-4">
    <div style="opacity: 1.0;">
           <div class="panel-heading" style="background-color: gray"></div>
    <img
      <?php
           include("../MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where id_juego=$id";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo "src='../". $columna['Portada']."'";
          }
          mysqli_close( $conexion );
        ?>
    class="img-responsive">
    <br>
    
         <p style="color:white"> 
          <?php
          $id=$_GET['id'];
          include("../MySQL/conexion.php");
          $consulta = "SELECT * FROM juegos where id_juego=$id";
          $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
            while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo $columna['Descripcion']; 
            echo "<br>";
            echo "<br>";
            echo "Genero: ". $columna['Genero'] ;
            echo "<br>";
            echo "Precio: $" . $columna['Precio'] . " MXN";
          }
          mysqli_close( $conexion );
          ?>
         </p>
         <center><a href=""><img style="width:140px; height:30px" src="../images/anadircarro.png"></a></center>
       <div class="panel-heading" style="background-color: gray"></div>
    </div>
  </div>
</div>
<hr>
</div>

<div style="color:white" class="container text-center">    
  <h3 ">Noticias Relevantes</h3>
  <div style="color:black" class="row">
    <div class="col-sm-3">
      
    </div>
   
  </div>
  <hr>
</div>

<div style="color:white" class="container text-center">    
  <h3 ">Otros Juegos</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a 
        <?php
           include("../MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where Nombre='Space Joyce'";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo " href='juego.php?id=" . $columna['id_juego']."'";
          }
          mysqli_close( $conexion );
        ?>
        style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Space Joyce</b></div>
        <div align="center"><img src="../images/portadajoyce.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray" ><b>Hotline Miami</b></div>
        <div align="center"><img src="../images/Hotline Miami.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray" ></div></a></div>    
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Transistor</b></div>
        <div align="center"><img src="../images/Transistor.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Dust</b></div>
        <div align="center"><img src="../images/Dust An Elysian Tale.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div> 
    
  </div>
</div><br>



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