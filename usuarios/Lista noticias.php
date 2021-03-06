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
  <title>Noticias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="perfil.php"><span><img class="user" style=" width:23px; height:23px" src=
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

<h1 align="center" style="color:white;font-family: Jazz LET;font-size: 50px">NOTICIAS</h1>

<div class="container">    
	<div class="row">
		<?php
			include("../MySQL/conexion.php");
           $consulta = "SELECT * FROM noticias";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($columna = mysqli_fetch_array( $resultado ))
          {
           echo'<div class="col-sm-4"> 
                  <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="noticia.php?id=' . $columna['id_noticias'] . '"
                  style="text-decoration:none;color:black">
                  <div class="panel-heading" style="background-color: gray"><h4 style="color:black">'. $columna['titulo'] .'</h4></div>
                  <div align="center"><img src="../'. $columna['foto'] .'" class="img-responsive"></div>
                  </a></div>
                </div> ';
          }
          mysqli_close( $conexion );
		?>
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
    <a href="../Nosotros.php" target="_blank" rel="noreferrer"><img src="../images/LogoSFC.png" style="width:20px; height:20px"><font color=yellow> Sobre Nosotros</font></a> 
  </div>
</div>
</footer>

</body>
</html>