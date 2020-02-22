<?php session_start(); 
   
   require 'conexion.php';
 
 
if (isset($_SESSION['usuario'])) {
	
		header('Location:validar.php');
	
	
}

else{

	require 'menu/menu_s.php';
}
  $errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$correo = filter_var(strtolower( $_POST['usuario']) ,FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];
	

	

   $query="SELECT * FROM cliente WHERE Celular='$correo' AND Contraseña = '$password' ";

    $consulta = $conexion->query($query);
    $row = $consulta->fetch(PDO::FETCH_ASSOC);
          
if ($row != false) {
	
	 	$_SESSION['usuario'] =$row['id_cliente'];

        $_SESSION['Tipo']=$row['Tipo'];









	 	

	  header('Location:index.php');
	
	
}else{


	

   $query="SELECT * FROM trabajador WHERE Celular='$correo' AND Contraseña = '$password' ";

    $consulta = $conexion->query($query);
    $row = $consulta->fetch(PDO::FETCH_ASSOC);
          
if ($row != false) {
	
	 	$_SESSION['usuario'] =$row['id_trabajador'];
	 	$_SESSION['Tipo']=$row['Tipo'];

	header('Location:validar.php');
	
	
}else{
	

    
   $query="SELECT * FROM administrador WHERE correo='$correo' AND contraseña = '$password' ";

    $consulta = $conexion->query($query);
    $row = $consulta->fetch(PDO::FETCH_ASSOC);
          
if ($row != false) {
	
	 	$_SESSION['usuario'] =$row['id_admi'];
	 	$_SESSION['Tipo']=$row['Tipo'];

	header('Location:admi/trabajadores.php');
	
	
}else{
	
   $errores='Usuario y/o contraseña incorrecto';



	
	
}



	
}
	
}

	
}







   require 'pagina/entrar.v.php';


 ?>