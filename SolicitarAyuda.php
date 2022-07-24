<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Solicitar Ayuda</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/SolicitarAyuda.css" type="text/css"/>
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

<section id="sec1">
        <div class="Contenedor-txt">
            <h1 align="center">Solicita tu ayuda</h1>
            <form method="POST" class="row g-3">
          
            <div class="col-md-4">
<label for="validationDefault05" class="form-label">Tipo de ayuda</label>
<select class="form-select" name="edad" id="Edad" required>
  <option selected disabled value="">Selecciona...</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  </select>
</div>
<div class="col-md-4">
  <label for="validationDefault04" class="form-label">Fecha</label>
  <input type="date" class="form-control" name="fnacimiento" id="fechaSolicitud" placeholder="dd/mm/aaaa" required="">
</div>
<div class="col-md-4">
<label for="validationDefault02" class="form-label">Hora de inicio solicitada</label>
<input type="time" class="form-control" name="apellido" id="validationDefault02" value="" required>
</div>
<div class="col-md-4">
<label for="validationDefault03" class="form-label">Hora final solicitada</label>
<input type="time" class="form-control"name="genero" id="validationDefault03" required>
</div>
<div class="col-md-4">
<label for="validationDefault06" class="form-label">Lugar de destino</label>
<input type="text" class="form-control" name="telefono" id="validationDefault06" placeholder="" required>
</div>
<div class="col-md-6">
                   <label for="validationDefault14" class="form-label">Describe la ayuda a solicitar</label>
<div class="form-floating">
    <textarea class="form-control" class="CajaBox" placeholder="Leave a comment here" id="caja" style="height: 120px" required></textarea>
  <label for="floatingTextarea2">¡Lléname!</label>
</div>
              </div>
    <div>
        <button type="submit" name="submit" class="btn btn-primary">Solicitar</button>
    </div>
            </form>
            </div>
            <img src="img/SolicitarAyudaSVG.svg">
            </section>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     
   <script>
                    const icono=document.querySelector(".icono");
                    
                    icono.addEventListener("click", function(){
                        const icon=this.querySelector("i");
                        
                        if(this.nextElementSibling.type=== "password"){
                            icon.classList.remove("fa-eye-slash");
                            icon.classList.add("fa-eye");
                            this.nextElementSibling.type = "text";
                        }else{
                            this.nextElementSibling.type = "password";
                              icon.classList.remove("fa-eye");
                               icon.classList.add("fa-eye-slash");
                        }
                    }
                            );
                </script>
                <script>
                   var date=new Date(); 
                   var tdate=date.getDate();
                   var month=date.getMonth()+1;  
                   if(tdate<10){
                    tdate='0'+tdate;
                   }
                   if(month<10){
                    month='0'+month;
                   }
                   var year=date.getUTCFullYear();
                   var minDate=tdate+"-"+month+"-"+year;
                   document.getElementById("fechaSolicitud").setAttribute('min', minDate);
                   console.log(minDate);
                </script>
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
