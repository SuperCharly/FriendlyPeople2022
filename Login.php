<?php
session_start();
require_once('Config.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = 'select * from ayudantes where email = :email ';
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:Index.php');
					exit();
				}
				else
				{
					$errors[] = "Error en  Email o Password";
				}
			}
			else
			{
				$errors[] = "Error Email o Password";
			}
			
		}
		else
		{
			$errors[] = "Email no valido";	
		}
 
	}
	else
	{
		$errors[] = "Email y Password son requeridos";	
	}
    if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = 'select * from discapacitados where email = :email ';
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:Index.php');
					exit();
				}
				else
				{
					$errors[] = "Error en  Email o Password";
				}
			}
			else
			{
				$errors[] = "Error Email o Password";
			}
			
		}
		else
		{
			$errors[] = "Email no valido";	
		}
 
	}
	else
	{
		$errors[] = "Email y Password son requeridos";	
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Login</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="Botonescss\Boton.css" rel="stylesheet" type="text/css"/>
 <link href="Botonescss\Botonuno.css" rel="stylesheet" type="text/css"/>
 <link href="css\Login.css" rel="stylesheet" type="text/css"/>
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
 <link rel="icon" href="img\icono.ico">
</head>  

<body>
  <div class="conatainer">
            <nav class="navbar navbar-expand-lg" style="background-color: black; padding-bottom: 100px">
             
                <div class="collapse navbar-collapse" id="menu">
                          <li class="nav-item">
                           <a href="Index.php"><button class="boton In" type="button" style="font-size: 20px; position: absolute; left: 10%; top: 30px"><span>Inicio</span></button></a></li> 
                       <li class="nav-item">
                           <a href="Registrar.php"><button class="boton Obj" type="button" style="font-size: 20px; position: absolute; left: 30%; top: 30px"><span>Registrarse</span></button></a>
                        </li>
                        <li class="nav-item">
                            <a href="Registrar_dis.php"><button class="boton Reg" type="button" style="font-size: 20px; position: absolute; left: 50%; top: 30px"><span>Registrarse (Discapacitado)</span></button></a>
                        </li>
                       <li class="nav-item">
                           <a href="Objetivos.php"><button class="boton Login" type="button" style="font-size: 20px; position: absolute; left: 70%; top: 30px">
                                     <span>Objetivos</span></button></a>
                        </li>
                </div>	
            </nav> 
        </div>
    
     <section id="sec1">
        <div class="Contenedor-txt">
            <h1 align="center">Inicio de sesión</h1>
            <h5 align="center">Ingresa tus datos para acceder a tu cuenta</h5>
            <?php
    if (isset($errors) && count($errors) > 0) {
        foreach ($errors as $error_msg) {
            echo '<div class="alert alert-danger">' . $error_msg . '</div>';
        }
    }
?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
    <input type="email" placeholder="ejemplo@gmail.com" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" placeholder="Ingrese su contraseña" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    
    <p>¿No tienes una cuenta? <a href="Registrar.php" style="text-decoration: none">¡Regístrate!</a></p>
  </div>
                <button type="submit" name="submit" class="btn btn-primary">Ingresar</button>

  </form>
            
        </div>
              
         <img src="img\LoginSVG.svg">
    </section>
    
  <!-- <form class="formulario">
        <center>
    <div>
                <img src="https://img.icons8.com/cotton/2x/login-rounded-right.png" width="100" height="90">  
              </div> 
        </center>
    <h1>Login</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="COREEO ELECTRONICO">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="CONTRASEÑA">
        
         </div>
         <input type="submit" value="Login" class="button">
         
         <p>Inicia sesión y ¡continua con tu ayuda!.</p>
         <p>Forma parte de la familia "Friendly People" ¡y empieza tu ayuda! <a class="link" href="Registrar.html">Registrarse </a></p>
     </div>  
     </form>  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
</body>
</html>