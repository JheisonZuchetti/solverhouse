<?php 
    require 'menu/menu.php';
   require '../conexion.php';
  $finalf='';
  $profe1='';
$filtro = isset($_GET['id']) ? (String)$_GET['id'] : false;
if ($filtro) {
  
$consultatr=$conexion->query("SELECT trabajador.id_trabajador as id_clie, Nombre , Apellido , Descripcion, Distrito, Perfil, profesion.Profesion as profe , Foto FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador INNER JOIN profesion ON profesion.id_profesion = profesion_trabajador.Profesion WHERE trabajador.id_trabajador='$filtro' ");

 while($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)){
      $id_clie=$rowtr['id_clie'];
       $nombre=$rowtr['Nombre'];
       $apellido=$rowtr['Apellido'];
       $descripcion=$rowtr['Descripcion'];
       $distrito=$rowtr['Distrito'];
       $perfil=$rowtr['Perfil'];
       $profe=$rowtr['profe'];
       $foto=$rowtr['Foto'];
 }


 // segunda profesion 
  $segundaprofe='';
  $consultas=$conexion->query("SELECT profesion.Profesion as profe2 , Foto FROM segunda_profesion inner join profesion on profesion.id_profesion= segunda_profesion.Profesion WHERE segunda_profesion.id_trabajador='$filtro' ");

 while($rowts=$consultas->fetch(PDO::FETCH_ASSOC)){
      
      if ($rowts!=false) {
        $foto1=$rowts['Foto'];
        $finalf="<img src='img/$foto1'>";
        $profe1=$rowts['profe2'];
      }else{
        $finalf='0';
      }
       
 }

 //creditos
 $consultac=$conexion->query("SELECT * FROM credito where id_trabajador ='$filtro'");
   while ($rowce=$consultac->fetch(PDO::FETCH_ASSOC)) {

       $creditos=$rowce['credito'];
   }
       
 


 //fin
  $conscate=$conexion->query("SELECT categoria.Categoria as categoria FROM categoria_trabajador INNER JOIN categoria ON categoria_trabajador.Categoria = categoria.id_categoria where id_trabajador = '$filtro' ");
  $rowct=$conscate->fetchAll(PDO::FETCH_ASSOC);
  
  $conscate1=$conexion->query("SELECT categoria.Categoria as categoria FROM segunda_categoria INNER JOIN categoria ON segunda_categoria.Categoria = categoria.id_categoria where id_trabajador = '$filtro' ");
  $rowct1=$conscate1->fetchAll(PDO::FETCH_ASSOC);





}

  

   
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/lightbox.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/lightbox.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
  <section class="port-p">
     <img src="../trabajador/Portada/slider2.jpg">
  </section>
  <div class="perfil-t">
      <div class="t-foto">
          <div class="img-fot" >
            <img src="../trabajador/Perfil/<?php echo $perfil; ?>">
          </div>

          <div class="info-p">
            <div>
              <img src="img/<?php echo $foto; ?>">
              <p><?php echo $profe; ?></p>
             </p>
             </div>
             <div>
              <?php echo $finalf; ?>
              <p><?php echo $profe1; ?></p>
             </p>
             </div>
             <div>
              <img src="img/location.png">
              <p><?php echo $distrito ?></p>
             </div>
          </div>
      </div>
      <div class="t-des">
          <h1><?php echo $nombre." ". $apellido; ?></h1>
          <p><?php echo $descripcion; ?></p>

          <h2>Especialidades</h2>

          <?php foreach ($rowct as $datoct ): ?>
            <li><?php echo $datoct['categoria']; ?></li>
          <?php endforeach ?>
          <br>
          <h2>Otras especialidades</h2>
        <?php foreach ($rowct1 as $datoct1 ): ?>
            <li><?php echo $datoct1['categoria']; ?></li>
          <?php endforeach ?>
      </div>
  </div>
   <section class="obtener1">
     <form  id="credito-ag1"  class="credito-ag" action="trabajo-vista.php">
      <input type="hidden" name="id" value="<?php echo $id_clie; ?>">
      <h1>Agregar Créditos</h1>
      <p style="text-align: center; padding: 8px;">CD: <?php echo $creditos ?></p>
         <input type="text" name="credito" required="" placeholder="Valor del post">
         <div>
           <p id="Exito" class="rgdisplay" >creditos agregados</p>
         </div>
         <button>Agregar</button>
      <a href="agregartrabajador.php?id=<?php echo $id_clie ;?> " >Activar Cliente</a>
      <a href="eliminarpost.php?id=<?php echo $id_clie ; ?>" >Eliminar Cliente</a>
     </form>

  </section>
  <script type="text/javascript" src="creditotrabaj.js"></script>
</body>
</html>