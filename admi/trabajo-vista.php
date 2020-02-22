<?php 
    require 'menu/menu.php';
   require '../conexion.php';

   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;
  if(!$id){
  
  }
  

    $vistatb=$conexion->query("SELECT*FROM cliente_post where id_post='$id' ");
    

    while ($rowtb=$vistatb->Fetch(PDO::FETCH_ASSOC)) {
       
          $post_c=$rowtb['id_post'];
        $nombre_c=$rowtb['nom_cli'];
        $nombre=$rowtb['Nombre'];
        $descripcion =$rowtb['Descripcion'];
        $foto=$rowtb['Foto1'];
        $foto1=$rowtb['Foto2'];
        $foto2=$rowtb['Foto3'];
        $presupuesto=$rowtb['Presupuesto'];
          $credito=$rowtb['can_credito'];
          $distrito=$rowtb['Distrito'];
          $celular=$rowtb['celular'];
          $solicitud=$rowtb['Solicitud'];
          $pedido=$rowtb['Tipo'];


        if ($foto=='') {
           $img1='';
        }else{
          $img1="<a href='../cliente/fotos_post/$foto' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='../cliente/fotos_post/$foto'>
          
          
        </a>";
        }
        if ($foto1=='') {
           $img2='';
        }else{
          $img2="<a href='../cliente/fotos_post/$foto1' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='../cliente/fotos_post/$foto1'>
          
          
        </a>";
        }
        if ($foto2=='') {
            $img3='';
        }else{
          $img3="<a href='../cliente/fotos_post/$foto2' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='../cliente/fotos_post/$foto2'>
          
          
        </a>";
        }
    }

   
require 'vista/trabajo-vista.v.php';
 ?>
