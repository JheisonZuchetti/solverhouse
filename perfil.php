<?php 
   require 'menu/menu_user.php';
   require 'conexion.php';
$finalf='';
$profe1='';
$filtro = isset($_GET['filtro']) ? (String)$_GET['filtro'] : false;
  
  $consultatr=$conexion->query("SELECT Nombre , Apellido , Descripcion, Distrito, Perfil, profesion.Profesion as profe , Foto FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador INNER JOIN profesion ON profesion.id_profesion = profesion_trabajador.Profesion WHERE trabajador.id_trabajador='$filtro' ");

 while($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)){
      
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
       
 


 //fin
  $conscate=$conexion->query("SELECT categoria.Categoria as categoria FROM categoria_trabajador INNER JOIN categoria ON categoria_trabajador.Categoria = categoria.id_categoria where id_trabajador = '$filtro' ");
  $rowct=$conscate->fetchAll(PDO::FETCH_ASSOC);
  
  $conscate1=$conexion->query("SELECT categoria.Categoria as categoria FROM segunda_categoria INNER JOIN categoria ON segunda_categoria.Categoria = categoria.id_categoria where id_trabajador = '$filtro' ");
  $rowct1=$conscate1->fetchAll(PDO::FETCH_ASSOC);

   require 'trabajador/perfil.v.php';
   require 'menu/footer.php';
 ?>