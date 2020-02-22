<!DOCTYPE html>
<html>
<head>
	<title>Solver House</title>
	<link rel="stylesheet" type="text/css" href="menu/css/menu.css">
</head>
<body>
  <div class="menu">
  	<div class="logo">
  		<span><a href="index.php"><img src="img/logo.png"></a></span>
  	</div>
  	 <ul class="menu-user">
      <li id="user">
        <img src="img/user.png">
        <div>
          <p><?php echo $nombre; ?></p>
         <h2>CREDITOS:20</h2>
        </div>
        
      </li>
  	 	<li><a href="trabajos.php">Perfil</a></li>
      <li><a href="#">Comentarios</a></li>
  	 	
      <li><a href="cerrar.php">Salir</a></li>
  	 </ul>
  </div>
</body>
</html>