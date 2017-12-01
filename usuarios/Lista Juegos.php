<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
  }
  else{
    header('Location: ../Lista Juegos.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Solid Joyce/Juegos</title>
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
        <li><a href="#">Perfil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrar.php"><span class="glyphicon glyphicon-remove"></span> Cerrar sesion</a></li>
        <li><a href="carro.php"><span><img style=" width:23px; height:23px" src="../images/carro.png"></span> Carrito</a></li>
      </ul>
    </div>
  </div>
</nav>

<h1 align="center" style="color:white;font-family: Jazz LET;font-size: 50px">JUEGOS</h1>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black">
        <a
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
        <div class="panel-heading" style="background-color: gray">
        <b>Space Joyce</b></div>
        <div align="center"><img src="../images/portadajoyce.jpg" class="img-responsive" style="width:360px;height:180px"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 100.00</span>Bullet Hell  Shoot, 'Em Up, Arcade</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray" >
        <b>Hotline Miami</b></div>
        <div align="center"><img src="../images/Hotline Miami.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray" ><div><b><span style="float:right">Mex$ 100.00</span>Action, Indie</b></div></div>
     </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Dust An Elysian Tale</b></div>
        <div align="center"><img src="../images/Dust An Elysian Tale.jpg" class="img-responsive" style="width:360px;height:180px"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 139.99</span>Action, Adventure, Indie, RPG</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Transistor</b></div>
        <div align="center"><img src="../images/Transistor.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 169.99</span>Action, Indie, RPG</b></div></div>
      </div>
    </a></div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Nuclear Throne</b></div>
        <div align="center"><img src="../images/Nuclear Throne.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 119.99</span>Action, Indie, RPG</b></div></div>
    </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Bastion</b></div>
        <div align="center"><img src="../images/Bastion.png" class="img-responsive" style="width:width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 139.99</span>Action, Indie, RPG</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>FEZ</b></div>
        <div align="center"><img src="../images/FEZ.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 99.99</span>Indie</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Furi</b></div>
        <div align="center"><img src="../images/Furi.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 250.00</span>Action</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Trine 3: The Artifacts of Power</b></div>
        <div align="center"><img src="../images/Trine 3.jpg" class="img-responsive" style="width:360px;height:180px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 189.99</span>Action, Adventure, Indie</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="../usuarios/Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"> <b>Mark of the ninja</b></div>
        <div align="center"><img src="../images/Mark of the Ninja.jpg" class="img-responsive" style="width:360px;height:180px"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 139.99</span>Action, Adventure, Indie</b></div></div>
     </a> </div>
    </div>
  </div>
</div><br><br>

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