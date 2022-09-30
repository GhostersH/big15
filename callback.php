<?php
error_reporting(0);

$appid = "59085051-147f-4acf-a3e2-2da6f50496b2";

$tennantid = "2a967794-c4d1-4bc2-8036-1a5201a5d767";

$secret = "8237d140-6f14-4d7c-aba7-86ead78b146b";

$login_url ="https://login.microsoftonline.com/".$tennantid."/oauth2/v2.0/authorize";

session_start ();
$_SESSION['state']=session_id();


if ($_SESSION['msatg']){

   


    

   
   header ('Location: big15.php');
   
   

} //end if session

else   


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


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Big15 - Metropolitan-Toruing</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="index_files/favico.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg">
            
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                
                                        <h3 class="text-center mt-0 m-b-15">
                                            <a href="callback.php" class="logo logo-admin"><img src="assets/images/galapagos-big-15-logo.jpg" height="100" alt="logo"></a>
                                        </h3>
                
                                      
                
                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" action="index.html">
                
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <a href="?action=login"  type="submit"> <img src = "assets/images/ms-symbollockup_signin_light.svg"/> </a>
                                                    </div>
                                                </div>
                
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <a href="https://account.live.com/password/reset?mkt=es-es" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                
                                                </div>
                                            </form>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>