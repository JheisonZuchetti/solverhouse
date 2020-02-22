

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
                
                 <h4>Bienvenido a Solver House</h4>
                 <span>Una manera más facil de publicar</span>
                <input value="+51" id="country_code" type="hidden" />
                <input placeholder="phone number" id="phone_number" type="hidden" />
                <div class="button">
                   <button onclick="smsLogin();">Publica con tu celular</button>
                </div>
                
                <p>Al hacer clic , aceptas los <a href="#">Términos y condiciones</a>  y las <a href="#">Política de privacidad</a> </p>
              </div>
                
           
        </div>
        <form id="login_success" method="post" action="verify.php">
  <input id="csrf" type="hidden" name="csrf" />
  <input id="code" type="hidden" name="code" />
  <input id="phone" type="hidden" name="phone" />
</form>

        <script>
  // initialize Account Kit with CSRF protection
  AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"2333627136850829", 
        state:"1e47c789e8174a06b121ce1f92ccd3d5", 
        version:"v1.1",
        fbAppEventsEnabled:true,
        redirect:"{{REDIRECT_URL}}"
      }
    );
  };

  // login callback
  function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      document.getElementById("code").value = response.code;
      document.getElementById("csrf").value = response.state;
      document.getElementById("phone").value = response.phone;
     document.getElementById("login_success").submit();
      
       
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
    }
  }

  // phone form submission handler
  function smsLogin() {
    var countryCode = document.getElementById("country_code").value;
    var phoneNumber = document.getElementById("phone_number").value;
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