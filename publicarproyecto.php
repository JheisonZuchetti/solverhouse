<?php session_start();
require 'menu/menu_s.php';
require 'conexion.php';
if (  isset($_SESSION['code']) ) {

     $phone=$_SESSION['phone'];
     $usuario=$_SESSION['id_user'];
  

}
else{
  require 'registro.php';
}

 if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

   

   foreach ($_FILES['foto']['name'] as $key => $name){
    
    $newFilename =  $name;
    move_uploaded_file($_FILES['foto']['tmp_name'][$key], 'cliente/fotos_post/' . $newFilename);
  }
   $consulta = $conexion -> query("INSERT INTO cliente_post (id_post, id_cliente,Distrito, Nombre, Descripcion, Foto1, Foto2, Foto3, Presupuesto, Solicitud, Tipo, Profesion, nom_cli, ape_cli, celular, correo,can_credito, postulado) VALUES (null, '$usuario','{$_POST['distrito']}', '{$_POST['nombre']}', '{$_POST['descripcion']}', '{$_FILES['foto']['name'][0]}', '{$_FILES['foto']['name'][1]}', '{$_FILES['foto']['name'][2]}', '{$_POST['presupuesto']}', '{$_POST['tipo-u']}', '{$_POST['tipo-p']}', '{$_POST['profesion']}','{$_POST['nom_cli']}','{$_POST['ape_cli']}', '{$_POST['celular']}', '{$_POST['correo']}',null,'0' )");

    print_r($conexion->errorInfo()); 	
    if($consulta){

      header('Location:confirmacion.php');
    }
    
    }

    $copro=$conexion->query("SELECT*FROM profesion ");
    $rowpro=$copro->fetchAll(PDO::FETCH_ASSOC);

   $presu=$conexion->query("SELECT*FROM presupuesto ");
   $rowpre=$presu->fetchAll(PDO::FETCH_ASSOC);
    $distri=$conexion->query("SELECT*FROM distrito ");
   $rowdis=$distri->fetchAll(PDO::FETCH_ASSOC);

   

 require 'pagina/publicarproyecto.v.php';
   require 'menu/footer.php';
 ?>