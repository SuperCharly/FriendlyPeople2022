<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/6a3af0d5cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/profile.css" type="text/css"/>
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
                
                <a href="requests.php">
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
<section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">NOMBRE DE USUARIO</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fa-solid fa-city"></i>Estado:</li>
                    <li><i class="icono fas fa-map-marker-alt"></i> Municipio:</li>
                    <li><i class="icono fa-solid fa-location-crosshairs"></i> Localidad:</li>
                    <li><i class="icono fas fa-map-signs"></i> Direccion:</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                    <li><i class="icono fa-solid fa-neuter"></i> Género:</li>
                    <li><i class="icono fa-solid fa-circle-minus"></i> Discapacidad:</li>
            </div>



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
