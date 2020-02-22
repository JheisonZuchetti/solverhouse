<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 require 'menu/menu_s.php';
  
} else{
  header('Location:sesion.php');
}
require 'conexion.php';
  
  $veri="SELECT * FROM categoria_trabajador where id_trabajador = '{$_SESSION['usuario']}' ";
  $verict=$conexion->query($veri);
 $rowct=$verict->fetch(PDO::FETCH_ASSOC);

	if ($rowct != false) {
        header('Location:admin.php');
   }

   
$query1="SELECT * FROM  categoria INNER JOIN profesion_trabajador  ON Profesion = categoria.id_profesion WHERE profesion_trabajador.id_trabajador= '{$_SESSION['usuario']}'";
$sth1 = $conexion->query($query1);
$row1 = $sth1->fetchAll(PDO::FETCH_ASSOC) ;

$query3="SELECT * FROM  categoria INNER JOIN segunda_profesion  ON Profesion = categoria.id_profesion WHERE segunda_profesion.id_trabajador= '{$_SESSION['usuario']}'";
$sth3 = $conexion->query($query3);
$row3 = $sth3->fetchAll(PDO::FETCH_ASSOC) ;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $check=$_POST['checkbox'];
 $checks=$_POST['checkbox-s'];

 if ($check != ""   ) {
 	

     if (is_array($_POST['checkbox'])) {
     	 
     	  while (list($key , $value) = each($_POST['checkbox'])) {
     	  	$sbctg=$conexion->query("INSERT INTO categoria_trabajador (id_c_trabajador, id_trabajador,Categoria) VALUES (null, '{$_SESSION['usuario']}', '$value' )");
     	  }

     }

     if (is_array($_POST['checkbox-s'])) {
       
        while (list($key , $value) = each($_POST['checkbox-s'])) {
          $sbctg=$conexion->query("INSERT INTO segunda_categoria (id_c_trabajador, id_trabajador,Categoria) VALUES (null, '{$_SESSION['usuario']}', '$value' )");
        }

        
     }
  $credito=$conexion->query("INSERT INTO credito (id_credito, id_trabajador, Credito) VALUES(null,'{$_SESSION['usuario']}','1' )");
  if ($credito) {
   header('Location:trabajos.php');
  }

       
 }else{
   header('Location:categoria.php');
 }
/*
 $checkd = $_POST["checkboxd"];
  if ($checkd != "") {
  

     if (is_array($_POST['checkboxd'])) {
       
        while (list($keyd , $valued) = each($_POST['checkboxd'])) {
          $sbctgd=$conexion->query("INSERT INTO lugar_tbj (id_lugartbj, id_trabajador,distrito) VALUES (null, '{$_SESSION['usuario']}', '$valued' )");
        }

        header('Location:admin.php');
     }

 } */

}
$queryd="SELECT* FROM distrito";
$sthd = $conexion->query($queryd);
$rowd = $sthd->fetchAll(PDO::FETCH_ASSOC) ;
require 'pagina/categoria.v.php';


require 'menu/footer.php';
 ?>