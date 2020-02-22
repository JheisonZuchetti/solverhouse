<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body>
   <div class="regtrabajo wow fadeInLeft" data-wow-duration = "2s">
   	<div class="reg-dere">
   		 <img src="img/persona.png">
   	</div>
   	<div class="capsu">
   		  <form method="post" action="registro-trabajador.php">
   	  	<h1>Registrar Trabajador</h1>
   	  	  <div class="datospersonales">
   	  	  	<div>
   	  	  		<label>Nombres</label>
   	  	  	 <input required="" type="text" name="nombre" placeholder="Jose Carlos" value="<?php echo $nombre; ?>">
   	  	  	</div>
   	  	  	<div>
   	  	  		<label>Apellidos</label>
   	  	  	 <input required="" type="text" name="apellido" placeholder="Jimenes Castro" value="<?php echo $apellido; ?>" >
   	  	  	</div>
   	  	  	<div class="cel-di">
   	  	  		 <div id="direccion" >
              <label>Dirección</label>
             <input required="" type="text" name="direccion-d" placeholder="Jr.Los Pinos 342 " value="<?php echo $direccion; ?>" >
            </div>
   	  	  	
   	  	  	<div>
   	  	  		<label>Distrito</label>
   	  	  	 <select name="distrito" required="" >
               <option disabled="" selected="">Seleccione Distrito</option>
               <?php foreach ($rowdistrito as $datodistrito ): ?>
                  <option><?php echo $datodistrito['Distrito']; ?></option>
               <?php endforeach ?>
   	  	  	 	
   	  	  	 </select>
   	  	  	</div>
   	  	  	
   	  	  	</div>
   	  	  	
            
              
            
             <div class="celular">
              <label>Regístrate con tu Celular</label>
             <input required="" type="text" name="celular" placeholder="+51968547326" value="<?php echo $celular; ?>">
            </div>

   	  	  	 <div class="contra">
               <label>Contraseña</label>
             <input required="" type="password" name="contraseña" placeholder="Contraseña">
            </div>
             <div class="contra">
               <label>Confirma contraseña</label>
             <input  type="password" name="contraseña1" placeholder="Vuelva a introducir contraseña">
            </div>
           
   	  	  </div>
           <ul>
              <li><?php echo $errores; ?></li>
           </ul>

         <input type="submit" name="" value="Registrar">

         <p>Al hacer clic , aceptas los <a href="#">Términos y condiciones</a>  y las <a href="#">Política de privacidad</a> </p>
   	  </form>
   	</div>
   	  
   </div>
</body>
</html>