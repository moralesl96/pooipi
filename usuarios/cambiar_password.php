<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location: ../Admin/index_admin.php');
    }
  }
  else{
    header('Location:../index.php');
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $password2  = $_POST['password2'];
  
    $errores = '';


  try {
          $conexion = new PDO('mysql:host=localhost;dbname=solidjoyce' , 'root' , '');
        } catch (PDOException $e){
          echo "Error" . $e->getMessage();
        }

        //verificar usuario
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE password = :password LIMIT 1');
        $statement->execute(array(':password' => $password));
        $resultado = $statement->fetch();

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if($password != $password2){
          $errores .= '<li> Las contraseñas no coinciden</li>';
        }
    
        if ($errores == '') {
        $usuario=$_SESSION['usuario']; 
        $statement = $conexion->prepare("UPDATE usuarios SET password = :password where usuario='$usuario'");
        $statement->execute(array(
          ':password' => $password
        )); 
          header('Location: cerrar.php');
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
      <a href="index_usuario.php"><img src="../images/LogoSFC.png" style="position: relative; top: 0; left: 0;width:50px; height:50px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index_usuario.php">Inicio</a></li>
        <li><a href="Lista Juegos.php">Juegos</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span><img class="user" style=" width:23px; height:23px" src=
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

<header>
    <div>
      <h1>Modificar Contraseña</h1>
    </div>
</header>

<div class="row">
  <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <center>
        <div class="tabla">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
             <div style="color:white">

                <label><b>Cambia tu Contraseña</b></label>
                <input style="color: black;" type="password"  placeholder="Ingresa una nueva contraseña" name="password" required>
                <input style="color: black;" type="password"  placeholder="Repite contraseña" name="password2" required><br>


                <input class="button" type="submit" value="Modificar"><br>

                <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger">
                      <ul>
                       <?php echo $errores; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
              </div>
          </form>
        </div>
      </center>
    </div>
  <div class="col-sm-4"></div>
</div>

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