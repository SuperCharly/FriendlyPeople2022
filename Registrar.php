<?php
session_start();
require_once('Config.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['nombre'],$_POST['apellido'],$_POST['genero'],$_POST['fnacimiento'],$_POST['edad'],$_POST['telefono']
    ,$_POST['estado'],$_POST['municipio'],$_POST['localidad'],$_POST['cp'],$_POST['direccion'],$_POST['email'],$_POST['password']) 
    && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['genero']) && !empty($_POST['fnacimiento']) && !empty($_POST['edad'])
    && !empty($_POST['telefono']) && !empty($_POST['estado']) && !empty($_POST['municipio'])
    && !empty($_POST['localidad']) && !empty($_POST['cp']) && !empty($_POST['direccion']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $genero = trim($_POST['genero']);
        $nacimiento = trim($_POST['fnacimiento']);
        $edad = trim($_POST['edad']);
        $telefono = trim($_POST['telefono']);
        $estado = trim($_POST['estado']);
        $municipio = trim($_POST['municipio']);
        $localidad = trim($_POST['localidad']);
        $cp = trim($_POST['cp']);
        $direccion = trim($_POST['direccion']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        //$hashPassword = $password;
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $sql = 'select * from ayudantes where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into ayudantes (nombre, apellido, genero, fnacimiento, edad, telefono, estado, municipio,
                localidad, cp, direccion, email, `password`, created_at,updated_at)
                values(:vnombre,:vapellido,:vgenero,:vfnacimiento,:vedad,:vtelefono,:vestado,
                :vmunicipio,:vlocalidad,:vcp,:vdireccion,:email,:pass,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':vnombre'=>$nombre,
                        ':vapellido'=>$apellido,
                        'vgenero' =>$genero,
                        'vfnacimiento' =>$nacimiento,
                        'vedad' =>$edad,
                        'vtelefono' =>$telefono,
                        'vestado' =>$estado,
                        'vmunicipio' =>$municipio,
                        'vlocalidad' =>$localidad,
                        'vcp' =>$cp,
                        'vdireccion' =>$direccion,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Usuario creado correctamente!!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valnombre = $nombre;
                $valapellido = $apellido;
                $valgenero = $genero;
                $valnacimiento = $nacimiento;
                $valedad = $edad;
                $valtelefono = $telefono;
                $valestado = $estado;
                $valmunicipio = $municipio;
                $vallocalidad = $localidad;
                $valcp = $cp;
                $valdireccion = $direccion;
                $valemail = '';
                $valpassword = $password;
 
                $errors[] = 'el Email ya esta registrado';
            }
        }
        else
        {
            $errors[] = "el Email no es valido";
        }
    }
    else
    {
        if(!isset($_POST['nombre']) || empty($_POST['nombre']))
        {
            $errors[] = 'el nombre es requerido';
        }
        else
        {
            $valnombre = $_POST['nombre'];
        }
        if(!isset($_POST['apellido']) || empty($_POST['apellido']))
        {
            $errors[] = 'el apellido es requerido';
        }
        else
        {
            $valapellido = $_POST['apellido'];
        }

        if(!isset($_POST['genero']) || empty($_POST['genero']))
        {
            $errors[] = 'El género es requerido';
        }
        else
        {
            $valgenero = $_POST['genero'];
        }
        
        if(!isset($_POST['fnacimiento']) || empty($_POST['fnacimiento']))
        {
            $errors[] = 'La fecha de nacimiento es requerido';
        }
        else
        {
            $valnacimiento = $_POST['fnacimiento'];
        }
        
        if(!isset($_POST['edad']) || empty($_POST['edad']))
        {
            $errors[] = 'La edad es requerido';
        }
        else
        {
            $valedad = $_POST['edad'];
        }
        
        if(!isset($_POST['telefono']) || empty($_POST['telefono']))
        {
            $errors[] = 'el telefono es requerido';
        }
        else
        {
            $valtelefono = $_POST['telefono'];
        }
        if(!isset($_POST['estado']) || empty($_POST['estado']))
        {
            $errors[] = 'el estado es requerido';
        }
        else
        {
            $valestado = $_POST['estado'];
        }
        if(!isset($_POST['muncipio']) || empty($_POST['municipio']))
        {
            $errors[] = 'el municipio es requerido';
        }
        else
        {
            $valmunicipio = $_POST['municipio'];
        }
        if(!isset($_POST['localidad']) || empty($_POST['localidad']))
        {
            $errors[] = 'la localidad es requerido';
        }
        else
        {
            $vallocalidad = $_POST['localidad'];
        }
        if(!isset($_POST['cp']) || empty($_POST['cp']))
        {
            $errors[] = 'el código postal es requerido';
        }
        else
        {
            $valcp = $_POST['cp'];
        }
        if(!isset($_POST['direccion']) || empty($_POST['direccion']))
        {
            $errors[] = 'la direccion es requerido';
        }
        else
        {
            $valdireccion = $_POST['direccion'];
        }
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email es requerido';
        }
        else
        {
            $valemail = $_POST['email'];
        }
 
        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'el Password es requerido';
        }
        else
        {
            $valpassword = $_POST['password'];
        }
        
    }
 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="Botonescss\Boton.css" rel="stylesheet" type="text/css"/>
 <link href="Botonescss\Botonuno.css" rel="stylesheet" type="text/css"/>
 <link href="css\Registro.css" rel="stylesheet" type="text/css"/>
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
 <link rel="icon" href="img\icono.ico">
       
	

</head>  
<body>

   <div class="conatainer">
            <nav class="navbar navbar-expand-lg" style="background-color: black; padding-bottom: 100px">
                <div class="centrado">
                <div class="container-fluid">
                <div class="collapse navbar-collapse" id="menu">
                <li class="nav-item">
                           <a href="Index.php"><button class="boton In" type="button" style="font-size: 20px; position: absolute; left: 10%; top: 30px"><span>Inicio</span></button></a></li> 
                       <li class="nav-item">
                           <a href="Registrar_dis.php"><button class="boton Obj" type="button" style="font-size: 20px; position: absolute; left: 30%; top: 30px"><span>Registrarse (Discapacitado)</span></button></a>
                        </li>
                        <li class="nav-item">
                            <a href="Objetivos.php"><button class="boton Reg" type="button" style="font-size: 20px; position: absolute; left: 50%; top: 30px"><span>Objetivos</span></button></a>
                        </li>
                       <li class="nav-item">
                           <a href="Login.php"><button class="boton Login" type="button" style="font-size: 20px; position: absolute; left: 70%; top: 30px">
                                     <span>Iniciar sesión</span></button></a>
                        </li>
                </div>	
             </div>
                </div>
            </nav> 
        </div>		          

    
    
    <section id="sec1">
        <div class="Contenedor-txt">
            <h1 align="center">¡Únete a la familia!</h1>
            <h5 align="center">Sé parte de Friendly People</h5>
            <?php 
            if(isset($errors) && count($errors) > 0)
                 {
                    foreach($errors as $error_msg)
                        {
                            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                                 }
                                  }
                                        
                                 if(isset($success))
                                 {
                                            
                                     echo '<div class="alert alert-success">'.$success.'</div>';
                                        }
                                    ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="row g-3">
          
            <div class="col-md-4">
<label for="validationDefault01" class="form-label">Nombre(s)</label>
<input type="text" class="form-control" name="nombre" id="validationDefault01" value="" required>
</div>
<div class="col-md-4">
<label for="validationDefault02" class="form-label">Apellido(s)</label>
<input type="text" class="form-control" name="apellido" id="validationDefault02" value="" required>
</div>
<div class="col-md-4">
<label for="validationDefault03" class="form-label">Género</label>
<select class="form-select" name="genero" id="validationDefault03" required>
  <option selected disabled value="">Selecciona...</option>
  <option>Masculino</option>
  <option>Femenino</option>
  <option>Prefiero no especificar</option>
</select>
</div>
<div class="col-md-4">
  <label for="validationDefault04" class="form-label">Fecha de nacimiento</label>
  <input type="date" class="form-control" name="fnacimiento" id="fechaNacimiento" placeholder="dd/mm/aaaa" min="1977-01-01" max="2004-12-31" required="">
</div>
<div class="col-md-4">
<label for="validationDefault05" class="form-label">Edad</label>
<select class="form-select" name="edad" id="Edad" required>
  <option selected disabled value="">Selecciona...</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
  <option>32</option>
  <option>33</option>
  <option>34</option>
  <option>35</option>
  <option>36</option>
  <option>37</option>
  <option>38</option>
  <option>39</option>
  <option>40</option>
  <option>41</option>
  <option>42</option>
  <option>43</option>
  <option>44</option>
  <option>45</option>
  </select>
</div>
<div class="col-md-4">
<label for="validationDefault06" class="form-label">Teléfono</label>
<input type="tel" class="form-control" name="telefono" id="validationDefault06" placeholder="">
</div>
<div class="col-md-4">
  <label for="validationDefault07" class="form-label">Estado</label>
  <select class="form-select" name="estado" id="validationCustom04" required>
  <option selected disabled value="">Selecciona...</option>
  <option>Chiapas</option>
    </select>
    </div>
<div class="col-md-4">
<label for="validationDefault08" class="form-label">Municipio</label>
<select class="form-select" name="municipio" id="validationCustom04" required>
  <option selected disabled value="">Selecciona...</option>
  <option>Acala</option>
  <option>Arriaga</option>
  <option>Cacahoatán</option>
  <option>Chiapa De Corzo</option>
  <option>Comitán De Domínguez</option>
  <option>Huixtla</option>
  <option>Jiquipilas</option>
  <option>Las Margaritas</option>
  <option>Las Rosas</option>
  <option>Mapastepec</option>
  <option>Motozintla</option>
  <option>Ocosingo</option>
  <option>Ocozocoautla De Espinosa</option>
  <option>Palenque</option>
  <option>Pichucalco</option>
  <option>Pijijiapan</option>
  <option>Reforma</option>
  <option>San Cristóbal De Las Casas</option>
  <option>Tapachula</option>
  <option>Tonalá</option>
  <option>Tuxtla Gutiérrez</option>
  <option>Venustiano Carranza</option>
  <option>Villaflores</option>
  </select>
</div>
<div class="col-md-4">
<label for="validationDefault09" class="form-label">Localidad</label>
<input type="text" class="form-control" name="localidad" id="validationDefault09" required>
</div>
<div class="col-md-4">
<label for="validationDefault10" class="form-label">CP</label>
<input type="text" class="form-control" name="cp" id="validationDefault10" required>
</div>
<div class="col-md-4">
<label for="validationDefault11" class="form-label">Dirección</label>
<input type="text" class="form-control" name="direccion" id="validationDefault11" placeholder="" required>
</div>

<div class="col-md-4">
<label for="validationDefaultUsername" class="form-label">Correo Electrónico</label>
<div class="input-group">
  <span class="input-group-text"  id="inputGroupPrepend2">@</span>
  <input type="email" class="form-control" name="email" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
</div>
</div>
<div class="col-md-4">
<label for="validationDefault12" class="form-label">Contraseña</label>
<div class="contra">
<span class="icono"><i class="fas fa-eye-slash"></i></span>
<input type="password" class="form-control" name="password" id="validationDefaultPassword" required>
 </div>
</div>

    <p>¿Ya tienes una cuenta? <a href="Login.php" style="text-decoration: none; padding-bottom: 0">¡Inicia sesión!</a></p>
        <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     
   </body>
</html>
<!--<div class="col-md-6">
<label for="validationDefault12" class="form-label">Confirmar Contraseña</label>
<div class="contra">
<input type="password" class="form-control"  name="repassword" id="validationDefaultPassword" required>
 </div>
</div>-->

<!--

          <div class="col-md-6" class="rol">
              <label for="validationDefault13" class="form-label">¿Tienes alguna discapacidad?</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" name="discapacidad" id="flexRadioDefault1" onclick="mostrarForm()">
<label class="form-check-label" for="flexRadioDefault1">
Sí
</label>
</div>
<div class="form-check">
<input class="form-check-input"  class="radio2" type="radio" name="flexRadioDefault" name="discapacidad" id="flexRadioDefault2" onclick="ocultarForm()">
<label class="form-check-label" for="flexRadioDefault2">
No
</label>
</div>
</div>
   
          <div id="form" class="form">
          <div class="col-md-4">
            <label for="validationDefault12" class="form-label">Tipo de discapacidad</label>
            <select class="form-select" class="CajaBox" name="tdiscapacidad"id="caja">
  <option selected disabled value="">Selecciona...</option>
  <option>Visual</option>
  <option>Auditiva</option>
  <option>Motriz</option>
  <option>Verbal</option>
  <option>Mental</option>
  <option>2 o más</option>
  </select>
</div>
     --
          <div class="col-md-6">
               <label for="validationDefault14" class="form-label">Describe tu(s) discapacidad(es) para poder entenderte mejor</label>
<div class="form-floating">
<textarea class="form-control" class="CajaBox" placeholder="Leave a comment here" name="otra" id="caja" style="height: 90px"></textarea>
<label for="floatingTextarea2">¡Lléname!</label>
<br>
<br>
<br>
</div>
          </div>
          </div>
              
             
              
  <div class="col-12">
      <p>¿Ya tienes una cuenta? <a href="/php/Login.php" style="text-decoration: none; padding-bottom: 0">¡Inicia sesión!</a></p>
      <button type="submit" class="btn btn-outline-primary" id="btn">Registrarse</button>
  </div>   
  </form>
  </div>
     <img src="/img/RegistrarSVG.svg">
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
     function mostrarForm(){
         document.getElementById('form').style.display = 'block';
     }
    </script>
    <script>
        function ocultarForm(){
         document.getElementById('form').style.display = 'none';
     }
    </script>
    
    <script>
    $('#fechaNacimiento').on('change',function (){
        $('#Edad').val(CalcularEdad());
    });  


    function CalcularEdad(){
           var fechaSelect = $('#fechaNacimiento').val();
           var fechaNac =new Date(fechaSelect);
           var fechaActual=new Date();
           var Edad=(parseInt((fechaActual-fechaNac)/(1000*60*60*24*365)));
           return Edad;
    
    </script>-->
    
