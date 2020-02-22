<?php session_start(); 
require 'menu/menu_s.php';
   require 'conexion.php';

  if (isset($_SESSION['usuario'])   ) {

    header('Location:index.php');
       

}else{

    
 

}
  
   $condistrito=$conexion->query("SELECT*FROM distrito order by Distrito ASC ");
   $rowdistrito=$condistrito->fetchAll(PDO::FETCH_ASSOC);
     $errores='';
     
     $nombre= '';
     $apellido='';
     $correo= '';
     $celular= '';
     $distrito= '';
     $direccion= '';

 

 if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

     $contra= $_POST['contraseña'];
     $contra1= $_POST['contraseña1'];
     $nombre= $_POST['nombre'];
     $apellido= $_POST['apellido'];
     $correo= $_POST['correo'];
     $celular= $_POST['celular'];
     $distrito= $_POST['distrito'];
     $direccion= $_POST['direccion-d'];

if ($nombre!='' && $apellido!=''  && $celular!=''&& $distrito!='' && $direccion!='' && $contra!='' && $contra1!='') {

 
      $concelu=$conexion->query("SELECT*FROM trabajador where Celular='$celular'");

        $rowcelu=$concelu->fetchAll(PDO::FETCH_ASSOC);

        if ($rowcelu==false) {


     if ($contra == $contra1) {

        
        
          
                $consulta=$conexion->query("INSERT INTO trabajador (id_trabajador, Nombre, Apellido, Correo, Celular , Distrito, Direcciòn,  Perfil, Contraseña)  VALUES(null, '{$_POST['nombre']}', '{$_POST['apellido']}', '{$_POST['correo']}', '{$_POST['celular']}', '{$_POST['distrito']}', '{$_POST['direccion']}', 'user.png', '{$_POST['contraseña']}')") ;   

     if ($conexion) {
         $consultacli=$conexion->query("SELECT*FROM trabajador where Correo='{$_POST['correo']}'");
         while ($rowcli=$consultacli->fetch(PDO::FETCH_ASSOC)) {
           $id_tra=$rowcli['id_trabajador'];
         }
         session_start();
         $_SESSION['usuario'] =$id_tra;

        $_SESSION['Tipo']='Trabajador';

        header('Location:entrar.php');
     }

   }else{
     $errores='Contraseñas no coinciden';
   }

         
        }else{

          $errores='Celular ya registrado';

        }
     

    }

  else{

      $errores='Completa todos los campos correctamente';
  }





}


   require 'pagina/regtrabjador.v.php';
  


 ?>