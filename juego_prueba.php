<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
    else{
      header('Location: usuarios/index_usuario.php');

    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Solid Joyce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="js/script.js"></script>
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
        <li><a href="Normal/Lista Juegos.php">Juegos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="">
  <br>
  <h1>Proximamente Half life 3</h1>
  <div style="text-align : justify;" class="juego">
      <p>
      HALF-LIFE supone un impacto en la industria de juegos con su combinación de acción frenética y narración continua y absorbente. El título de debut de Valve fue galardonado con más de 50 premios que lo consideraron el juego del año hasta convertirse en "El mejor juego para PC de la historia", galardón concedido por la revista PC Gamer, y ha vendido más de ocho millones de unidades en todo el mundo.

      HOY. Todo el suspensе, los desafíos y la carga emocional del original, aunados a un realismo sorprendente y una estupenda manejabilidad: Half-Life 2 abre las puertas a un mundo en el que la presencia del jugador influye en todo lo que lo rodea, desde el entorno físico hasta el comportamiento e incluso las emociones de amigos y enemigos.

      El jugador vuelve a tomar la palanca del científico Gordon Freeman, quien se encuentra en una Tierra infestada por alienígenas, desposeída de todos sus recursos y en la que cada vez queda menos población. Freeman se ve envuelto en el papel nada envidiable de rescatar el mundo del mal que desencadenó en Black Mesa. Y mucha gente a la que aprecia cuenta con él.

      La nueva tecnología patentada por Valve, Source®, hace posible el juego intenso y en tiempo real de Half-Life 2. Source ofrece grandes mejoras en:

      <ul>
      <li> Personajes: el sistema de animación facial avanzada proporciona los personajes más sofisticados jamás vistos. Con 40 "músculos" faciales definidos, los personajes humanos transmiten un despliegue completo de emociones humanas y responden al jugador con fluidez e inteligencia.</li>
      <li>Física: Todo, desde las piedras hasta los camiones de 2 toneladas, pasando por el agua, responde como en el mundo real, ya que obedece a las leyes de la masa, gravedad y flotabilidad.</li>
      <li>Gráficos: el renderizador basado en matizadores de Source, como el utilizado en Pixar para crear películas como Toy Story® y Monster's, Inc.®, crea los entornos más atractivos y realistas jamás vistos en un videojuego</li>
      </ul>
      Inteligencia artificial: ni los aliados ni los enemigos se entregan ciegamente a la batalla. Pueden evaluar los peligros, desplazarse por terrenos peligrosos y utilizar los objetos a su alcance como armas.</p>
  </div>


<center><img src="images/half_life_3.png"></center>

      <div class="tabla">
        <h2>Necesitas iniciar sesion para poder descargar la beta del juego.</h2>
        <a style="font-size: 20px;" href="login.php"><font color=yellow> Inicia sesion</font></a>
      </div>  
</div>
<a href=""></a>

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
    <a href="Nosotros.php" target="_blank" rel="noreferrer"><img src="images/LogoSFC.png" style="width:20px; height:20px"><font color=yellow> Sobre Nosotros</font></a> 
  </div>
</div>
</footer>

</body>
</html>