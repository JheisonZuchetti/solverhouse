<?php session_start();
   require 'menu/menu_s.php';
   require 'conexion.php';
if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo']) ) {

  
  
  
}
else{
  header('Location:entrar.php');
}

   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;
  if(!$id){
	
  }

    $vistatb=$conexion->query("SELECT * FROM cliente_post  where id_post='$id' ");

    while ($rowtb=$vistatb->Fetch(PDO::FETCH_ASSOC)) {
    	if ($rowtb == false) {

    		header('Location:index.php');
    	} 
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


    	  if ($foto=='') {
    	  	 $img1='';
    	  }else{
    	  	$img1="<a href='cliente/fotos_post/$foto' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='cliente/fotos_post/$foto'>
          
     			
     		</a>";
    	  }
    	  if ($foto1=='') {
    	  	 $img2='';
    	  }else{
    	  	$img2="<a href='cliente/fotos_post/$foto1' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='cliente/fotos_post/$foto1'>
          
     			
     		</a>";
    	  }
    	  if ($foto2=='') {
    	  	  $img3='';
    	  }else{
    	  	$img3="<a href='cliente/fotos_post/$foto2' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='cliente/fotos_post/$foto2'>
          
     			
     		</a>";
    	  }
    }

    $consultapost=$conexion->query("SELECT id_post, profesion.Profesion as profe , Nombre ,Distrito,Descripcion,Presupuesto ,postulado FROM cliente_post  inner join profesion on cliente_post.Profesion = profesion.id_profesion   where Estado='on' order by rand()  limit 4");
   $rowpost=$consultapost->fetchAll(PDO::FETCH_ASSOC);

   require 'pagina/trabajo-vista.v.php';
   require 'menu/footer.php';

 ?>