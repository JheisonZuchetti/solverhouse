<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
   <div class="regtrabajo">
   	<div class="reg-dere">
   		
   	</div>
   	<div class="capsu">
   	<form method="post" action="registro-cliente.php">
         <h1>Formulario de registro</h1>
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
                <div>
             <label>Correo</label>
             <input required="" type="email" name="correo" placeholder="prosolver@gmail.com" value="<?php echo $correo; ?>">
            </div>
            <div>
               <label>Celular</label>
             <input required="" type="text" name="celular" placeholder="+51968547326" value="<?php echo $celular; ?>">
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
         <input type="submit" name="" value="Guardar">

        
        </form>
   	</div>
   	  
   </div>
</body>
</html>