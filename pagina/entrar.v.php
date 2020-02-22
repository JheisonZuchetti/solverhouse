<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta property="og:title" content="Solver House" />
    <meta property="og:description" content="Solver House te brinda los mejores profesionales para el hogar" />
    <meta property="og:image" content="http://solverhouse.com/img/slider3.jpg" />      
    <meta property="og:url" content="https://solverhouse.com" />
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <section class="entrar">
  	<div class="foto-dere">
  		
  	</div>
  	
  		<form method="post" action="entrar.php">
  			<div class="caji-entrar">
  				<h1>Bienvenido a Solver House</h1>
  	   	   <div>
  	   	   	  <input type="text" name="usuario" placeholder="Número de celular" > 	   	   	  <input type="password" name="pass" placeholder="contraseña">
              <ul>
                <li><?php echo  $errores; ?></li>
              </ul>
  	   	   	  <input type="submit" name="" value="Entrar" >

              <p>¿No tiene una cuenta? <a href="registro-trabajador">Crear cuenta</a> </p>
  	   	   </div>
  			</div>
  	   	   
  	   </form>
  	
  	   
  </section>
</body>
</html>