<?php  
error_reporting(0);

define( "FB_ACCOUNT_KIT_APP_ID", "2333627136850829" );
define( "FB_ACCOUNT_KIT_APP_SECRET", "02946aa9c2e74924a37b17226ce5a3eb" );

$code = $_POST['code'];
$csrf = $_POST['csrf'];

if(isset($_POST["code"])){

session_start();
$_SESSION['token']=$code;
$auth = file_get_contents( 'https://graph.accountkit.com/v1.1/access_token?grant_type=authorization_code&code='.  $code .'&access_token=AA|'. FB_ACCOUNT_KIT_APP_ID .'|'. FB_ACCOUNT_KIT_APP_SECRET );

$access = json_decode( $auth, true );

if( empty( $access ) || !isset( $access['access_token'] ) ){
    return array( "status" => 2, "message" => "Unable to verify the phone number." );
}
else{

}

//App scret proof key Ref : https://developers.facebook.com/docs/graph-api/securing-requests
$appsecret_proof= hash_hmac( 'sha256', $access['access_token'], FB_ACCOUNT_KIT_APP_SECRET ); 

//echo 'https://graph.accountkit.com/v1.1/me/?access_token='. $access['access_token'];
$ch = curl_init();

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, 'https://graph.accountkit.com/v1.1/me/?access_token='. $access['access_token'].'&appsecret_proof='. $appsecret_proof ); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_TIMEOUT, '4');
$resp = trim(curl_exec($ch));
curl_close($ch);




if( empty( $info ) || !isset( $info['phone'] ) || isset( $info['error'] ) ){
    return array( "status" => 2, "message" => "Unable to verify the phone number." );
}

$phoneNumber = $info['phone']['national_number'];

echo json_encode( $info );


$user = $this->db->query( "SELECT * FROM user WHERE phone_number = '". $phoneNumber ."'" )->result_array();

if( !empty( $user ) ){
    //Create session
    return array( "status" => "01", "message" => "Login success", "token" => $jwt );
}else{
    return array( "status" => "02", "message" => "Phonenumber not registered with us." );
}
}
?>