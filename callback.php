<?php


$appid = "59085051-147f-4acf-a3e2-2da6f50496b2";

$tennantid = "2a967794-c4d1-4bc2-8036-1a5201a5d767";

$secret = "8237d140-6f14-4d7c-aba7-86ead78b146b";

$login_url ="https://login.microsoftonline.com/".$tennantid."/oauth2/v2.0/authorize";


session_start ();

$_SESSION['state']=session_id();

echo "<h1>MICROSOFT LOGIN PHP/METROPOLITAN TOURING</h1><br>";


if (isset ($_SESSION['msatg'])){

   echo "<h2>Authenticated ".$_SESSION["uname"]." </h2><br> ";

   
echo 'PRUEBA ';
   


   echo '<p><a href="?action=logout">Log Out</a></p>';
   header ('Location: big15.php');
   


} //end if session

else   echo '<h2><p>Por favor ingresa con tu cuenta de microsoft! <a href="?action=login">Log In</a></p></h2>';


if ($_GET['action'] == 'login'){

   $params = array ('client_id' =>$appid,

      'redirect_uri' =>'https://localhost/example/callback.php',

      'response_type' =>'token',

      'scope' =>'https://graph.microsoft.com/User.Read',

      'state' =>$_SESSION['state']);

   header ('Location: '.$login_url.'?'.http_build_query ($params));
   

}


echo '

<script> url = window.location.href;

i=url.indexOf("#");

if(i>0) {

 url=url.replace("#","?");

 window.location.href=url;}

</script>

';


if (array_key_exists ('access_token', $_GET))

 {

   $_SESSION['t'] = $_GET['access_token'];

   $t = $_SESSION['t'];

$ch = curl_init ();

curl_setopt ($ch, CURLOPT_HTTPHEADER, array ('Authorization: Bearer '.$t,

                                            'Conent-type: application/json'));

curl_setopt ($ch, CURLOPT_URL, "https://graph.microsoft.com/v1.0/me/");

curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

$rez = json_decode (curl_exec ($ch), 1);

if (array_key_exists ('error', $rez)){  

 var_dump ($rez['error']);    

 die();

}

else  {

$_SESSION['msatg'] = 1;  //auth and verified

$_SESSION['uname'] = $rez["displayName"];

$_SESSION['id'] = $rez["id"];




}

curl_close ($ch);

   header ('Location: https://localhost/example/callback.php');

}


if ($_GET['action'] == 'logout'){

   unset ($_SESSION['msatg']);

   header ('Location: https://localhost/example/callback.php');
   
   session_destroy();

}