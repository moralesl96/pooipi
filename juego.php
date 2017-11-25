<!DOCTYPE html>
<html>
<head>

<link rel="shortcut icon" href="images/ico.ico">

  <title>Juego: 
  <?php

  $id=$_GET['id'];
  include("MySQL/conexion.php");
  $consulta = "SELECT * FROM juegos where id_juegos=$id";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
    while ($columna = mysqli_fetch_array( $resultado ))
  {
  echo $columna['Nombre']; 
  }
  mysqli_close( $conexion );
  ?> 
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/stylejuego.css">
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
      <a href="index.php"><img src="images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Lista Juegos.php">Juegos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
        <li><span><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
            ">
            <input style="position: relative;top: 10px; width:30px; height:30px" type="image" src="images/carro.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."></span> 
            </form>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
    <div>
      <h3 style="color:white">
      <?php
        $id=$_GET['id'];
        include("MySQL/conexion.php");
        $consulta = "SELECT * FROM juegos where id_juegos=$id";
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
          <img src="https://i.ytimg.com/vi/CljagcdBSPo/maxresdefault.jpg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="https://cdns.kinguin.net/media/category/3/-/3-1024_826.jpg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="https://i.ytimg.com/vi/ljUByjCvKT0/maxresdefault.jpg" style="width:800px; height:400px">
          <div class="carousel-caption">
          </div>      
        </div>
        <div class="item">
          <img src="http://pcmedia.ign.com/pc/image/article/121/1217843/counter-strike-global-offensive-20120202043855411.jpg" style="width:800px; height:400px">
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
    <div class="panel" style="background-color: #292828;border:solid;border-color: black">
        <div class="panel-heading" style="background-color: gray"></div>
    <img src=
      <?php
           include("MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where id_juegos=$id";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo  $columna['img'];
          }
          mysqli_close( $conexion );
        ?>
    class="img-responsive">
    <br>
    
         <p style="color:white"> 
          <?php
          $id=$_GET['id'];
          include("MySQL/conexion.php");
          $consulta = "SELECT * FROM juegos where id_juegos=$id";
          $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
            while ($columna = mysqli_fetch_array( $resultado ))
          {
          echo $columna['Descripcion']; 
          }
          mysqli_close( $conexion );
          ?>
         </p>
       <div class="panel-heading" style="background-color: gray"></div>
    </div>
    <center>
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="P565G32AQ5R9C">
        <input style="width:140px; height:30px"  type="image" src="images/anadircarro.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
      </form>
    </center>
  </div>
</div>
<hr>
</div>

<div style="color:white" class="container text-center">    
  <h3 ">Comentarios</h3>
  <div style="color:black" class="row">
    <div class="col-sm-2">
       <p class="well">Bonito</p>
    </div>
    <div class="col-sm-2">
       <p class="well">+100 lince</p>
    </div>
    <div class="col-sm-2">
       <p class="well">Igual de guapo que el manuel </p>
    </div>
    <div class="col-sm-2">
       <p class="well">Me gustas</p>
    </div>
    <div class="col-sm-2">
       <p class="well">+100 lince</p>
    </div>
    <div class="col-sm-2">
       <p class="well">+100 lince</p>
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
           include("MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where Nombre='Space Joyce'";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo " href='juego.php?id=" . $columna['id_juegos']."'";
          }
          mysqli_close( $conexion );
        ?>
        style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Space Joyce</b></div>
        <div align="center"><img src="images/portadajoyce.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray" ><b>Hotline Miami</b></div>
        <div align="center"><img src="images/Hotline Miami.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray" ></div></a></div>    
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Transistor</b></div>
        <div align="center"><img src="images/Transistor.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Dust</b></div>
        <div align="center"><img src="images/Dust An Elysian Tale.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"></div></a></div>
    </div> 
    
  </div>
</div><br>



<footer  class="container-fluid text-center">
  <p style="color:white" >© 2017 Solid Joyce Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en UABC y otras facultades.
Todos los precios incluyen IVA (donde sea aplicable).</p>
<div class="row">
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/twitter.png" style="width:15px; height:15px"><font color=yellow> @Solid Joyce</font></a>
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/fb.png" style="width:23px; height:23px"><font color=yellow> Solid Joyce</font></a> 
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/yt.png" style="width:15px; height:15px"><font color=yellow> Solid Joyce</font></a> 
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/LogoSFC.png" style="width:20px; height:20px"><font color=yellow> Sobre Nosotros</font></a> 
  </div>
</div>
</footer>

</body>
</html>