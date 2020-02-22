function menu(){
  var menu=document.getElementById('menu');

  if (menu.className==="op-menu") {

    menu.className += " op-menu1";
    
  }else{
    menu.className="op-menu";
    

  }
}

function validar() {
  if ($('#nombre').val().length == 0) {
    alert('Ingrese rut');
    
  }
}

function siguiente(){
	validar();
	document.getElementById('form1').style.display="block";
}




function select(){
    $('#purpro input').on('change', function() {
     if($('input[name=profesion]:checked', '#purpro').val()){
        document.getElementById('cajita-pr').style.background="red";
    }else{
        document.getElementById('cajita-pr').style.background="white";
    } 
      
      
  });

}


function redireccionar(){

    location.href="trabajador.php";
}

function categoria(){
  var ct=document.getElementById('ct-movil');

  if (ct.className==='ct-movil') {
     
      ct.className += " ct-m";
      document.getElementById('caja-categoria').style.height='auto';
  }else{
     ct.className='ct-movil';
     document.getElementById('caja-categoria').style.height='0';
  }
}