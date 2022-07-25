<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Solicitudes</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
    <section class="seccion-config-usuario">
        <div class="config-usuario-header">
            <div class="config-usuario-portada">
                <div class="config-usuario-bio" style="margin-top:40px">
                    <h3 class="titulo" style="text-align: center;">Solicitudes</h3>
                </div>
                <div class="config-usuario-footer" style="margin-top: 40px; width: 100; height: 200px;">
                    <div class="izquierda" style="top: 0; left: 0; width: 200px; height: 20px">
                        <img src="img/usuarioDefault.jpg" alt="" class="img-user" style="height: 160px; width: 160px; border-radius: 50%; 
                         left: 15px; top: 50%">
                    </div>
                    <div class="Usuario" style="margin-top: 35px; width: 100;">
                        <ul class="" style="text-decoration: none; list-style: none;">
                            <li style="margin-left: 20%; "><a href="#"><h2>UserName</h2></a></li>
                         </ul>
                         <div class="Datos-Usuario">
                            <ul class="" style="list-style: none; margin-left: 45%; margin-top: -15%;">
                                <li><i class="icon fa-solid fa-hourglass-start"></i>Hora de inicio: </li>
                                <br>
                                <li><i class="icon fa-solid fa-hourglass-end"></i>Hora final: </li>
                                <br>
                                <li><i class="icon fa-solid fa-calendar-day"></i>Fecha: </li>
                                <br>
                                <li><i class="icon fa-solid fa-map-location"></i></i>Lugar de destino</li>
                            </ul>
                            <ul> 
                                <li style="list-style: none; margin-left: 70%; margin-top: -22%;"><i class="icon fa-solid fa-question"></i>Descripción de la actividad: </li>
                            </ul>
                        </div>
                        <div style="display: inline-block">
                        <button type="button" class="btn btn-success">Aceptar</button>
                        <button type="button" class="btn btn-danger">Rechazar</button></div>
                    </div>
                    
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