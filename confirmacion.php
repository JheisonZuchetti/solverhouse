<?php session_start();
  if ( isset($_SESSION['code']) ) {

       require 'menu/menu_s.php';

  }else{

    header('Location:index.php');
  } 
  

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Confirmacion</title>
   <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="menu/css/menu.css">
 </head>
 <body>
   <section class="confirmacion">
   	     <div>
   	     	<img src="img/start.png">
   	     	<p>Revisaremos su  proyecto y le notificaremos al publicarlo</p>
          <a href="index.php">Aceptar</a>
   	     </div>

   </section>
 </body>
 </html>

 <?php 
   require 'menu/footer.php';

  ?>