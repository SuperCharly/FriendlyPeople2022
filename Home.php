<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Solicitudes</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="CSS/Home.css" type="text/css"/>
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
