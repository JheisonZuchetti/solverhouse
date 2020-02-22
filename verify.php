<?php  
error_reporting(0);
if(isset($_POST["code"])){

session_start();
$_SESSION['code']=$_POST["code"];
header('Location:publicarproyecto.php');
$codigo=$_SESSION['code'];
$app_id = '2333627136850829';
$secret = '02946aa9c2e74924a37b17226ce5a3eb';
$version = 'v1.1';



function doCurl($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $data;
}

// Exchange authorization code for access token
$token_exchange_url = 'https://graph.accountkit.com/'.$version.'/access_token?'.
  'grant_type=authorization_code'.
  '&code='.$_POST['code'].
  "&access_token=AA|$app_id|$secret";

$data = doCurl($token_exchange_url);
$user_id = $data['id'];
$_SESSION['id_user']=$user_id;
$user_access_token = $data['access_token'];
$refresh_interval = $data['token_refresh_interval_sec'];

// Get Account Kit information
$me_endpoint_url = 'https://graph.accountkit.com/'.$version.'/me?'.
  'access_token='.$user_access_token;

 

$data = doCurl($me_endpoint_url);
$phone= isset($data['phone']) ? $data['phone']['number'] : '';
$email = isset($data['email']) ? $data['email']['address'] : '';
 $_SESSION['phone']=$phone;

}

?>