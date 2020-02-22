<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
	<title></title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body class="todo_pro " data-wow-duration = "2s" >
   <form id="purpro" method="post" enctype="multipart/form-data" class="pupro"  >
    
      <div class="profesion-li " data-wow-duration = "2s">
         <div class="titu-p">
            <h1>Elija el servicio que necesita</h1>
         </div>
        <div class="li-cb">
          <?php foreach ($rowpro as $datopro): ?>
          <label for="<?php echo $datopro['Profesion']; ?>" class="cj-pr">
             <input  id="<?php echo $datopro['Profesion']; ?>" type="radio" name="profesion" value="<?php echo $datopro['id_profesion'];  ?>" required="" >
             <div class="img-p">
              <img src="img/<?php echo $datopro['Foto']; ?>">
              <p><?php echo $datopro['Profesion']; ?></p>
             </div>
             
          </label>
        <?php endforeach ?>
      </div>
    </div>
      <div class="formulario-p " data-wow-duration = "2s">
         <h1>Cuéntanos lo que necesitas</h1>
         <label>Nombre del proyecto</label>
         <input type="text" name="nombre" required="">
         <label>Distrito</label>
         <select required="" name="distrito">
          <option disabled="" selected="" >Seleccionar</option>
             <?php foreach ($rowdis as $dis ): ?>
              <option value="<?php echo $dis['Distrito']; ?>" ><?php echo $dis['Distrito']; ?></option>
             <?php endforeach ?>
         </select>
         <label>Descríbanos su proyecto</label>
         <textarea name="descripcion" required=""></textarea>
         <label>Suba aquí las fotos del trabajo a realizar (Max 3 fts)</label>
         <div class="fotos-p">
            <input type="file" name="foto[]" multiple="" >
         </div>
      </div>
      <div class="formulario-p " data-wow-duration = "2s">
         <h1>Datos del Empleador</h1>
         <label>Nombre del empleador</label>
         <input type="text" name="nom_cli" required="">
         <label>Apellidos del Empleador</label>
         <input type="text" name="ape_cli" required="">
         <label>Celular</label>
         <input required="" value="<?php echo $phone ; ?>" readonly="readonly" type="text" name="celular" >
         <label>Correo</label>
         <input required="" type="email" name="correo" >
      </div>
     <div class="tipo-p " data-wow-duration = "2s">
         <h1>Presupuesto estimado</h1>
         <div class="presu">
            
            <div>
               <select required="" name="presupuesto">
                <?php foreach ($rowpre as $datopre ): ?>
                  <option><?php echo $datopre['presupuesto'] ?></option>
                <?php endforeach ?>
             
           </select>

            </div>
            
         </div>
         <div class="presu1">

            <h1>¿Para cuándo lo necesitas?</h1>
              <div class="presu-cd">
                  <div class="encaje">
                  <input type="radio" name="tipo-u" id="tipo-u" value="Próximos días" required="">
                  <label for="tipo-u">Próximos días</label>

               </div>
               <div class="encaje">
                  <input id="tipo-ua" type="radio" value="Próximo mes" name="tipo-u" required="">
                  <label for="tipo-ua">Próximo mes</label>
                  
               </div>
               <div class="encaje">
                  <input id="tipo-ua" type="radio" value="Aún no lo sé" name="tipo-u" required="">
                  <label for="tipo-ua">Aún no lo sé</label>
                  
               </div>
               
           
              </div>
               
         </div>
         
           
           <h1>¿Como deseas encargar el trabajo?</h1>
           <div class="ti-p " data-wow-duration = "2s">
              <div>
                 <input id="solo" type="radio" name="tipo-p"  value="Libre" required="">
                 <label for="solo"><h1>Publicacion libre</h1>
                 <p>Su publicación será vista por todos los trabajadores , recibiras cotizaciones. </p>
                 </label>
              </div>
              <div>
                 <input id="guiado" type="radio" name="tipo-p" required="">
                 <label for="Guiado"><h1>Consigue un Pro-Solver</h1>
                 <p>Le asignaremos a uno de nuestros trabajadores verificados. </p>
                 </label>
              </div>
           </div>
           
       </div>
       <input type="submit" name="" value="Publicar">
   </form>
</body>
</html>