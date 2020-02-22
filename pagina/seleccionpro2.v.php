<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body>
  <section class="seleccionar-pr wow fadeInLeft" data-wow-duration = "2s">
  	<h1>¿Tienes una profesion adicional que agregar?</h1>
  	  <form class="item-form"  method="post" action="segundaprofesion.php">
  	  	<div class="pr-s">
  	  		<?php foreach ($rowpro as $datopro): ?>
  	  		<label for="<?php echo $datopro['Profesion']; ?>" class="cj-pr">
  	  	  	 <input id="<?php echo $datopro['Profesion']; ?>" type="radio" name="profesion" value="<?php echo $datopro['id_profesion'];  ?>" >
  	  	  	 <div class="img-p">
  	  	  	 	<img src="img/<?php echo $datopro['Foto']; ?>">
  	  	  	 	<p><?php echo $datopro['Profesion']; ?></p>
  	  	  	 </div>
             
  	  	  </label>
  	  	<?php endforeach ?>
  	  	</div>
  	  	
        <input type="submit" name="" value="Continuar">
        <a href="categoria.php">Omitir</a>
  	  </form>
  </section>
</body>
</html>