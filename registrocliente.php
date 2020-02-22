<?php session_start();

if (isset($_SESSION['token'])   ) {

   header('Location:registro-cliente.php');
       

}else{

    
 

}
require 'menu/menu_s.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://sdk.accountkit.com/es_ES/sdk.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>

    <body>
        <div class="verificar">
              <div>
                <img src="img/logo.png">
                 <h4>Bienvenido a Solver House</h4>
                 <span>Regístrate y publica tu proyecto</span>
                <input value="+51" id="country_code" type="hidden" />
                <input placeholder="phone number" id="phone_number" type="hidden" />
                <div class="button">
                   <button onclick="smsLogin();">Registrar con SMS</button>
                </div>
                
                <p>Al hacer clic , aceptas los <a href="#">Términos y condiciones</a>  y las <a href="#">Política de privacidad</a> </p>
              </div>
                
           
        </div>
        
        
        <script>
          //https://developers.facebook.com/docs/accountkit/webjs
          $(".message").append("<p>initialized Account Kit.</p>");
          
          // initialize Account Kit with CSRF protection
          AccountKit_OnInteractive = function(){
            AccountKit.init(
              {
                appId:"2333627136850829", 
                state:"96c1f2bab0d252b2b9c9a00343c2f7b5", 
                version:"v1.0",
                fbAppEventsEnabled:true
              }
            );
          };

            
          // login callback
          function loginCallback(response) {
            if (response.status === "PARTIALLY_AUTHENTICATED") {
              var code = response.code;
              var csrf = response.state;
                $(".message").append("<p>Received auth token from facebook -  "+ code +".</p>");
                $(".message").append("<p>Triggering AJAX for server-side validation.</p>");
                
                $.post("verify1.php", { code : code, csrf : csrf }, function(result){
                    $(".message").append( "<p>Server response : " + result + "</p>" );
                });
                location.href ="registro-cliente.php";
            }
            else if (response.status === "NOT_AUTHENTICATED") {
              // handle authentication failure
                $(".message").append("<p>( Error ) NOT_AUTHENTICATED status received from facebook, something went wrong.</p>");
            }
            else if (response.status === "BAD_PARAMS") {
              // handle bad parameters
                $(".message").append("<p>( Error ) BAD_PARAMS status received from facebook, something went wrong.</p>");
            }
          }
            
            
          // phone form submission handler
          function smsLogin() {
            var countryCode = document.getElementById("country_code").value;
            var phoneNumber = document.getElementById("phone_number").value;
            $(".message").append("<p>Triggering phone validation.</p>");
            AccountKit.login(
              'PHONE', 
              {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
              loginCallback
            );
          }


          // email form submission handler
          function emailLogin() {
            var emailAddress = document.getElementById("email").value;
            AccountKit.login(
              'EMAIL',
              {emailAddress: emailAddress},
              loginCallback
            );
          }
        </script>
        
    </body>
</html>