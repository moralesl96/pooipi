<?php session_start();
  
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']=="admin") {
      header('Location:Admin/index_admin.php');
    }
    else{
      header('Location:usuarios/index_usuario.php');
    }  
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2  = $_POST['password2'];
    $email  = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  
     $errores = '';

      if (empty($usuario) or empty($email) or empty($password) or empty($password2)) {
              $errores .= '<li>Rellene todo corretamente</li>';
           }     
      else {
        try {
          $conexion = new PDO('mysql:host=localhost;dbname=solidjoyce' , 'root' , '');
        } catch (PDOException $e){
          echo "Error" . $e->getMessage();
        }

        //verificar usuario
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado != false) {
          $errores .= '<li> El nombre de usuario ya existe</li>';
        }

        if($usuario == "admin"){
          $errores .= '<li> No se puede crear un usuario con ese nombre</li>';
        }

        //Verificar correo  
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email= :email LIMIT 1');
        $statement->execute(array(':email' => $email));
        $resultado = $statement->fetch();

        if ($resultado != false) {
          $errores .= '<li> El correo ya existe</li>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if($password != $password2){
          $errores .= '<li> Las contraseñas no coinciden</li>';
        }
      }  

    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO usuarios (id_usuario,usuario,password, email, imagen) VALUES (null, :usuario, :password, :email, "../images/user.png")');
        $statement->execute(array(
          ':usuario' => $usuario, 
          ':password' => $password,
          ':email' => $email
        )); 
          
          header('Location: login.php');
         }     
  }

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/ico.ico">
  <title>Solid Joyce/Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/Login-SignUp.css">
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
<div class="row">
  <div class="col-sm-4"> 
  </div> 
    <div class="col-sm-4"> 

      <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login" method="POST">
        <div style="color:black">

          <label><b>Usuario</b></label>
          <input type="text"  placeholder="Ingresa tu usuario" name="usuario" value="<?php if(isset($usuario)){ echo $usuario; }?>" required>

          <label><b>Email</b></label>
          <input type="email" placeholder="Ingresa tu Email" name="email" value="<?php if(isset($email)){ echo $email; }?>" required>

          <label><b>Contraseña</b></label>
          <input type="password" placeholder="Ingresa tu Contraseña" name="password" required>

          <label><b>Repetir contraseña</b></label>
          <input type="password" placeholder="Confirma contraseña" name="password2" required>
          
          <div class="clearfix">
          <div class="row">
              <div class="col-sm-3"> 
              </div>
                <div class="col-sm-6">
                  <button style="background-color:green" type="submit">Registrar</button>
                  <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger">
                      <ul style="font-size: 12px">
                       <?php echo $errores; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                </div>
              <div class="col-sm-3"> 
              </div>
          </div>
          </div>
        </div>
      </form>
      

    </div>
  <div class="col-sm-4"> 
  </div> 
</div>

<footer class="container-fluid text-center">
  <p style="color:black" >© 2017 Solid Joyce Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en UABC y otras facultades.
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
    <a href="Nosotros.php" target="_blank" rel="noreferrer"><img src="images/LogoSFC.png" style="width:20px; height:20px"> Sobre Nosotros</a> 
  </div>
</div>
</footer>
</body>
</html>