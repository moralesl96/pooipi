<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: Admin/index_admin.php');
    }
    else {
    header('Location:usuarios/index_usuario.php');
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/ico.ico">
  <title>Noticias-Guillermo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/noticias.css">
</head>
<body style="background-color:#1abc9c">
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
<div class="container-fluid-news bg-1 text-center">
  <h3>Guillermo del Toro habla sobre Death Stranding</h3>
  <img src="https://cineactual.net/fotos/guillermodeltoro_03.jpg" class="img-circle" alt="Guillermo del Toro" width="250" height="250">
  <h4>El cineasta asegura que aún no ha visto gameplay del juego de Kojima</h4>
</div>

<div class="container-fluid-news bg-2 text-center">
    <p align="justify">Sin duda alguna, todavía queda un largo camino para jugar Death Stranding, el nuevo título de Hideo Kojima. Uno de los implicados en este proyecto es el cineasta Guillermo del Toro, quien recientemente habló sobre el título y su relación con el desarrollador japonés.</p>
    <br>
    <p align="justify">Durante una entrevista con el medio IGN, el cineasta aseguró que todavía no ha visto nada de gameplay de Death Stranding. Por lo que espera que Kojima, creativo con el que ha hecho una gran amistad, le muestre algo del título en breve.</p>
    <br>
    <p align="justify">"Ha sido genial como una amistad, y ha sido grandioso como una experiencia de aprendizaje. En Death Stranding solo soy un títere. No sé qué es lo que me hará hacer. Supuestamente me va a mostrar el gameplay en las siguientes semanas", afirmó el creativo.</p>
    <br>
    <p align="justify">Guillermo del Toro también trabajó en P.T., inicio de lo que sería Silent Hills. Por tal motivo, también habló brevemente sobre su participación en este proyecto: "Mi experiencia más gratificante fue conocerlo y ayudarlo a realizar P.T.", dijo el cineasta a pesar de que el juego no llegó a buen puerto.</p>
    <br>
    <p align="justify">Death Stranding no cuenta con una ventana de lanzamiento. Sin embargo, Kojima asegura que su desarrollo va por buen camino y que estará disponible durante la vida activa de PlayStation 4.</p>
    <br>
    <p align="justify">Asimismo, sabemos que el desarrollador japonés tomará riesgos en este proyecto. Por otro lado, Guillermo del Toro habló hace un par de meses sobre su papel como personaje en Death Stranding.</p>
    <br>
    <p align="justify">Al parecer, el cineasta sigue interesado en los videojuegos, pues hace poco declaró que le gustaría hacer una película de BioShock. Visita este enlace para saber más de Death Stranding, como información de los avances en el uso del motion capture.</p>
    <br>
    <p align="justify">¿Crees que pronto veamos algo nuevo de este título? ¿Cuándo crees que vaya a estar disponible? Compártenos tu opinión en los comentarios.
    <br><br>
    Fuente: <a href="http://www.levelup.com">LevelUp</a></p>
</div>

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