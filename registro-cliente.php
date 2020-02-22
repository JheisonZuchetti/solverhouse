<?php session_start();
   require 'menu/menu_s.php';
   require 'conexion.php';

 if (isset($_SESSION['token'])   ) {

   
       

}else{

    
 header('Location:registrocliente.php');

}
   $condistrito=$conexion->query("SELECT*FROM distrito order by Distrito ASC ");
   $rowdistrito=$condistrito->fetchAll(PDO::FETCH_ASSOC);
     $errores='';
     
     $nombre= '';
     $apellido='';
     $correo= '';
     $celular= '';
     $distrito= '';
    

 

 if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

     $contra= $_POST['contraseña'];
     $contra1= $_POST['contraseña1'];
     $nombre= $_POST['nombre'];
     $apellido= $_POST['apellido'];
     $correo= $_POST['correo'];
     $celular= $_POST['celular'];
     $distrito= $_POST['distrito'];
     

if ($nombre!='' && $apellido!='' && $correo!='' && $celular!=''&& $distrito!='' && $contra!='' && $contra1!='') {
   

     if ($contra == $contra1) {
      
       $consulta=$conexion->query("INSERT INTO cliente (id_cliente, Nombre, Apellido, Correo, Celular , Distrito,  Perfil, Contraseña)  VALUES(null, '{$_POST['nombre']}', '{$_POST['apellido']}', '{$_POST['correo']}', '{$_POST['celular']}', '{$_POST['distrito']}', 'user.png', '{$_POST['contraseña']}')") ;   

     if ($conexion) {
        $consultacli=$conexion->query("SELECT*FROM cliente where Correo='{$_POST['correo']}'");
         while ($rowcli=$consultacli->fetch(PDO::FETCH_ASSOC)) {
           $id_tra=$rowcli['id_cliente'];
         }
         session_start();
         $_SESSION['usuario'] =$id_tra;

        $_SESSION['Tipo']='Cliente';

        header('Location:entrar.php');
     }

   }else{
       $errores='Contraseñas no coinciden';
   }

      

 }else{
   $errores='Completa todos los campos correctamente';
 }


   



      

   }
   





   require 'pagina/regcliente.php';
  


 ?>