<?php
session_start ();
error_reporting(0);
$varsession = $_SESSION ['state'];
if($varsession == null || $varsession=''){
echo'No tienes acceso';

die();
}

if (isset($_GET['action']) == 'logout'){

  unset ($_SESSION['msatg']);

  header ('Location: https://localhost/example/callback.php');
  
  session_destroy();

}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <script>
    var howLong = 30;
    t = null;

    function closeMe() {
      t = setTimeout(“self.close()”, howLong);
    }
  </script>
  <script>
    setTimeout('document.location.reload()', 300000);
  </script>
  <meta name="robots" content="noindex,nofollow">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metropolitan Galápagos</title>

  <link rel="stylesheet" href="build/css/app.css">
  <link rel="icon" type="image/x-icon" href="index_files/favico.png">

  <!-- Styles -->

  <link href="index_files/bootstrap.css" rel="stylesheet">
  <link href="index_files/font-awesome.min.css" rel="stylesheet">
  <link href="index_files/nprogress.css" rel="stylesheet">
  <link href="index_files/front.css" rel="stylesheet">
  <link href="build/css/bootstrap.min.css" rel="styleshee1t">
  <link href="build/css/bootstrap-tour.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="http://web.big15.todocloud.com/build/vendor/html5shiv/html5shiv.min.js"></script>
        <script src="http://web.big15.todocloud.com/build/vendor/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="http://web.big15.todocloud.com/build/vendor/respond/respond.min.js"></script> -->

  <!-- Scripts -->
  <script src="index_files/jquery.js"></script>
  <script src="index_files/bootstrap.js"></script>
  <script src="index_files/nprogress.js"></script>
  <script src="index_files/front.js"></script>

  <style>
    .responsive-iframe {
      position: absolute;
      top: 150px;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      min-height: 114em;
      border: none;
      display: flex;
      height: 100%;
    }
  </style>

</head>


<body>
  <header class="header webp inicio">

    <div class="contenedor contenido-header">

      <div class="barra">
        <a href="#">

          <img src="build\img\metropolitan-touring-logo-menu.svg" alt="logo de metro" width="100" height="100">

        </a>
        <div class="mobile-menu">



        </div>
        <div class="derecha">
          <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="">
        </div>




      </div>
   <h1>Welcome to Galapagos Big15 Cheat Sheet, <?php echo $_SESSION["uname"]; ?> ! </h1>
    </div>

  </header>

  <body class="nav-md" onload=”closeMe();self.focus()”>
    <div class="body" style="margin: 2%">
      <!-- Main container -->

      <!--<a id="" class="tour-button" href="#">START TOUR</a>-->

      <div class="front_container" id="front_container">
        <div class="" role="main" id="front_content">
          
            <button class="btn btn-sm btn-primary tour-step1 tour-step18" id="initialize-tour"> Iniciar Tour </button>
          </p>
          <ul class="nav  nav-pills">
            <li><a href="big15.php">English 2022 / 2023</a></li>
           
          </ul>
          <div class="tab-content">
            <!-- TABS -->

            <div id="eng2021" class="tab-pane fade in active">



              <!-- TAB ENGLISH -->
              <br>
              <br>
              <table id="metro_big15" border="1">
                <!-- INGLES -->
                <thead>
                  <tr class="row_1">
                    <td colspan="2"><strong>GALAPAGOS</strong></td>
                    <td colspan="7"><strong>ACTIVIDADES</strong></td>
                    <td colspan="9"><strong>ITINERARIOS</strong></td>
                    <td colspan="15"><strong>BIG 15</strong></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr class="row_2">
                    <td class="do_not_touch"><b>Islas</b></td>
                    <td class="do_not_touch"><b>Sitios de visita</b></td>
                    <td class="activity activity_1" id="activity_1" style="cursor: pointer;"><img src="index_files/na.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Natación" width="25" height="25"></td>
                    <td class="activity activity_2" id="activity_2" style="cursor: pointer;"><img src="index_files/sn.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Buceo de superficie" width="25" height="25"></td>
                    <td class="activity activity_3" id="activity_3" style="cursor: pointer;"><img src="index_files/bv.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bote con fondo de vidrio" width="25" height="25"></td>
                    <td class="activity activity_4" id="activity_4" style="cursor: pointer;"><img src="index_files/pan.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Panga" width="25" height="25"></td>
                    <td class="activity activity_5 " id="activity_5" style="cursor: pointer;"><img src="index_files/ka.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Kayak" width="25" height="25"></td>
                    <td class="activity activity_6" id="activity_6" style="cursor: pointer;"><img src="index_files/pb.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Paddleboard" width="25" height="25"></td>
                    <td class="activity activity_7" id="activity_7" style="cursor: pointer;"><img src="index_files/pla.png" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Playa" width="25" height="25"></td>
                    <td class="ship ship_1 tour-step10" id="ship_1" colspan="3" style="cursor: pointer;"><b>Santa Cruz II</b></td>
                    <td class="ship ship_2" id="ship_2" colspan="3" style="cursor: pointer;"><b>La Pinta</b></td>
                    <td class="ship ship_3" id="ship_3" colspan="3" style="cursor: pointer;"><b>Isabela II</b></td>
                    <td class="specie specie_1" id="specie_1" style="cursor: pointer;"><img src="index_files/ga.png" alt="Halcón de Galápagos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Halcón de Galápagos" width="25" height="25"></td>
                    <td class="specie specie_2 tour-step15" id="specie_2" style="cursor: pointer;"><img src="index_files/lo.png" alt="Lobo marino de Galápagos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lobo marino de Galápagos" width="25" height="25"></td>
                    <td class="specie specie_3" id="specie_3" style="cursor: pointer;"><img src="index_files/pa.png" alt="Piquero de patas azules" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Piquero de patas azules" width="25" height="25"></td>
                    <td class="specie specie_4" id="specie_4" style="cursor: pointer;"><img src="index_files/fr.png" alt="Fragatas" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Frigatas" width="25" height="25"></td>
                    <td class="specie specie_5" id="specie_5" style="cursor: pointer;"><img src="index_files/to.png" alt="Tortuga gigante de Galápagos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tortuga gigante de Galápagos" width="25" height="25"></td>
                    <td class="specie specie_7" id="specie_7" style="cursor: pointer;"><img src="index_files/im.png" alt="Iguana marina" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Iguana marina" width="25" height="25"></td>
                    <td class="specie specie_8" id="specie_8" style="cursor: pointer;"><img src="index_files/pn.png" alt="Piquero de Nazca" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Piquero de Nazca" width="25" height="25"></td>
                    <td class="specie specie_6" id="specie_6" style="cursor: pointer;"><img src="index_files/fla.png" alt="Flamenco americano" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flamenco americano" width="25" height="25"></td>
                    <td class="specie specie_11" id="specie_11" style="cursor: pointer;"><img src="index_files/pe.png" alt="Lobo peletero" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lobo peletero" width="25" height="25"></td>
                    <td class="specie specie_9" id="specie_9" style="cursor: pointer;"><img src="index_files/u.png" alt="Pingüino de Galápagos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pingüino de Galápagos" width="25" height="25"></td>
                    <td class="specie specie_12" id="specie_12" style="cursor: pointer;"><img src="index_files/pr.png" alt="Piquero de patas rojas" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Piquero de patas rojas" width="25" height="25"></td>
                    <td class="specie specie_10" id="specie_10" style="cursor: pointer;"><img src="index_files/it.png" alt="Iguana terrestre" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Iguana terrestre" width="25" height="25"></td>
                    <td class="specie specie_13" id="specie_13" style="cursor: pointer;"><img src="index_files/alb.png" alt="Albatros de Galápagos" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Albatros de Galápagos" width="25" height="25"></td>
                    <td class="specie specie_14" id="specie_14" style="cursor: pointer;"><img src="index_files/co.png" alt="Cormorán" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cormorán" width="25" height="25"></td>
                    <td class="specie specie_15" id="specie_15" style="cursor: pointer;"><img src="index_files/is.png" alt="Iguana de Santa Fe" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Iguana de Santa Fe" width="25" height="25"></td>
                    <td>&nbsp;</td>
                    <!-- Placeholder for Count Visit Point Species -->
                  </tr>
                  <tr class="row_3">
                    <td class="do_not_touch">16</td>
                    <!-- Count Isles -->
                    <td class="do_not_touch">40</td>
                    <!-- Count Visit Points -->

                    <td class="do_not_touch"> 12 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 22 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 12 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 15 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 11 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Activities per Visit Point -->
                    <td class="do_not_touch"> 14 </td>
                    <!-- Count Activities per Visit Point -->

                    <td class="route route_1 ship_1" id="route_1" style="cursor: pointer;"><b>Norte 5D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-north"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="sc-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - NORTE</h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 12 Big15</p>
                              <img src="build/img/maps/Santa-Cruz-II-BIG15-Islas-del-Norte.svg" alt="santa-cruz-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_2 ship_1" id="route_2" style="cursor: pointer;"><b>Este<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>13</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-east"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="sc-east" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - Este </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 Días - 13 Big15</p>
                              <img src="build/img/maps/Santa-Cruz-II-BIG15-Islas-del-Este.svg" alt="santa-cruz-east">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_3 ship_1 tour-step11 tour-step12" id="route_3" style="cursor: pointer;"><b>Oeste<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sc-west"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="sc-west" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Santa Cruz II - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 12 Big15</p>
                              <img src="build/img/maps/Santa-Cruz-II-BIG15-Islas-del-Oeste.svg" alt="santa-cruz-west">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_4 ship_2" id="route_4" style="cursor: pointer;"><b>Norte<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>11</b> B15)</span></br>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-north"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="lp-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Norte </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 11 Big15</p>
                              <img src="build/img/maps/La-Pinta-BIG15-Islas-del-Norte.svg" alt="la-pinta-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_5 ship_2" id="route_5" style="cursor: pointer;"><b>Oeste<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-west"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="lp-west" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 Días - 12 Big15</p>
                              <img src="build/img/maps/La-Pinta-BIG15-Islas-del-Oeste.svg" alt="la-pinta-west">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_6 ship_2" id="route_6" style="cursor: pointer;"><b>Este<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>11</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lp-east"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="lp-east" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">La Pinta - Este </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 11 Big15</p>
                              <img src="build/img/maps/La-Pinta-BIG15-Islas-del-Este.svg" alt="la-pinta-east">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_7 ship_3" id="route_7" style="cursor: pointer;"><b>Oeste<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>12</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-center"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="isa-center" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Oeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 12 Big15</p>
                              <img src="build/img/maps/Oeste Isabela II Es.svg" alt="isabela-center">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_8 ship_3" id="route_8" style="cursor: pointer;"><b>Norte<br>
                        5D</b> <br>
                      <span class="count_b15_per_route">(<b>13</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-south"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="isa-south" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Norte </h4>
                            </div>
                            <div class="modal-body">
                              <p>5 Días - 13 Big15</p>
                              <img src="build/img/maps/Norte Isabela II Es.svg" alt="isabela-south">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="route route_9 ship_3" id="route_9" style="cursor: pointer;"><b>Sudeste<br>
                        7D</b> <br>
                      <span class="count_b15_per_route">(<b>14</b> B15)</span></BR>

                      <!-- START MODAL MAPS-->

                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#isa-north"> Mapa</button>

                      <!-- Modal -->

                      <div class="modal fade" id="isa-north" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Isabela II - Sudeste </h4>
                            </div>
                            <div class="modal-body">
                              <p>7 Días - 14 Big15</p>
                              <img src="build/img/maps/Southeasstern Isabella II.svg" alt="isabela-north">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END MODAL MAPS-->
                    </td>
                    <td class="do_not_touch tour-step16"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 9 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 8 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 7 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 6 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 6 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 5 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 3 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 3 </td>
                    <!-- Count Species per Visit Point -->
                    <td class="do_not_touch"> 3 </td>
                    <td class="do_not_touch" style="width: 20px;"><b>B15 Sitios de visita</b></td>
                    <!-- Count Species per Visit Point -->
                  </tr>
                  <tr class="row_4">
                    <td class="do_not_touch">&nbsp;</td>
                    <!-- Empty Space -->
                    <td class="do_not_touch">&nbsp;</td>
                    <td class="do_not_touch">NA</td>
                    <td class="do_not_touch">Sn</td>
                    <td class="do_not_touch">BV</td>
                    <td class="do_not_touch">Pan</td>
                    <td class="do_not_touch">Ka</td>
                    <td class="do_not_touch">PB</td>
                    <td class="do_not_touch">Ply</td>
                    <td class="do_not_touch">L1</td>
                    <td class="do_not_touch">V1</td>
                    <td class="do_not_touch">J2</td>
                    <td class="do_not_touch tour-step13">M1</td>
                    <td class="do_not_touch">V1</td>
                    <td class="do_not_touch">J2</td>
                    <td class="do_not_touch">J1</td>
                    <td class="do_not_touch">L2</td>
                    <td class="do_not_touch">V2</td>
                    <td class="do_not_touch">H</td>
                    <td class="do_not_touch">Lm</td>
                    <td class="do_not_touch">Pqa</td>
                    <td class="do_not_touch">Fr</td>
                    <td class="do_not_touch">To</td>
                    <td class="do_not_touch">Im</td>
                    <td class="do_not_touch">Pn</td>
                    <td class="do_not_touch">Fla</td>
                    <td class="do_not_touch">Lp</td>
                    <td class="do_not_touch">Ü</td>
                    <td class="do_not_touch">Pqr</td>
                    <td class="do_not_touch">It</td>
                    <td class="do_not_touch">Alb</td>
                    <td class="do_not_touch">Co</td>
                    <td class="do_not_touch">SI</td>
                    <td class="do_not_touch">&nbsp;</td>
                    <!-- Empty Space -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Activity Codes -->
                    <!-- Ac
										tivity Codes -->
                    <!-- Activity Codes -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Route Description -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                    <!-- Specie Codes -->
                  </tr>
                </thead>
                <tbody>
                  <!--
							IMPORTANT: BE CAREFUL WHEN CHANGING THE CLASSES: SPACES ARE IMPORTANT, THE ORDER OF THE CLASSES IS IMPORTANT.
							-->
                  <tr>
                    <td id="isle_1" class="isle isle_1" style="cursor: pointer;"> Baltra </td>
                    <td id="visit_point_1" class="isle_1 visit_point_1 visit_point" style="cursor: pointer;"> Aeropuerto </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_1"> 1Lu-10Vi </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_2"> 1Vi-13Ju </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_1 route_3"> 1Ju-9Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_4"> 1Lu-9Vi </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_5"> 1Vi-13Ju </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_2 route_6"> 1Ju-10Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_7"> 1Ju-9Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_8"> 1Lu-Vi9 </td>
                    <td style="font-size: 11px; text-align: center" class="isle_1 visit_point_1 ship_3 route_9"> 1Vi-13Ju </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"> 0 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_2" class="isle isle_2 " style="cursor: pointer;"> Bartolomé </td>
                    <td id="visit_point_2" class="isle_2 visit_point_2 visit_point" style="cursor: pointer;"> Bartolomé </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_2 visit_point_2 s_1 s_2 activity_1"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_3"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_2 visit_point_2 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_1 route_1"> 6-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_2 route_4"> 5-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_2 visit_point_2 ship_3 route_7"> 3-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_2 visit_point_2 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_2 visit_point_2 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_2 visit_point_2 specie_1 specie_2 specie_3 specie_4 specie_7 specie_9 activity_1 activity_2 activity_3 activity_4 activity_6 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="3" id="isle_3" class="isle isle_3" style="cursor: pointer;"> Española </td>
                    <td id="visit_point_3" class="isle_3 visit_point_3 visit_point" style="cursor: pointer;"> Bahía Gardner </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_3 visit_point_3 activity_1"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_3 activity_3"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 activity_5"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 s_2 s_3 activity_6"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_3 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_1 route_2"> 10-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_2 route_6"> 8-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_3 ship_3 route_9"> 5-D3Do </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_3 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 visit_point_3 specie_1 specie_2 specie_3 specie_4 specie_6 specie_7 specie_8 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_4" class="isle_3 visit_point_4 visit_point" style="cursor: pointer;"> Islote Osborn </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_3 visit_point_4 activity_1"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_4 activity_2"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_4 activity_5"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_4 activity_6"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_3 visit_point_4 activity_7"> S </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_4 ship_1 route_2"> 10-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center "> 0 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_5" class="isle_3 visit_point_5 visit_point" style="cursor: pointer;"> Punta Suárez </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_1 route_2"> 9-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_2 route_6"> 7-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_3 visit_point_5 ship_3 route_9"> 6-D3Do </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_3 visit_point_5 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_3 visit_point_5 isle_3 specie_13"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_3 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_13 visit_point_5"> 7 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="2" id="isle_4" class="isle isle_4" style="cursor: pointer;"> Fernandina </td>
                    <td id="visit_point_6" class="isle_4 visit_point_6 visit_point" style="cursor: pointer;"> Punta Espinoza </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_4 visit_point_6 s_1 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_6 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_1 route_3"> 4-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_2 route_5"> 4-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_6 ship_3 route_7"> 8-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_4 visit_point_6 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_6 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_4 visit_point_6 specie_1 specie_2 specie_3 specie_4 specie_7 specie_9 specie_14 activity_1 activity_2"> 7 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_38" class="isle_4 visit_point_38 visit_point" style="cursor: pointer;"> Punta Mangle </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_4 visit_point_38 s_1 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_4 visit_point_38 ship_3 route_9"> 10-D5Ma </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_4 visit_point_38 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_4 visit_point_38 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_4 visit_point_38 specie_1 specie_2 specie_3 specie_4 specie_5 specie_7 specie_8 specie_9 specie_14 activity_1 activity_2 activity_4"> 8 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <!-- Fin Fernandina -->

                  <tr>
                    <td rowspan="3" id="isle_5" class="isle isle_5" style="cursor: pointer;"> Floreana </td>
                    <td id="visit_point_7" class="isle_5 visit_point_7 visit_point" style="cursor: pointer;"> Mirador de la Baronesa </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_1"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_4"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_5"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_6"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_7 s_1 s_3 activity_7"> S I </td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_7 ship_1 route_3"> 7-D4Do </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_7 ship_1 route_9"> 8-D4Lu </td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_7 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_5 visit_point_7 specie_2 specie_3 specie_4 specie_7 specie_9 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_8" class="isle_5 visit_point_8 visit_point" style="cursor: pointer;"> Bahía del Correo </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_5 visit_point_8 activity_1"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 s_1 activity_3"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_5"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_6"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_8 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_1 route_3"> 7-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_2 route_5"> 11-D6Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_8 ship_3 route_9"> 8-D4Lu </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_8 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_5 visit_point_8 specie_2 specie_3 specie_4 specie_7 specie_8 specie_9 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_9" class="isle_5 visit_point_9 visit_point" style="cursor: pointer;"> Punta Cormorant/Islote Champion </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_5 visit_point_9 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 activity_2 tour-step9"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 activity_3"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 s_3 activity_4 tour-step7"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_5 visit_point_9 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_1 route_3"> 8-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_2 route_5"> 12-D6Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_5 visit_point_9 ship_3 route_9"> 7-D4Lu </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_5 visit_point_9 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_5 visit_point_9 specie_2 specie_3 specie_4 specie_7 specie_8 specie_6 activity_1 activity_2 activity_3 activity_4 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="2" id="isle_6" class="isle isle_6" style="cursor: pointer;"> Genovesa </td>
                    <td id="visit_point_10" class="isle_6 visit_point_10 visit_point" style="cursor: pointer;"> Bahía Darwin </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_6 visit_point_10 activity_1"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 s_1 activity_3"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 s_1 s_2 activity_5"> P S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 s_1 s_3 activity_6"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_10 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_1 route_1"> 8-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_2 route_4"> 7-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_10 ship_3 route_8"> 6-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_10 specie_12"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_6 visit_point_10 specie_12 specie_2 specie_4 specie_7 specie_8 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_11" class="isle_6 visit_point_11 visit_point" style="cursor: pointer;"> El Barranco </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_1 s_3 activity_5"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_6 visit_point_11 s_3 activity_6"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_1 route_1"> 7-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_2 route_4"> 8-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_6 visit_point_11 ship_3 route_8"> 5-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_11"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_6 visit_point_11 specie_12"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_6 visit_point_11 specie_12 specie_4 specie_7 specie_11 specie_2 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="4" id="isle_7" class="isle isle_7" style="cursor: pointer;"> Isabela </td>
                    <td id="visit_point_12" class="isle_7 visit_point_12 visit_point" style="cursor: pointer;"> Bahía Urbina </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_1"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_12 s_2 s_3 activity_7"> P </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_12 ship_2 route_5"> 5-D3Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_12 specie_1 "><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_5"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_10"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_12 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center " class="isle_7 visit_point_12 specie_1 specie_3 specie_4 specie_5 specie_7 specie_9 specie_10 specie_14 activity_1 activity_4 activity_7"> 8 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_13" class="isle_7 visit_point_13 visit_point" style="cursor: pointer;"> Caleta Tagus </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_2"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_4"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_5"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_13 s_2 s_3 activity_6"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_13 ship_2 route_5"> 6-D3Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_13 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_13 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_7 visit_point_13 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_9 specie_14 activity_2 activity_4 activity_5 activity_6"> 8 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_14" class="isle_7 visit_point_14 visit_point" style="cursor: pointer;"> Punta Vicente Roca </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_14 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_14 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_14 s_1 s_2 activity_4"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_1 route_3"> 3-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_2 route_5"> 3-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_14 ship_3 route_7"> 7-D4Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_14 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_11"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_14 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_7 visit_point_14 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_11 specie_9  specie_14 activity_2 activity_3 activity_4"> 9 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_41" class="isle_7 visit_point_41 visit_point" style="cursor: pointer;"> Punta Moreno </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_3"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_7 visit_point_41 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_7 visit_point_41 ship_3 route_9"> 9-D5Ma </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_7 visit_point_41 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_7 visit_point_41 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_7 visit_point_41 specie_14"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="activity_1 isle_7 visit_point_41 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_6 specie_9 specie_1 specie_14 activity_2 activity_3 activity_4"> 9 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_8" class="isle isle_8" style="cursor: pointer;"> Mosquera </td>
                    <td id="visit_point_15" class="isle_8 visit_point_15 visit_point" style="cursor: pointer;"> Islote Mosquera </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_8 visit_point_15 s_1 activity_7 tour-step8"> S </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_8 visit_point_15 ship_1 route_2"> 2-D1Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_8 visit_point_15 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center " class="isle_8 visit_point_15 specie_2 specie_3 specie_4 specie_7 specie_2 specie_8 activity_4 activity_7"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_9" class="isle isle_9" style="cursor: pointer;"> Plaza Sur </td>
                    <td id="visit_point_16" class="isle_9 visit_point_16 visit_point" style="cursor: pointer;"> Plaza Sur </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_9 visit_point_16 s_1 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_9 visit_point_16 s_1 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_9 visit_point_16 s_1 s_3 activity_3"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_9 visit_point_16 s_1 s_3 activity_4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_1 route_2"> 6-D3Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_2 route_6"> 2-D1Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_9 visit_point_16 ship_3 route_8"> 8-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>

                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_9 visit_point_16 specie_10"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_9 visit_point_16 specie_2 specie_3 specie_4 specie_7 specie_8 specie_10 activity_1 activity_2 activity_3 activity_4"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_10" class="isle isle_10" style="cursor: pointer;"> Rábida </td>
                    <td id="visit_point_17" class="isle_10 visit_point_17 visit_point" style="cursor: pointer;"> Playa Roja </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_1"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_2"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_3"> S P
                      </tSd>

                      <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_4"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_5"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_6"> S P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_10 visit_point_17 s_1 s_2 activity_7"> S P </td>
                    <td style="font-size: 11px; text-align: center" class="isle_10 visit_point_17 ship_1 route_1"> 5-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_10 visit_point_17 ship_2 route_5 tour-step14"> 7-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_10 visit_point_17 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_10 visit_point_17 specie_11"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center " class="isle_10 visit_point_17 specie_11 specie_1 specie_2 specie_3 specie_4 specie_7 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="4" id="isle_11" class="isle isle_11" style="cursor: pointer;"> San Cristóbal </td>
                    <td id="visit_point_18" class="isle_11 visit_point_18 visit_point" style="cursor: pointer;"> Aeropuerto </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"> 0 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_19" class="isle_11 visit_point_19 visit_point" style="cursor: pointer;"> Cerro Brujo </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_1"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_2"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_4"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_5"> P </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_19 s_2 s_3 activity_7"> P </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_19 ship_2 route_6"> 6-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_19 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_11 visit_point_19 specie_8 specie_2 specie_3 specie_4 specie_11 isle_11 specie_5 specie_7 activity_1 activity_2 activity_4 activity_5 activity_7" > 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_20" class="isle_11 visit_point_20 visit_point" style="cursor: pointer;"> Centro de crianza de tortugas - Cerro Colorado</td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_1 route_2"> 3-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_2 route_6"> 4-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_20 ship_3 route_9"> 4-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_20 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_20 specie_5"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_11 visit_point_20 specie_4 specie_5 activity_1 activity_2 activity_4 activity_5"> 2 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_21" class="isle_11 visit_point_21 visit_point" style="cursor: pointer;"> Punta Pitt </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_11 visit_point_21 activity_1"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 s_2 s_3 activity_5"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_11 visit_point_21 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_1 route_2"> 4-D2Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_2 route_6"> 5-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_11 visit_point_21 ship_3 route_9"> 3-D2Sa </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_11 visit_point_21 specie_12"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_11 visit_point_21 specie_2 specie_3 specie_4 specie_7 specie_8 specie_12 activity_1 activity_2 activity_4 activity_5 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="10" id="isle_12" class="isle isle_12 tour-step2" style="cursor: pointer;"> Santa Cruz </td>
                    <td id="visit_point_22" class="isle_12 visit_point_22 visit_point" style="cursor: pointer;"> Parte Alta / El Chato </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_22 ship_1 route_2"> 8-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_22 ship_1 route_3"> 6-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_22 ship_2 route_4"> 2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_22 ship_2 route_5"> 10-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_22 ship_1 route_8"> 2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_22 specie_5"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_22 specie_5"> 1 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_23" class="isle_12 visit_point_23 visit_point" style="cursor: pointer;"> Puerto Ayora </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_1 route_2"> 7-D4Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_1 route_3"> 5-D3Sa </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_2 route_5"> 9-D5Ma </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_23 ship_3 route_7"> 2-D1Ju </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_23 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_23 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_23 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_23 specie_2 specie_4 specie_7"> 3 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr class="d-none">
                    <td id="visit_point_24" class="isle_12 visit_point_24 visit_point" style="cursor: pointer;"> Garrapatero </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
                                    &lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->

                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_24 ship_1 route_2"> 7-D4Lu </td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_24 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_24 specie_6"> 4 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_25" class="isle_12 visit_point_25 visit_point" style="cursor: pointer;"> Tortuga Bay </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center"> 0 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_26" class="isle_12 visit_point_26 visit_point" style="cursor: pointer;"> ECHD </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_1 route_2"> 7-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_1 route_3"> 5-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_2 route_5"> 9-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_2 route_6"> 9-D5Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_26 ship_3 route_7"> 2-D1Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_26 specie_5"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_26 specie_5"> 1 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_27" class="isle_12 visit_point_27 visit_point tour-step3 " style="cursor: pointer;"> Islote Edén </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_12 visit_point_27 s_3 activity_2 tour-step4"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_27 activity_1"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->

                    <td style="text-align: center" class="isle_12 visit_point_27 activity_3"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_27 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_27 activity_5"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_27 activity_6"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_27 ship_1 route_2"> 11-D6Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_27 ship_2 route_4"> 3-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_27 ship_2 route_9"> 11-D6Mi </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_27 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_27 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_27 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_27 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_27 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_27 specie_2 specie_3 specie_4 specie_7 specie_8 activity_1 activity_3 activity_4 activity_5 activity_6"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_28" class="isle_12 visit_point_28 visit_point" style="cursor: pointer;"> Cerro Dragón </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_12 visit_point_28 s_1 activity_1"> S </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_28 s_3 activity_2"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_28 s_3 activity_3"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_28 activity_7"><span class="fa fa-check">&nbsp; </span></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_1 route_3"> 2-D1Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_2 route_5"> 8-D4Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_28 ship_3 route_7"> 5-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_28 specie_10"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_28 specie_2 specie_3 specie_4 specie_7 specie_6 specie_10 activity_1 activity_2 activity_3 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_29" class="isle_12 visit_point_29 visit_point" style="cursor: pointer;"> Las Bachas </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_1"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_12 visit_point_29 s_1 s_3 activity_7"> S I </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_29 ship_1 route_1"> 2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_29 ship_3 route_9"> 2-D1Vi </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_29 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_29 specie_2 specie_3 specie_4 specie_7 specie_6 activity_1 activity_2 activity_7"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_30" class="isle_12 visit_point_30 visit_point" style="cursor: pointer;"> Reserva de tortugas </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_1 route_1"> 9-D5Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_2 route_4"> 2-D1Lu </td>
                    <td style="font-size: 11px; text-align: center" class="isle_12 visit_point_30 ship_2 route_5"> 10-D5Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_30 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_30 specie_5"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_30 specie_4 specie_5"> 2 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_39" class="isle_12 visit_point_39 visit_point" style="cursor: pointer;"> Punta Carrión </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class=""></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""></td>
                    <!-- Activities -->
                    <td style="text-align: center" class=""></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_39 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_39 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_39 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_39 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_12 visit_point_39 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_12 visit_point_39 specie_2 specie_3 specie_4 specie_7 specie_8"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_13" class="isle isle_13" style="cursor: pointer;"> Santa Fe </td>
                    <td id="visit_point_31" class="isle_13 visit_point_31 visit_point" style="cursor: pointer;"> Santa Fe </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_13 visit_point_31 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_31 activity_2"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_31 activity_3"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_31 activity_4"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_31 activity_5"><span class="fa fa-check">&nbsp; </span></td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_13 visit_point_31 s_2 s_3 activity_6"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_31 ship_1 route_2"> 5-D3Do </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_31 ship_2 route_6"> 3-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_13 visit_point_31 ship_3 route_8"> 7-D4Ju </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_13 visit_point_31 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_13 visit_point_31 specie_15"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_13 visit_point_31 specie_1 specie_2 specie_3 specie_4 specie_7 specie_8 specie_15 activity_1 activity_2 activity_3 activity_4 activity_5 activity_6"> 7 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td rowspan="4" id="isle_14" class="isle isle_14" style="cursor: pointer;"> Santiago </td>
                    <td id="visit_point_32" class="isle_14 visit_point_32 visit_point" style="cursor: pointer;"> Bahía Sullivan </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_1"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_2"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_32 s_2 s_3 activity_7"> P I </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_32 ship_2 route_4"> 6-D3Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_32 ship_3 route_7"> 4-D2Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_32 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_32 specie_9"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_14 visit_point_32 specie_1 specie_2 specie_3 specie_4 specie_7 specie_9 activity_1 activity_2 activity_7"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_33" class="isle_14 visit_point_33 visit_point" style="cursor: pointer;"> Caleta Bucanero </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_33 s_1 s_3 activity_4"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_33 ship_1 route_1"> 3-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_33 ship_3 route_7"> 6-D3Sa </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_33 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_33 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_14 visit_point_33 specie_1 specie_2 specie_3  specie_4 specie_7 specie_8 activity_2 activity_3 activity_4"> 6 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_34" class="isle_14 visit_point_34 visit_point" style="cursor: pointer;"> Puerto Egas </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_1"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_14 visit_point_34 s_1 s_3 activity_7"> S I </td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_34 ship_1 route_1"> 4-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_14 visit_point_34 ship_3 route_8"> 3-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_34 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_11"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_34 specie_10"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_14 visit_point_34 specie_1 specie_2 specie_3 specie_4 specie_7 specie_11 specie_10 activity_1 activity_2 activity_7"> 7 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="visit_point_40" class="isle_14 visit_point_40 visit_point" style="cursor: pointer;"> Minas de Sal </td>
                    <!-- Visit Point -->

                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_14 visit_point_40 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_40 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_40 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_40 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_14 visit_point_40 specie_6"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_14 visit_point_40 specie_1 specie_2 specie_4 specie_6 specie_7"> 5 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_15" class="isle isle_15" style="cursor: pointer;"> Seymour Norte </td>
                    <td id="visit_point_35" class="isle_15 visit_point_35 visit_point" style="cursor: pointer;"> Seymour Norte </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_15 visit_point_35 s_3 s_3 activity_1"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_15 visit_point_35 s_1 s_3 activity_2"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_15 visit_point_35 s_1 s_3 activity_3"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_15 visit_point_35 s_1 s_3 activity_4"> S I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_1 route_2"> 12-D6Mi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_2 route_5"> 2-D1Vi </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_15 visit_point_35 ship_3 route_9"> 12-D6Mi </td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_8"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_11"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_15 visit_point_35 specie_10"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_15 visit_point_35 specie_2 specie_3 specie_4 specie_7 specie_8 specie_11 specie_10 activity_1 activity_2 activity_3 activity_4"> 7 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                  <tr>
                    <td id="isle_16" class="isle isle_16" style="cursor: pointer;"> Sombrero Chino </td>
                    <td id="visit_point_36" class="isle_16 visit_point_36 visit_point" style="cursor: pointer;"> Sombrero Chino </td>
                    <!-- Isle -->
                    <!-- Visit Point -->

                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_1 tour-step5"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_2"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_4"> P I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_3 activity_5"> I </td>
                    <!-- Activities -->
                    <td style="text-align: center" class="&gt;
																		&lt;span class=" fa="" fa-check"="">&nbsp;</td>
                    <!-- Activities -->
                    <td style="text-align: center" class="isle_16 visit_point_36 s_2 s_3 activity_7"> P I </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_16 visit_point_36 ship_2 route_4"> 4-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <td style="font-size: 11px; text-align: center" class="isle_16 visit_point_36 ship_3 route_8"> 4-D2Ma </td>
                    <td style="font-size: 11px; text-align: center" class=""></td>
                    <!-- Activities -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->
                    <!-- Routes -->

                    <td style="text-align: center" class="isle_16 visit_point_36 specie_1"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_2"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_3"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_4"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_7"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 ">
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_6 "><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_6"><span class="fa fa-check " data-toggle="tooltip" data-placement="bottom" data-original-title="Bainbridge">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class="isle_16 visit_point_36 specie_12"><span class="fa fa-check">&nbsp;</span></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->
                    <td style="text-align: center" class=""></td>
                    <!-- Species -->

                    <td style="text-align: center" class="isle_16 visit_point_36 specie_1 specie_2 specie_3 specie_7 specie_6 specie_12 specie_4 specie_12 activity_1 activity_2 activity_4 activity_5 activity_7"> 8 </td>
                    <!-- count Species per Visit Point-->

                  </tr>
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-12">
                  <div align="right">V3.0.2 16/SEP/2021</div>
                  <div align="center">
                    <center>

                      <!-- Direccion erronea-->
                      <a>
                        <!-- Creacion del boton-->
                        <img src="index_files/tabla-estaciones-updated.png" alt="estaciones" width="700px"> </br>
                        <a href="../../controller/cerrarSesion.php">
                          <button type="button" name="button">Log out</button>


                          <!--<button type="button" name="button">Log out</button>-->
                        </a>
                    </center>
                  </div>
                </div>
              </div>
              <!-- FIN INGLES -->

            </div>
            <!-- /TAB ENGLISH -->

            <div id="esp" class="tab-pane fade">
              <!-- TAB SPANISH -->

              <iframe class="responsive-iframe" src="index-es.php" width="auto" height="auto" style="border:none;"></iframe>
            </div>
            <!-- / TAB SPANISH -->

          </div>
          <!-- / TABS -->

        </div>
      </div>
      <script src="build/vendor/bootstrap.min.js"></script>
      <script src="build/js/bootstrap-tour.js"></script>
      <script src="build/js/tour.js"></script>
      <script type="application/javascript">
        /* On Ready */
        $(document).ready(function() {
          visit_point_id = '';
          $table_container = $('#metro_big15');
          element_focus = '';

          $('.isle, .visit_point, .activity, .route, .ship, .specie').css('cursor', 'pointer');

          _clickIsle();
          _clickVisitPoint();
          _clickActivity();
          _clickShip();

          _clickRoute();
          _clickSpecie();
        });

        function _clickIsle() {
          $('.isle').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              var isle_class = $(this).prop('class').split(' ')[1];
              element_focus = isle_class;

              _highlight($('.' + isle_class));

              var elements = $table_container.find('.' + isle_class);

              $.each(elements, function(s_index, s_element) {
                if (s_index > 0) {
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {
                    if (class_v.includes('visit_point_')) {
                      _highlight($('#' + class_v));
                      visit_point_id = class_v.replace('visit_point_', '');

                    } else if (class_v.includes('activity_') || class_v.includes('specie_') ||
                      class_v.includes('ship_') || class_v.includes('route_')) {

                      _highlight($('#' + class_v));
                      _highlight($('.visit_point_' + visit_point_id + '.' + class_v));

                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _clickVisitPoint() {
          $('.visit_point').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              visit_point_id = $(this).prop('id');
              var visit_point_class = $(this).prop('class').split(' ')[1];
              element_focus = visit_point_class;

              _highlight($('.' + visit_point_class));

              var elements = $table_container.find('.' + visit_point_class);

              $.each(elements, function(s_index, s_element) {
                if (s_index > 0) {
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {
                    if (class_v.includes('isle_') || class_v.includes('activity_') || class_v.includes('specie_') ||
                      class_v.includes('ship_') || class_v.includes('route_')) {

                      _highlight($('#' + class_v));
                      _highlight($('.visit_point_' + visit_point_id + '.' + class_v));
                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _clickActivity() {
          $('.activity').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              //get the activity class for the selected item. You can find it in the key = 1 of the array of classes
              var activity_class = $(this).prop('class').split(' ')[1];
              element_focus = activity_class;

              //highlight the cells with that activity class
              _highlight($('.' + activity_class));

              //find other elements with the same activity class
              var elements = $table_container.find('.' + activity_class);

              //loop elements with the same activity class
              $.each(elements, function(s_index, s_element) {

                if (s_index > 0) { //exclude the selected element b/c it was already highlighted

                  //find all the classes of the current cell
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {

                    if (class_v.includes('isle_')) { //highlight the isle

                      _highlight($('#' + class_v));
                    } else if (class_v.includes('visit_point_')) { //highlight the visit point but taking in account some restrictions

                      _highlight($('#' + class_v));

                      //get the ID of the visit point
                      visit_point_id = class_v.replace('visit_point_', '');

                      //find all the cells with the visit_point class
                      var vp_elements = $table_container.find('.' + class_v);
                      var exclusive_ships = [];

                      $.each(vp_elements, function(vp_i, vp_v) {

                        if (vp_i > 0) { // exclude current cell (already highlighted

                          //get all cell classes
                          var vp_classes = vp_v.className.split(' ');

                          $.each(vp_classes, function(vp_class_i, vp_class_v) {

                            //todo: make ships dynamic (ship_1, ship_2 ...)
                            //if the activity cell contains activity_class (i.e. activity_1) or any ship_ class then take care of highlighting other cells
                            if (vp_classes.includes(activity_class) || vp_classes.includes('ship_1') ||
                              vp_classes.includes('ship_2') || vp_classes.includes('ship_3')) {

                              $.each(vp_classes, function(vp_class_i, vp_class_v) {

                                //add to the exclusive_ships array the ship ID (s_1, s_2...) of the activity cell, if any.
                                if (vp_class_v.includes('s_')) {
                                  exclusive_ships.push(vp_class_v.replace('s_', ''));

                                } else if (vp_class_v.includes('ship_')) {
                                  //if this is a visit_point_route cell then make sure it is only highlighted if it belongs to some of the exclusive_ships
                                  if (exclusive_ships.length > 0) {
                                    var id = vp_class_v.replace('ship_', '');

                                    // .. otherwise do not highlight it
                                    if (!exclusive_ships.includes(id))
                                      return false;
                                  }

                                  _highlight($('#' + vp_class_v));
                                  _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                                } else if (vp_class_v.includes('route_')) {
                                  _highlight($('#' + vp_class_v));
                                  _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                                }
                              });
                            }
                          });
                        }
                      });
                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _clickShip() {
          $('.ship').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              var ship_class = $(this).prop('class').split(' ')[1];
              _highlight($('.' + ship_class));
              var ship_id = ship_class.replace('ship_', '');
              element_focus = ship_class;

              var elements = $table_container.find('.' + ship_class);

              $.each(elements, function(s_index, s_element) {
                if (s_index > 0) {
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {
                    if (class_v.includes('isle_')) {
                      _highlight($('#' + class_v));

                    } else if (class_v.includes('visit_point_')) {
                      visit_point_id = class_v.replace('visit_point_', '');
                      _highlight($('#' + class_v));

                      var vp_elements = $table_container.find('.' + class_v);

                      $.each(vp_elements, function(vp_i, vp_v) {
                        var vp_classes = vp_v.className.split(' ');
                        var exclusive_ships = [];

                        $.each(vp_classes, function(vp_class_i, vp_class_v) {
                          if (vp_class_v.includes('s_')) {
                            exclusive_ships.push(vp_class_v.replace('s_', ''));

                          } else if (vp_class_v.includes('activity_')) {
                            if (exclusive_ships.length > 0) {
                              if (!exclusive_ships.includes(ship_id))
                                return false;
                            }

                            _highlight($('#' + vp_class_v));
                            _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                          } else if (vp_class_v.includes('specie_')) {
                            _highlight($('#' + vp_class_v));
                            _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                          }
                        });
                      });
                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _clickRoute() {
          $('.route').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              var route_class = $(this).prop('class').split(' ')[1];
              _highlight($('.' + route_class));
              var ship_id = $(this).prop('class').split(' ')[2].replace('ship_', '');
              element_focus = route_class;

              var elements = $table_container.find('.' + route_class);

              $.each(elements, function(s_index, s_element) {
                if (s_index > 0) {
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {
                    if (class_v.includes('isle_') || class_v.includes('ship_')) {
                      _highlight($('#' + class_v));

                    } else if (class_v.includes('visit_point_')) {
                      visit_point_id = class_v.replace('visit_point_', '');
                      _highlight($('#' + class_v));

                      var vp_elements = $table_container.find('.' + class_v);

                      $.each(vp_elements, function(vp_i, vp_v) {
                        var vp_classes = vp_v.className.split(' ');
                        var exclusive_ships = [];


                        $.each(vp_classes, function(vp_class_i, vp_class_v) {
                          if (vp_class_v.includes('s_')) {
                            exclusive_ships.push(vp_class_v.replace('s_', ''));

                          } else if (vp_class_v.includes('activity_')) {
                            if (exclusive_ships.length > 0) {
                              if (!exclusive_ships.includes(ship_id))
                                return false;
                            }

                            _highlight($('#' + vp_class_v));
                            _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));

                          } else if (vp_class_v.includes('specie_')) {
                            _highlight($('#' + vp_class_v));
                            _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                          }
                        });
                      });
                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _clickSpecie() {
          $('.specie').on('click', function(e) {
            _clear();

            if ($(this).prop('id') !== element_focus) {
              var specie_class = $(this).prop('class').split(' ')[1];
              _highlight($('.' + specie_class));
              element_focus = specie_class;

              var elements = $table_container.find('.' + specie_class);

              $.each(elements, function(s_index, s_element) {
                if (s_index > 0) {
                  var classes = s_element.className.split(' ');

                  $.each(classes, function(class_i, class_v) {
                    if (class_v.includes('isle_')) {
                      _highlight($('#' + class_v));

                    } else if (class_v.includes('visit_point_')) {
                      visit_point_id = class_v.replace('visit_point_', '');
                      _highlight($('#' + class_v));

                      var vp_elements = $table_container.find('.' + class_v);

                      $.each(vp_elements, function(vp_i, vp_v) {
                        if (vp_i > 0) {
                          var vp_classes = vp_v.className.split(' ');

                          $.each(vp_classes, function(vp_class_i, vp_class_v) {

                            if (vp_class_v.includes('route_') || vp_class_v.includes('ship_')) {

                              _highlight($('#' + vp_class_v));
                              _highlight($('.visit_point_' + visit_point_id + '.' + vp_class_v));
                            }
                          });
                        }
                      });
                    }
                  });
                }
              });

              _highlight($(this), true);

            } else
              element_focus = '';
          });
        }

        function _highlight(element, current = false) {
          let this_color = '#FF6600';
          let related_color = '#02ad49';

          if (current === false)
            element.css("background-color", related_color);
          else
            element.css("background-color", this_color);
        }

        function _clear() {
          $('td:not(.do_not_touch)').css("background-color", '');
        }
      </script>



      <footer class="footer seccion">



        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
      </footer>

      <script src="build/js/bundle.min.js"></script>
  </body>

</html>