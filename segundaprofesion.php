<?php session_start();
   if (isset($_SESSION['usuario'])) {
    
    require 'menu/menu_s.php';
	
} else{
	header('Location:entrar.php');
}
   
   require 'conexion.php';

   $consultapro=$conexion->query("SELECT* FROM profesion");
   $rowpro=$consultapro->fetchALL(PDO::FETCH_ASSOC);

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  	
       $profesion=$_POST['profesion'];
       

    if ($profesion != '') {
       	  
         $verificar=$conexion->query("SELECT*FROM segunda_profesion where id_trabajador='{$_SESSION['usuario']}' ");

           $rowveri=$verificar->fetchAll(PDO::FETCH_ASSOC);

           if ($rowveri != false) {

               $actualiza=$conexion->query("UPDATE segunda_profesion set Profesion='$profesion' where id_trabajador='{$_SESSION['usuario']}' ");

               if ($actualiza) {
          
               header('Location:categoria.php');
             }
             
           }else{

               $inserpro=$conexion->query("INSERT INTO segunda_profesion (id_p_trabajador, id_trabajador, Profesion) VALUES (null, '{$_SESSION['usuario']}', '$profesion')");
        
             if ($inserpro) {
          
             header('Location:categoria.php');
             }
        

           }
          


       }else{
         
         header('Location:segundaprofesion.php');

       }


  }



  require 'pagina/seleccionpro2.v.php'; 


 ?>