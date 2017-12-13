<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{
    header('Location:../index.php');
  }
        

  include("../MySQL/conexion.php");
    if (isset($_GET['id']))
    {
      if (isset($_SESSION['carrito'])) {
        
        $arreglo=$_SESSION['carrito'];
        $encontro=false;
        $numero=0;

        for ($i=0; $i <count($arreglo); $i++) { 
          if ($arreglo[$i]['id']==$_GET['id']) {
            $encontro=true;
            $numero=$i;
          }
        }
        if ($encontro==true) {
          $arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1; 
          $_SESSION['carrito']=$arreglo;
        }
        else{

          $nombre="";
            $precio=0;
            $imagen="";
            $consulta = "SELECT * FROM juegos where id_juego=".$_GET['id'];
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
                while ($columna = mysqli_fetch_array( $resultado ))
              {
                $nombre=$columna['Nombre'];
                $precio=$columna['Precio'];
                $imagen=$columna['Portada'];
              }

            $datosnuevos = array('id' =>$_GET['id'] ,
                                'nombre' => $nombre,
                                'precio' => $precio,
                                'imagen' => $imagen,
                                'cantidad' => 1);

            array_push($arreglo, $datosnuevos);
            $_SESSION['carrito']=$arreglo;

        }
      }
    }
      else{
          if (isset($_GET['id'])) {
            $nombre="";
            $precio=0;
            $imagen="";
            $consulta = "SELECT * FROM juegos where id_juego=".$_GET['id'];
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
          
                while ($columna = mysqli_fetch_array( $resultado ))
              {
                $nombre=$columna['Nombre'];
                $precio=$columna['Precio'];
                $imagen=$columna['Portada'];
              }

            $arreglo[] = array('id' =>$_GET['id'] ,
                                'nombre' => $nombre,
                                'precio' => $precio,
                                'imagen' => $imagen,
                                'cantidad' => 1);

            $_SESSION['carrito']=$arreglo;
          }

      }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Carrito de compras</title>
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
<center><h1 style="color: white">Carrito de compras</h1></center><br><br>


<div class="text-center">
    <?php
    $total=0;
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
      
        $datos=$_SESSION['carrito'];

          for ($i=0; $i <count($datos) ; $i++) { 
    ?>
          <div style="color: white;" class="container">
              <img style="width:360px; height: 180px" src="../<?php echo $datos[$i]['imagen']; ?>"><br>
              <h3><?php echo $datos[$i]['nombre']; ?></h3>
              <span>Precio: <?php echo $datos[$i]['precio']; ?></span><br>
              <span>Cantidad: <?php echo $datos[$i]['cantidad']; ?></span><br>
              <span class="Subtotal">Subtotal: <?php echo $datos[$i]['cantidad']*$datos[$i]['precio']; ?></span><br>
              <a href="eliminar_carro.php?id=<?php echo $datos[$i]['id']; ?> ">Eliminar del carro</a>
          </div>

  <?php
              $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
          }
      }else{
        echo "<h1>Carrito vacio</h1>";
      }
       if ($total!=0) {
          echo "<h2 id='total'>Total: ".$total."</h2><br>"; 
          echo '<a href="pagar.php"><img style=" width:163px; height:50px" src="../images/buy.png"></a>';

       }   
  ?>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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