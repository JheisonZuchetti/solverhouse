<?php session_start();
  require 'menu/menu_s.php';

  require 'conexion.php';

  if (isset($_SESSION['usuario'])  ) {


}else{

   header('Location:index.php');

}
$finalf='';
$profe1='';

  
  $consultatr=$conexion->query("SELECT Nombre , Apellido , Descripcion, Distrito, Perfil, profesion.Profesion as profe , Foto FROM trabajador inner join profesion_trabajador on trabajador.id_trabajador=profesion_trabajador.id_trabajador INNER JOIN profesion ON profesion.id_profesion = profesion_trabajador.Profesion WHERE trabajador.id_trabajador='{$_SESSION['usuario']}' ");

 while($rowtr=$consultatr->fetch(PDO::FETCH_ASSOC)){
      
       $nombre=$rowtr['Nombre'];
       $apellido=$rowtr['Apellido'];
       $descripcion=$rowtr['Descripcion'];
       $distrito=$rowtr['Distrito'];
       $perfil=$rowtr['Perfil'];
       $profe=$rowtr['profe'];
       $foto=$rowtr['Foto'];
       $id=$rowtr['id_trabajador'];
 }


 // segunda profesion 
  $segundaprofe='';
  $consultas=$conexion->query("SELECT profesion.Profesion as profe2 , Foto FROM segunda_profesion inner join profesion on profesion.id_profesion= segunda_profesion.Profesion WHERE segunda_profesion.id_trabajador='{$_SESSION['usuario']}' ");

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
  $conscate=$conexion->query("SELECT categoria.Categoria as categoria FROM categoria_trabajador INNER JOIN categoria ON categoria_trabajador.Categoria = categoria.id_categoria where id_trabajador = '{$_SESSION['usuario']}' ");
  $rowct=$conscate->fetchAll(PDO::FETCH_ASSOC);
  
  $conscate1=$conexion->query("SELECT categoria.Categoria as categoria FROM segunda_categoria INNER JOIN categoria ON segunda_categoria.Categoria = categoria.id_categoria where id_trabajador = '{$_SESSION['usuario']}' ");
  $rowct1=$conscate1->fetchAll(PDO::FETCH_ASSOC);





  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

  if($check !== false) {

    $carpeta_destino = 'trabajador/Perfil/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];    

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    
    $actualizar=$conexion->query("UPDATE trabajador set Perfil='{$_FILES['foto']['name']}' , Descripcion='{$_POST['descripcion']}' where id_trabajador= '{$_SESSION['usuario']}' ");

    if ($actualizar) {
    	
    	header('Location:tuperfil.php');
    }


 }else{

 	$actualizar=$conexion->query("UPDATE trabajador set  Descripcion='{$_POST['descripcion']}' where id_trabajador= '{$_SESSION['usuario']}' ");

    if ($actualizar) {
    	
    	header('Location:tuperfil.php');
    }
 }
}


  require 'pagina/tuperfil.v.php';
  require 'menu/footer.php';


 ?>