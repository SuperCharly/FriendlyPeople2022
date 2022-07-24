<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ayuda</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://kit.fontawesome.com/6a3af0d5cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/requests.css" type="text/css"/>
</head>
<body>
    <div class="Navbar">
            <ul>
                <li>    
                    <div class="toggle">
                        <ion-icon name="menu" class="open"></ion-icon>
                        <ion-icon name="close" class="close"></ion-icon>
                    </div>
                </li>
                <li class="list active">
                    
                    <a href="Requests.php">
                        <span class="icon"><ion-icon name="clipboard"></ion-icon></span>
                        <span class="title">Solicitudes</span>
                    </a>
                </li>
                
                <li class="list">
                
                    <a href="profile.php">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <span class="title">Perfil</span>
                    </a>
                </li>
                
                <li class="list">
                
                    <a href="Ayuda.php">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">Ayuda</span>
                    </a>
                </li>
                <li class="list">
                
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Cerrar sesión</span>
                    </a>
                </li>
            </ul>
    </div>
    <div class="social-bar">
    <a href="https://www.facebook.com/Friendly_People-102202945611079/" class="icon icon-facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://instagram.com/friendly.peopl3?r=nametag" class="icon icon-instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
  </div>
    <section class="seccion-config-usuario">
        <div class="config-usuario-header">
            <div class="config-usuario-portada">
                <div class="config-usuario-bio" style="margin-top: 40px">
                    <h3 class="titulo" style="text-align: center;">Ayuda</h3>
                </div>
                <div class="config-usuario-footer" style="margin-top: 40px; width: 100; height: 350px;">
                    <div class=""style="text-align: center; margin-left= 70px; margin-rigth: 70px;">
                        <h1>¿Tienes alguna duda, error o comentario?</h1>
                        <h3>Déjanos tus palabras en la cajita de texto o contáctanos en nuestras redes sociales</h3>
                        
                        <div>
                        <form class="row g-3">
                        <div class="mb-5">
                            <label for="exampleFormControlTextarea1" class="form-label">Lléname</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 90px" required></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                         </div>
                        </form>
                        </div>
                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      
                    
                </div>
                
                </div>
            </div>
        </div>
</section>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
    let menuToggle=document.querySelector('.toggle');
    let Navbar=document.querySelector('.Navbar')
    menuToggle.onclick=function(){
    menuToggle.classList.toggle('active');
    Navbar.classList.toggle('active');
        }
</script>
</body>
</html>