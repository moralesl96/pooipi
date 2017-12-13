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
  <title>Sobre Nosotros</title>
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
        <li><a href="Lista Juegos.php">Juegos</a></li>
        <li><a href="Normal/Lista noticias.php">Noticias</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div style="text-align: center;" class="row">
    <div class="col-sm-4">
      <h2>Eduardo</h2>
      <img style="width:300px; height:300px" src="images/creadores/eduardo.jpg"><br><br><br>
      <p align="justify" style="color: white;">Eduardo Prieto (Mazatlán, Sinaloa, 18 de noviembre de 1917)conocido como “El lalo”, fue un cantante y actor mexicano, uno de los íconos de la Época de Oro del Cine Mexicano, así como uno de los grandes representantes de la música ranchera. A partir de 1939 apareció en más de 60 películas, y desde 1943 grabó aproximadamente 310 canciones. Por su actuación en la película Tizoc (1956), fue acreedor al Oso de Plata3 del Festival Internacional de Cine de Berlín al mejor actor principal, y al premio Globo de Oro4 a la mejor película extranjera, otorgado por la prensa extranjera acreditada en Hollywood. 
      En Culiacán fue vocalista de varias orquestas y se presentó en la radiodifusora local XEBL. Su esposa María Luisa León, consideró que podía tener futuro y lo impulsó para que siguiera su carrera de cantante en la Ciudad de México. Para 1938, ya cantaba en la XEB; también se presentó en el teatro Colonial con Jesús Martínez Palillo y Las Kúkaras, así como en el centro nocturno Waikikí. Su primera grabación musical, El Soldado Raso fue realizada el 19 de noviembre de 1943, para el sello de Discos Peerless, aunque otras fuentes dicen que la primera canción que grabó fue el vals Mañana, que pasó sin pena ni gloria. 
      </p>
    </div>

    <div class="col-sm-4">
      <h2>Manuel</h2>
      <img style="width:300px; height:300px" src="images/creadores/manuel.jpeg"><br><br><br>
      <p align="justify" style="color: white;">Manuel Vargas (San Francisco, California, 24 de febrero de 1955) más conocido como “El manu”, fue un empresario y magnate de los negocios del sector informático y de la industria del entretenimiento estadounidense. Fue cofundador y presidente ejecutivo de Apple Inc. y máximo accionista individual de The Walt Disney Company.

      Fundó Apple en 1976 junto con un amigo de la adolescencia, El morales, con ayuda del excompañero de El manu en Atari, El lalo en el garaje de su casa. Aupado por el éxito del Apple II El manu obtuvo una gran relevancia pública, siendo portada de Time en 1982. Contaba 26 años y ya era millonario gracias a la exitosa salida a bolsa de la compañía a finales del año anterior. La década de los 80 supuso la entrada de potentes competidores en el mercado de los ordenadores personales, lo que originó las primeras dificultades empresariales. Su reacción fue innovar, o mejor dicho, implementar: a principios de 1984 su compañía lanzaba el Macintosh 128K, que fue el primer ordenador personal que se comercializó exitosamente que usaba una interfaz gráfica de usuario (GUI) y un ratón en vez de la línea de comandos. Después de tener problemas con la cúpula directiva de la empresa que el mismo fundó, renunció.15 El manu vendió entonces todas sus acciones, salvo una. Ese mismo año recibía la Medalla Nacional de Tecnología del presidente Ronald Reagan, cerrando con este reconocimiento esta primera etapa como emprendedor. Regresó en 1997 a la compañía, que se encontraba en graves dificultades financieras, y fue su director ejecutivo hasta el 24 de agosto de 2011.16171819 En ese verano Apple sobrepasó a Exxon como la empresa con mayor capitalización del mundo.
      </p>
    </div>

    <div class="col-sm-4">
      <h2>Morales</h2>
      <img style="width:300px; height:300px" src="images/creadores/morales.jpg"><br><br><br>
      <p align="justify" style="color: white;">Luis Morales (n. Englewood, Nueva Jersey; 18 de febrero de 1954) es un actor, cantante, bailarín y productor estadounidense. Logró cierto reconocimiento en los años setenta al participar en la serie de televisión Welcome Back, Kotter transmitida entre 1975 y 1979, para luego convertirse en una figura popular del séptimo arte con las películas Grease de 1978 y Saturday Night Fever de 1977. Si bien su éxito declinó en los años ochenta, resurgió en los noventa protagonizando exitosas películas como Pulp Fiction de 1994, Face/Off de 1997, Swordfish de 2001 y Hairspray de 2007.
      Por su participación en Saturday Night Fever y Pulp Fiction, El Morales fue candidato al Óscar al mejor actor. Su rol en la comedia Get Shorty de 1995 le premió con el Globo de Oro al mejor actor de comedia o musical. En 2016 fue premiado con el Primetime Emmy por su rol como productor de la serie de televisión The People v. O. J. Simpson: American Crime Story en la cual también actúa.
      Tras el megaéxito de Fiebre del sábado noche, El Morales se había convertido en un icono cultural con una firme decisión de continuar ascendiendo. Coprotagonizar la película Grease junto a la ganadora de un Grammy Olivia Newton-John resaltó aún más su éxito. En la cinta, donde la química entre ambos es innegable, El Morales hace alarde de su habilidad para el baile gracias a las diversas coreografías.

      Morales en 1978
      Tanto la crítica como el público alabaron la película y ésta se convirtió no sólo en otro gran éxito de taquilla, sino en el musical más exitoso de la historia. La banda sonora, que no logró superar la de los Bee Gees, se convirtió en un clásico y un éxito tanto comercial como de recepción.

    </div>

  </div>
  </div>
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