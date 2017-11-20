<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/ico.ico">
  <title>Solid Joyce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
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
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"><a href="Proximamente.php"></a>
        <img src="https://images-3.gog.com/0d5e192fb850a4403fe5072f8b9415cac1ae398a2b87093f5b2824b6758698f0.jpg" style="width:1280px; height:400px">
        <div class="carousel-caption">
          <h3>Hotline Miami</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://thebrotherhoodofevilgeeks.files.wordpress.com/2015/03/image6.jpg" style="width:1280px; height:400px">
        <div class="carousel-caption">
          <h3>Dust An Elysian Tail</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://9to5toys.files.wordpress.com/2015/02/transistor-sale-mac-01.png?w=1600&h=800" style="width:1280px; height:400px">
        <div class="carousel-caption">
          <h3>Transistor</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>
  
<br>  

<div style="color:white" class="container text-center">    
  <h3>Novedades</h3>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a 
        <?php
           include("MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where Nombre='Solid Joyce'";
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
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 100.00</span>Bullet Hell  Shoot, 'Em Up, Arcade</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>FEZ</b></div>
        <div align="center"><img src="images/FEZ.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 99.99</span>Indie</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="noticia1.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><h3 style="color:black">Indies se ven afectados por norma de Sony y ESRB para juegos físicos</h3></div>
        <div align="center"><img src="https://cdn.elgrupoinformatico.com/Noticias/2015/06/playstation-4-logo-020615.jpg" class="img-responsive"></div>
      </a></div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-8"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black">
        <div class="panel-heading" style="background-color: gray"></div>
        <div align="center"><img src="images/sponsor.jpg" class="img-responsive"></div>
        <div class="panel-heading" style="background-color: gray"></div>
      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="noticia2.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><h3 style="color:black">Guillermo del Toro habla sobre Death Stranding</h3></div>
        <div align="center"><img src="http://download.gamezone.com/uploads/image/data/1204824/death-stranding-game-has-already-begun-kojima-productions.jpg.optimal.jpg" class="img-responsive"></div>
      </a></div>
    </div>
  </div>  
    
</div>



<footer  class="container-fluid text-center">
  <p style="color:white" >© 2017 Solid Joyce Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en UABC y otras facultades.
Todos los precios incluyen IVA (donde sea aplicable).</p>
<div class="row">
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/twitter.png" style="width:15px; height:15px"> @Solid Joyce</a>
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/fb.png" style="width:23px; height:23px"> Solid Joyce</a> 
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/yt.png" style="width:15px; height:15px"> Solid Joyce</a> 
  </div>
  <div class="col-lg-3">
    <a href="https://www.facebook.com/manuel.vargas.50702" target="_blank" rel="noreferrer"><img src="images/LogoSFC.png" style="width:20px; height:20px"> Sobre Nosotros</a> 
  </div>
</div>
  

   
</footer>

</body>
</html>