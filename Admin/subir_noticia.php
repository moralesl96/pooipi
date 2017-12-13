<?php session_start();
  
  if (isset($_SESSION['usuario'])) {

    if ($_SESSION['usuario']!="admin") {
        header('Location: ../usuarios/index_usuario.php');
    }
  }
  else {
      header('Location: ../index.php');
  }
  
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    $error='';

    if ($check !== false) {
      $carpeta_destino = '../images/noticias/';
      $foto = $carpeta_destino . $_FILES['foto']['name'];
      $foto2 = 'images//noticias/' . $_FILES['foto']['name'];
      move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

      $titulo=$_POST['titulo'];
      $info=$_POST['info'];
      $contenido=$_POST['contenido'];
      $autor=$_POST['autor'];


      try {
          $conexion = new PDO('mysql:host=localhost;dbname=solidjoyce' , 'root' , '');
        } catch (PDOException $e){
          echo "Error" . $e->getMessage();
        }

        //verificar usuario
        $statement = $conexion->prepare('SELECT * FROM noticias WHERE titulo = :titulo LIMIT 1');
        $statement->execute(array(':nombre' => $nombre));
        $resultado = $statement->fetch();

        if ($resultado != false) {
          $errores .= '<li> Ya hay una noticia con el mismo titulo</li>';
        }
    }
    else{
      $error .= "<li>Error al cargar la imagen</li>";
    }

    if ($error == '') {
        $fecha_subida = date('Y-m-d');
        $statement = $conexion->prepare("INSERT INTO noticias (id_noticias,titulo,info, Contenido, autor,fecha_subida,foto) VALUES (null, :titulo, :info, :contenido,:autor,:fecha_subida, :foto2)");
        $statement->execute(array(
          ':titulo' => $titulo, 
          ':info' => $info,
          ':contenido' => $contenido,
          ':foto2' => $foto2,
          ':autor' => $autor,
          ':fecha_subida' => $fecha_subida
        )); 
          
         header('Location: administrar_noticias.php');
         } 
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../images/ico.ico">
  <title>Subir noticia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="js/script.js"></script>
  <link rel="stylesheet" href="../css/stylemod.css">
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
      <a href="index_admin.php"><img src="../images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_admin.php">Inicio</a></li>
        <li><a href="administrar_usuarios.php">Administrar Usuarios</a></li>
        <li><a href="administrar_juegos.php">Administrar Juegos</a></li>
        <li><a href="administrar_noticias.php">Administrar Noticias</a></li>
        <li><a href="ventas.php">Ventas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrar.php"><span class="glyphicon glyphicon-remove"></span> Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>

<header>
    <div>
      <h1>Agregar una noticia</h1>
    </div>
</header>


<div class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
    <center>
      <div style="color: white;" class="form">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

          <input style="color: black;" type="text"  placeholder="Ingresa titulo para la noticia" name="titulo" required><br>
          <input style="color: black;" type="text"  placeholder="Ingresa informacion para la noticia" name="info" required><br>
          <input style="color: black;" type="text"  placeholder="Ingresa autor" name="autor" required><br>
          <textarea style="color: black;" name="contenido" placeholder="Contenido de la noticia"></textarea>
          <label for="foto"> Selecciona foto de la noticia</label>
          <input type="file" name="foto"><br>
          <div>
            <?php if (!empty($error)): ?>
                  <div class="alert alert-danger">
                    <ul style="font-size: 12px">
                     <?php echo $error; ?>
                    </ul>
                  </div>
            <?php endif; ?>
          </div>

          <input class="button" type="submit" value="Subir noticia">
        </form>
      </div>
    </center>
  </div>
  <div class="col-sm-4">
  </div>
</div>

<br><br><br><br>

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