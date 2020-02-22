<?php session_start();

  require '../conexion.php';
 
if (isset($_SESSION['usuario']) && isset($_SESSION['Tipo']) ) {
 
	if ($_SESSION['Tipo'] == 'Trabajador') {

        $activo=$conexion->query("SELECT*FROM trabajador where id_trabajador='{$_SESSION['usuario']}'  and Estado='off'");
        $rowactivo=$activo->fetchAll(PDO::FETCH_ASSOC);
        if ($rowactivo==true) {
           echo "Usuario pendiente de activación; Espere mientras nuestros encargados verifiquen su solicitud";
        } else{

           
        $id_cliente= $_POST['id_post'];
        $credi= $_POST['creditos'];

        
        

              $cosultap=$conexion->query("SELECT*FROM postulado where id_post= '$id_cliente' and id_trabajador='{$_SESSION['usuario']}'  ");
        $rowp=$cosultap->fetchAll(PDO::FETCH_ASSOC);
        
        if ($rowp==false) {

          $cantpost=$conexion->query("SELECT*FROM cliente_post where id_post='$id_cliente'");
        while ($rowcatp=$cantpost->fetch(PDO::FETCH_ASSOC)) {
             $postu=$rowcatp['postulado'];
        }
        
        if ($postu==4) {
          echo "Limite máximo de postulaciones al trabajo alcanzado";
        }
        else{

      
          
          $cosulta=$conexion->query("SELECT*FROM cliente_post where id_post= '$id_cliente' ");
          while ($rowc=$cosulta->fetch(PDO::FETCH_ASSOC)) {
          $id_user=$rowc['id_cliente'];
          $postulados=$rowc['postulado'];
          }
          

       //consulta de datos del cliente

        $cosultam=$conexion->query("SELECT*FROM cliente_post where id_cliente= '$id_user' ");
        while ($rowm=$cosultam->fetch(PDO::FETCH_ASSOC)) {
          $celular=$rowm['celular'];
          $correo=$rowm['correo'];
        }
        // descuento de creditos
        

         $cosultacre=$conexion->query("SELECT*FROM credito where id_trabajador = '{$_SESSION['usuario']}' ");
        while ($rowcre=$cosultacre->fetch(PDO::FETCH_ASSOC)) {
          
          $credit=$rowcre['credito'];
          
        }
        
        // validar la cantidad de creditos
        if ($credit >= 0) {
          
           $finalcredito=$credit-$credi;

           if ($finalcredito >= 0 ) {

               $valor="<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>
            Celular: $celular </br>
            Correo: $correo </br>  
          </p>";

               $insertar=$conexion->query("INSERT INTO postulado (id_postulado, id_trabajador, id_post, mensaje) values (null, '{$_SESSION['usuario']}', '$id_cliente', '$valor')");
               
               if ($insertar) {

                 $actualizar=$conexion->query(" UPDATE credito set credito = '$finalcredito' where id_trabajador = '{$_SESSION['usuario']}'");
                  
                  if ($actualizar) {
                    
                    $contadorfinal=$postulados+1;
                   
                 $contador=$conexion->query("UPDATE cliente_post set postulado ='$contadorfinal' where id_post = '$id_cliente'");

                 if ($contador) {
                    echo $valor;
                 }
                  }

                 
               }
           }else{
              echo "Creditos insuficientes";
           }
        }

 

         





        }
         




          



        }
        else{


           $cosulta=$conexion->query("SELECT*FROM cliente_post where id_post= '$id_cliente' ");
        while ($rowc=$cosulta->fetch(PDO::FETCH_ASSOC)) {
          $id_user=$rowc['id_cliente'];
        }


       //consulta de datos del cliente

        $cosultam=$conexion->query("SELECT*FROM cliente_post where id_cliente= '$id_user' ");
        while ($rowm=$cosultam->fetch(PDO::FETCH_ASSOC)) {
          $celular=$rowm['celular'];
          $correo=$rowm['correo'];
        }

      $valor="<p>Hola gracias por comunicarte, le adjunto mis datos de contacto. </br>
            Celular: $celular </br>
            Correo: $correo </br>  
          </p>";
      echo $valor;



        }
        
        


       

        




        }




	}
	else{
      echo "Usted no puede acceder a esta opción";
	}
	
}

else{
	echo "<a href='entrar.php'>Iniciar sesión para consultar</a>";
}



 
 ?>