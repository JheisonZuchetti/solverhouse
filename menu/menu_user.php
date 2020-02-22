<?php session_start();

   require 'conexion.php';
   


 

if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo']) ) {


   if ($_SESSION['Tipo']=='Trabajador') {

      if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

           $actu=$conexion->query("UPDATE trabajador SET Descripcion='{$_POST['descripcion']}' where id_trabajador='{$_SESSION['usuario']}' ");
      if ($actu) {
         header('Location:../trabajos');
      }


      }
      
      $consultatr=$conexion->query("SELECT*FROM trabajador inner join credito on trabajador.id_trabajador=credito.id_trabajador where trabajador.id_trabajador = '{$_SESSION['usuario']}' ");


   while ($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)) {
    
         $nombre=$rowtr['Nombre'];
         $Descripcion=$rowtr['Descripcion'];
         $id=$rowtr['id_trabajador'];
         $credito=$rowtr['credito'];
         $perfil=$rowtr['Perfil'];

        

   }
   
    $menu="<ul id='menu' class='op-menu'>
      <li id='user'>
        <img src='trabajador/Perfil/$perfil'>
        <div>
          <p>$nombre</p>
         <h2>CREDITOS:$credito</h2>
        </div>
        
      </li>
      <li><a href='trabajos'>Explorar trabajos</a></li>
      <li><a href='postulacion'>Tus Postulaciones</a></li>
      <li><a href='credito'>Bolsa de créditos</a></li>
      <li><a href='tuperfil?filtro=$id'>Perfil</a></li>
      
      <li><a href='cerrar.php'>Salir</a></li>
     </ul>";

      if ($Descripcion=='') {
        
         require 'pagina/actualizar.v.php';



      }

     

    }else{

     $consultatr=$conexion->query("SELECT*FROM cliente where id_cliente = '{$_SESSION['usuario']}' ");
   while ($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)) {
    
         $nombre=$rowtr['Nombre'];
         $Apellido=$rowtr['Apellido'];
          $perfil=$rowtr['Perfil'];



   }
    
    $menu="<ul id='menu' class=' op-menu'>
      <li id='user'>
        <img src='cliente/Perfil/$perfil'>
        <div>
          <p>$nombre</p>
          <h2>$Apellido</h2>
        </div>
        
      </li>
      <li><a href='publicarproyecto'>Crear Proyecto</a></li>
      <li><a href='cerrar.php'>Salir</a></li>
     </ul>";
  
  
    }  
    
}

else {
  $menu='<ul id="menu" class="op-menu">
      <li><a href="/">Inicio</a></li>
      <li><a href="funcion">Cómo funciona</a></li>
      <li class="publi-c"><a href="publicarproyecto">Publica un trabajo</a></li>
        
        <li><a href="registro-trabajador.php">Quiero Trabajar</a></li>
        <li><a href="entrar">Entrar</a></li>
     </ul>';

    $nombre='';
}

   

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta property="og:title" content="Solver House" />
    <meta property="og:description" content="Solver House te brinda los mejores profesionales para el hogar" />
    <meta property="og:image" content="http://solverhouse.com/img/slider3.jpg" />      
    <meta property="og:url" content="https://solverhouse.com" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Solver House</title>
  <link rel="shortcut icon" href="img/icon.ico" />
	<link rel="stylesheet" type="text/css" href="menu/css/menu.css">
  <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="326940021514586"
  theme_color="#000000"
  logged_in_greeting="Hola, estamos en linea para atenderte  :)  "
  logged_out_greeting="Hola, estamos en linea para atenderte  :)  ">
</div>
  <div class="todo-menu">
  
  <div class="menu">
    <div class="logo">
      <span><a href="/"><img src="img/logo.png"></a></span>
      <p><?php echo $nombre; ?></p>
      <img onclick="menu()" src="img/menu.png">
    </div>
    <?php echo $menu; ?>
  </div>
  </div>
  
</body>
</html>