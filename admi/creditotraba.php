<?php 

    require '../conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
	 $consultac=$conexion->query("SELECT * FROM credito where id_trabajador ='{$_POST['id']}'");
	 while ($rowce=$consultac->fetch(PDO::FETCH_ASSOC)) {
	 	   $creditos=$rowce['credito'];
	 }

	 $creditofin=$creditos+$_POST['credito'];

    $credito=$conexion->query("UPDATE credito set credito='$creditofin' where id_trabajador='{$_POST['id']}' ");

    if ($credito) {
    	
    	echo "exit";
    }else{
    	echo "error al agregar crédito";
    }

}

 ?>