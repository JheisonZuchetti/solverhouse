<?php 

    require '../conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $credito=$conexion->query("UPDATE cliente_post set can_credito='{$_POST['credito']}' where id_post='{$_POST['id']}' ");

    if ($credito) {
    	
    	echo "exit";
    }else{
    	echo "error al agregar crédito";
    }

}

 ?>