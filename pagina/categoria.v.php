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
     <div class="ckd wow fadeInLeft" data-wow-duration = "2s">
     	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="ck" method="post">
            <h1>Elige tus categorias</h1>
            <p>Elije las categorias que dominas en su mayor porcentaje para una mejor selección ante el cliente</p>
     	<div class="ckp">
     	<?php foreach ($row1 as $dato1) :?>
     		
     			<div class="ckpa">
     				<input id="<?php echo $dato1['Categoria'] ?>" type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $dato1['id_categoria'] ?>" >
                    <label for="<?php echo $dato1['Categoria'] ?>"><?php echo $dato1['Categoria'] ?></label> 
     			</div>
     			
     		
     		
        <?php endforeach; ?>
        </div>
        <div class="ckp">
            <?php foreach ($row3 as $dato3) :?>
            
                <div class="ckpa">
                    <input id="<?php echo $dato3['Categoria'] ?>" type="checkbox" name="checkbox-s[]" id="checkbox" value="<?php echo $dato3['id_categoria'] ?>" >
                    <label for="<?php echo $dato3['Categoria'] ?>"><?php echo $dato3['Categoria'] ?></label> 
                </div>
                
            
            
        <?php endforeach; ?>
        </div>
        <!--
        <h1>Elige tus lugares de trabajo</h1>
        <div class="ckp">

        <?php foreach ($rowd as $datod) :?>
            
                <div class="ckpa">
                    <input type="checkbox" name="checkboxd[]" id="checkboxd" value="<?php echo $datod['Distrito'] ?>" > <?php echo $datod['Distrito'] ?>
                </div>
                
            
            
        <?php endforeach; ?>
        </div> -->
        <input type="submit" value="Continuar" name="">
     	</form>

     </div>
</body>
</html>