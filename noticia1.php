﻿<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/ico.ico">
  <title>Noticia Sony-PS4</title>
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
<div class="container-fluid-news bg-1 text-center">
  <h3>Indies se ven afectados por norma de Sony y ESRB para juegos físicos</h3>
  <img src="https://cdn.elgrupoinformatico.com/Noticias/2015/06/playstation-4-logo-020615.jpg" class="img-circle" alt="PS4" width="250" height="250">
  <h4>Los desarrolladores deben pagar una cuota por obtener clasificación</h4>
</div>

<div class="container-fluid-news bg-2 text-center">
    <p align="justify">La calidad y éxito de algunos juegos independientes ha motivado que haya compañías interesadas en lanzar ediciones especiales en formato físico para el nicho de mercado que quiere esos títulos. Sin embargo, después de un tiempo de publicar títulos físicos, estudios indies y compañías especializadas se enfrentaron desde agosto a una nueva normativa que exige la presencia de la clasificación de la ESRB y pasar por el debido proceso de publicación, algo que tiene un costo y ha alterado el modelo de trabajo y negocio, esto según un reporte de Kotaku.</p>
    <br>
    <p align="justify">Por mucho tiempo, los desarrolladores indie y compañías que se aventuraban a lanzar un tiraje limitado de un juego en versión física operaban en una zona legal gris. Esto es, que legalmente los juegos digitales no requieren pagar por la clasificación de ESRB ni pasar por el proceso que sí experimentan quienes publican un título de forma tradicional; estas ediciones se manejaban bajo la idea de que el contenido era una impresión física del juego digital y además no salían a la venta en ninguna tienda, pues quienes estaban interesados en el juego debían comprarlo en los sitios en línea de compañías como Limited Run Games. Según el reporte de Kotaku, este modelo llegó a su fin en agosto pasado pues Sony y la ESRB decidieron que el proceso debía cumplirse en igualdad de condiciones para todos y eso incluyó a quienes son responsables de publicar estas ediciones especiales.</p>
    <br>
    <p align="justify">El reporte indica que la decisión de Sony y la ESRB ha comenzado a afectar a estudios pequeños pues ahora no solo tienen que cumplir con el protocolo de publicación requerido por el organismo y la compañía, también deben contemplar el pago de una cuota de $3,000 USD para obtener la clasificación, siempre y cuando el juego no haya requerido más de $1 MDD para su desarrollo. Respecto a esta situación, se cita el caso de Ruiner, juego cyberpunk desarrollado por Reikon Games, publicado en formato digital por Devolver Digital y cuya edición física estaba planeada para salir al mercado gracias a Special Reserve Games. Sin embargo, la compañía informó que debido a los costos y a lo complicado del proceso de publicación bajo la nueva norma, decidieron cancelar la edición pues no sería rentable pues aumentaría el costo 35%. Como prevención a esta situación, la ESRB ofrece descuentos a estudios pequeños pero estos consideran que aún así la decisión alteró todos sus planes.</p>
    <br>
    <p align="justify">Finalmente, el reporte también refiere posturas a favor de esta norma, como la de Iam8bit, quienes consideran que es algo positivo pues muchas de las compañías no solo se dedican a publicar y vender esas ediciones especiales, también las presentan en eventos y convenciones donde asisten personas de todas la edades. De esta manera, Iam8bit piensa que el hecho de que la clasificación sea obligatoria evitará panoramas complicados a futuro.</p>
    <br>
    <p align="justify">En septiembre Limited Run Games informó que retrasará al lanzamiento de sus próximos títulos hasta el próximo año pues la norma de Sony y la ESRB llegó de sorpresa y en medio del proceso de producción.
    <br><br>
    Fuente: <a href="http://www.levelup.com">LevelUp</a></p>
</div>

<footer style="background-color: #474e5d" class="container-fluid text-center">
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