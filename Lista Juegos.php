﻿<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/ico.ico">
  <title>Solid Joyce/Juegos</title>
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
<h1 align="center" style="color:white;text-shadow: 1px 1px pink;font-family: Jazz LET;font-size: 50px">JUEGOS</h1>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>
          <?php
           include("MySQL/conexion.php");
           $consulta = "SELECT * FROM juegos where Nombre='Solid Joyce'";
           $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
          // Motrar el resultado de los registro de la base de datos
          // Encabezado de la tabl a
          
          
          // Bucle while que recorre cada registro y muestra cada campo en la tabla.
          while ($columna = mysqli_fetch_array( $resultado ))
          {
            echo  $columna['Nombre'];
          }
          mysqli_close( $conexion );
          
          ?>
        </b></div>
        <div align="center" class="panel-body"><img src="images/LogoSF.png" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 100.00</span>Bullet Hell  Shoot, 'Em Up, Arcade</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray" ><b>Hotline Miami</b></div>
        <div align="center" class="panel-body"><img src="images/Hotline Miami.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray" ><div><b><span style="float:right">Mex$ 100.00</span>Action, Indie</b></div></div>
     </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Dust An Elysian Tale</b></div>
        <div align="center" class="panel-body"><img src="images/Dust An Elysian Tale.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 139.99</span>Action, Adventure, Indie, RPG</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Transistor</b></div>
        <div align="center" class="panel-body"><img src="images/Transistor.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 169.99</span>Action, Indie, RPG</b></div></div>
      </div>
    </a></div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Nuclear Throne</b></div>
        <div align="center" class="panel-body"><img src="images/Nuclear Throne.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 119.99</span>Action, Indie, RPG</b></div></div>
    </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Bastion</b></div>
        <div align="center" class="panel-body"><img src="images/Bastion.png" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 139.99</span>Action, Indie, RPG</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"><a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>FEZ</b></div>
        <div align="center" class="panel-body"><img src="images/FEZ.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 99.99</span>Indie</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Furi</b></div>
        <div align="center" class="panel-body"><img src="images/Furi.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 250.00</span>Action</b></div></div>
      </a></div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"><b>Trine 3: The Artifacts of Power</b></div>
        <div align="center" class="panel-body"><img src="images/Trine 3.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
        <div class="panel-footer" style="background-color: gray"><div><b><span style="float:right">Mex$ 189.99</span>Action, Adventure, Indie</b></div></div>
      </a></div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel" style="background-color: #292828;border:solid;border-color: black"> <a href="Proximamente.php" style='text-decoration:none;color:black'>
        <div class="panel-heading" style="background-color: gray"> <b>Mark of the ninja</b></div>
        <div align="center" class="panel-body" ><img src="images/Mark of the Ninja.jpg" class="img-responsive" style="width:280px;height:150px" alt="Image"></div>
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