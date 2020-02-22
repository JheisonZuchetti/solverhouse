<?php session_start();

  if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo'])) {
    if ($_SESSION['Tipo']=='Cliente') {
       header('Location:index.php');
    }
    
    require 'menu/menu_s.php';
	
} else{
	header('Location:entrar.php');
}
   
   require 'conexion.php';
    
   $consultapro=$conexion->query("SELECT* FROM profesion");
   $rowpro=$consultapro->fetchALL(PDO::FETCH_ASSOC);
  
   $opciones='';
   $ocultar='';

  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  	
       $profesion=$_POST['profesion'];
       

    if ($profesion != '') {
       	  
         $verificar=$conexion->query("SELECT*FROM profesion_trabajador where id_trabajador='{$_SESSION['usuario']}' ");

           $rowveri=$verificar->fetchAll(PDO::FETCH_ASSOC);

           if ($rowveri != false) {

               $actualiza=$conexion->query("UPDATE profesion_trabajador set Profesion='$profesion' where id_trabajador='{$_SESSION['usuario']}' ");

               if ($actualiza) {
              $ocultar='style="display:none"';
             $opciones='<p>¿Tiene una segunda profesión que adicionar?<a href="segundaprofesion.php">SI</a><a href="categoria.php">OMITIR</a></p>';
             }
             
           }else{

               $inserpro=$conexion->query("INSERT INTO profesion_trabajador (id_p_trabajador, id_trabajador, Profesion) VALUES (null, '{$_SESSION['usuario']}', '$profesion')");
        
             if ($inserpro) {
             $ocultar='style="display:none"';
             $opciones='<p>¿Tiene una segunda profesión que adicionar?<a href="segundaprofesion.php">SI</a><a href="categoria.php">OMITIR</a></p>';
             }
        

           }
          


       }else{
         
         header('Location:seleccionprofesion.php');

       }


  }



  require 'pagina/seleccionpr.v.php'; 


 ?>