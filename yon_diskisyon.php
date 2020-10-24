<?php
 include("../dbKoneksyon.php");
if(empty($_SESSION['username']))
{
  header("Location: konekte.php?Ou%dwe%konkte%avan");
  exit();
}
if($_SESSION['username'] == null)
{
  header("Location: konekte.php?Ou%dwe%konekte%avan");
  exit();
}
$dskID = $_SESSION['diskisyonID'];

if(isset($_POST['view'])){
  $dskID = $_POST['gade'];
}

$SQL="SELECT itilizate.jwetNon, repons.diskisyon, repons.reponsID, repons.met, repons.kontni, repons.dat, repons.likes, repons.dislike
FROM repons INNER JOIN itilizate
ON repons.met=itilizate.userID
WHERE repons.diskisyon = '$dskID'
ORDER BY repons.dat;
";
//$SQL = "SELECT tit, kontni, dat, met, repons, likes, dislike, vues from diskisyon ";

$topik= "SELECT itilizate.jwetNon, diskisyon.diskisyonID, diskisyon.tit, diskisyon.kontni, diskisyon.dat, diskisyon.met,
diskisyon.repons, diskisyon.likes, diskisyon.dislike, diskisyon.vues
FROM diskisyon
INNER JOIN itilizate
ON diskisyon.met=itilizate.userID
WHERE diskisyon.diskisyonID = '$dskID';";

$komante = mysqli_query($conn, $SQL);
$repons = mysqli_fetch_all($komante, MYSQLI_ASSOC);
$result = mysqli_query($conn, $topik);
$dsksyn= mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fowòm: Diskisyon</title>
        <link rel="shortcut icon" href="images/GolAyiti-logo.jpg" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

        <!-- GolAyiti Stylesheets -->
        <link href="kjplugin-frameworks/bootstrap.css" rel="stylesheet">

      	<link href="fonts/ionicons.css" rel="stylesheet">


      	<link href="common/styles.css" rel="stylesheet">

        <style media="screen">
        .dropbtn {
        background-color: #cc0000;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
        background-color: #cc0000;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
        </style>

    </head>
    <body>
      <header>
    		<div class="top-header">
    			<div class="container">
    				<div class="oflow-hidden font-9 text-sm-center ptb-sm-5">

    					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
    						<li><a class="pl-0 pl-sm-10" href="#">Potoprens, Ayiti
    							<i class="ion-android-cloud-outline"></i> 27 &#8451;</a></li>
    						<li><?php date_default_timezone_set('America/New_York');
    						$currentDate =date('D M j G:i Y', time());
    						echo $currentDate; ?></li>
    					</ul>
              <ul class="float-right float-sm-none font-13 list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5 color-ash">
                <li><a class="pl-0 pl-sm-10" href="https://www.facebook.com/GolAyiti-108762900894576/"><i class="ion-social-facebook"></i></a></li>
                <li><a href="https://twitter.com/GolAyiti"><i class="ion-social-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/GolAyiti"><i class="ion-social-instagram"></i></a></li>
              </ul>

    				</div><!-- top-menu -->
    			</div><!-- container -->
    		</div><!-- top-header -->

    		<div class="middle-header mtb-20 mt-xs-0">
    			<div class="container">
    				<div class="row">

    					<div class="col-sm-4">
    					<a href="../index.php"><img src="images/GolAyiti-logo.jpg" width="20" height="80"></a>
    					</div><!-- col-sm-4 -->

    					<div class="col-sm-8">
    						<!-- Bannner bg -->
    						<div class="banner-area dplay-tbl plr-30 plr-md-10 color-white">
    							<div class="ptb-sm-15 dplay-tbl-cell">
    								<h5>www.yonlotayiti.com</h5>
    								<h6>Dekouvri yon Lòt Ayiti</h6>
    							</div><!-- left-area -->

    							<div class="dplay-tbl-cell text-right min-w-100x">
    								<a class="btn-fill-white btn-b-sm plr-10" href="#">Plis Detay</a>

    							</div><!-- right-area -->

    						</div><!-- banner-area -->

    					</div><!-- col-sm-4 -->

    				</div><!-- row -->
    			</div><!-- container -->
    		</div><!-- top-header -->
    		<div class="bottom-menu">
    			<div class="container">

    				<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

            <ul class="main-menu" id="main-menu">

              <li class=""><a href="../ALMAY/Akey.php">ALMAY</a>

              </li>
              <li class="" ><a href="../ANGLETÈ/Akey.php">ANGLETÈ</a>

              </li>
              <li class=""><a href="../AYITI/Akey.php">AYITI</a>

              </li>
              <li class=""><a href="../BREZIL/Akey.php">BREZIL</a>

              </li>
              <li class=""><a href="../ESPAY/Akey.php">ESPAY</a>

              </li>

              <li class=""><a href="../ETAZINI/Akey.php">ETAZINI</a>

              </li>
              <li class=""><a href="../FRANS/Akey.php">FRANS</a>

              </li>
              <li class=""><a href="../ITALI/Akey.php">ITALI</a>

              </li>

              <li class=""><a href="../PEYIBA/Akey.php">PEYIBA</a>

              </li>

              <li class=""><a href="../PÒTIGAL/Akey.php">PÒTIGAL</a>

              </li>

              <li class=""><a href="../FIFA/Akey.php">FIFA</a>

              </li>
              <li class=""><a href="../UEFA/Akey.php">UEFA</a>

              </li>
              <li class=""><a href="../CONCACAF/Akey.php">CONCACAF</a>

              </li>
              <li class=""><a href="../CONMEBOL/Akey.php">CONMEBOL</a>

              </li>
              <li class=""><a href="../TRANSFÈ/index.php" style="color: red">TRANSFÈ</a>

              </li>

            </ul>
    				<div class="clearfix"></div>
    			</div><!-- container -->
    		</div><!-- bottom-menu -->
    	</header>
        <div class="container-fluid">


            <div class="headernav" style="background-color: navy">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 search hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="rezilta-rechech-diskisyon.php" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" name="moKle" class="form-control" placeholder="Chache Sijè" required></div>
                                    <div class="pull-right"><button class="btn btn-default" type="submit" name="chache"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">
                                <form action="nouvoDiskisyon.php" method="post" class="form">
                                    <button class="btn btn-primary">Kòmanse yon diskisyon</button>

                                </form>
                            </div>

                          </div>
                          <div class="stnt pull-right" style="">

                              <div class="dropdown">
                              <button onclick="myFunction()" class="dropbtn">  <i class="fa fa-user-circle-o" style="color:white">
                                 <?php echo $_SESSION['username']; ?></i><i class="fa fa-navicon" style="color:white"></i>
                              </button>
                              <div id="myDropdown" class="dropdown-content">
                                <a href="#home">Klasman</a>
                                  <a href="diskisyon.php">Diskisyon yo</a>
                                <a href="resetPassword.php">Chanje modpas</a>
                                <a href="dekonekte.php">Dekonekte</a>
                                <a href="#">Fè plis pwen</a>
                              </div>
                            </div>

                            <script>
                          /* When the user clicks on the button,
                          toggle between hiding and showing the dropdown content */
                          function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                          }

                          // Close the dropdown if the user clicks outside of it
                          window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {
                              var dropdowns = document.getElementsByClassName("dropdown-content");
                              var i;
                              for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                  openDropdown.classList.remove('show');
                                }
                              }
                            }
                          }
                          </script>


                          </div>


                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">


                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->
                            <?php  foreach ($dsksyn as $dsk) {?>
                            <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/uservatar.png" alt="" />
                                            <div class="">&nbsp;</div>
                                        </div>

                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><?php echo "".$dsk['tit']; ?></h2>
                                        <?php echo "".$dsk['kontni']; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                          <a href="">  <?php echo "".$dsk['repons'];  ?></a>
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="fa fa-user-circle-o"></i> <?php echo "".$dsk['jwetNon']; ?></div>
                                    <div class="views"><i class="fa fa-eye"></i><?php echo "".$dsk['vues']; ?></div>
                                    <div class="time"><i class="fa fa-clock-o"></i> <?php echo "".$dsk['dat']; ?></div>

                                </div>


                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                      <form class="" action="ajoute-likes.php" method="POST">
                                        <input type="text" name="id" value="<?php echo $dsk['diskisyonID'] ?>" style="display:none">
                                        <button type="submit" name= "like" ><a href="" class="up"><i class="fa fa-thumbs-o-up"></i><?php echo "".$dsk['likes']; ?></a></button>
                                          </form>
                                          <form class="" action="ajoute-dislikes.php" method="POST">
                                            <input type="text" name="id" value="<?php echo $dsk['diskisyonID'] ?>" style="display:none">
                                            <button type="submit" name= "dislike" ><a href="" class="down"><i class="fa fa-thumbs-o-down"></i><?php echo "".$dsk['dislike']; ?></a></button>
                                              </form>
                                    </div>
                                  </div>
                                <div class="clearfix"></div>
                            </div><?php } ?>

                            <?php // sa se kòmantè yo ?>
                            <?php  foreach ($repons as $dsk) {?>

                              <div class="post">
                                <div class="col-lg-8 col-xs-12 col-md-8">
                                    <div class="pull-left"><i class="fa fa-comments-o"></i></a></div>
                                    <div class="pull-left">


                                    </div>

                                </div>

                                <div class="wrap-ut pull-left">
                                  <div class="userinfo pull-left">
                                      <div class="avatar">
                                          <img src="images/uservatar.png" alt="" />
                                          <div class="">&nbsp;</div>
                                      </div>

                                  </div>
                                    <div class="posttext pull-left">
                                      <h2> <strong style="color: #3999ff"> <?php echo "".$dsk['jwetNon']." "; ?></strong> te reponn </h2>
                                        <?php echo "".$dsk['kontni']; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">

                                    <div class="views"><i class="fa fa-user-circle-o"></i> <?php echo "".$dsk['jwetNon']; ?></div>
                                    <div class="time"><i class="fa fa-clock-o"></i> <?php echo "".$dsk['dat']; ?></div>

                                </div>


                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                      <form class="" action="ajoute-likes.php" method="POST">
                                        <input type="text" name="id" value="<?php echo $dsk['reponsID'] ?>" style="display:none">
                                        <button type="submit" name= "repons-like" ><a href="" class="up"><i class="fa fa-thumbs-o-up"></i><?php echo "".$dsk['likes']; ?></a></button>
                                          </form>
                                          <form class="" action="ajoute-dislikes.php" method="POST">
                                            <input type="text" name="id" value="<?php echo $dsk['reponsID'] ?>" style="display:none">
                                            <button type="submit" name= "repons-dislike" ><a href="" class="down"><i class="fa fa-thumbs-o-down"></i><?php echo "".$dsk['dislike']; ?></a></button>
                                              </form>
                                    </div>
                                  </div>
                                <div class="clearfix"></div>
                                </div>
                            <?php } ?>



                            <script type="text/javascript">
                              textarea = document.querySelector("#autoresizing");
                              textarea.addEventListener('input', autoResize, false);

                              function autoResize() {
                                  this.style.height = 'auto';
                                  this.style.height = this.scrollHeight + 'px';
                              }
                          </script>

                          <form class="" action="anrejistre-repons.php" method="POST">
                      <textarea id="autoresizing" placeholder="ekri repons ou a" name="komante" required></textarea>
                      <input type="text" name="diskisyon" style="display:none" value="<?php echo $dsk['diskisyon']; ?>">
                      <button class="btn btn-primary" type="submit" name="repons">Reponn</button>
                        </form>

                        </div>
                        <div class="col-lg-4 col-md-4">


                        <div class="sidebarblock">
                                <h3>Kiyès ki Meyè jwe mwa Jen an?</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">

                                    <form action="#" method="post" class="form">
                                        <table class="poll">
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            Robert Lewandowski
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt1" type="radio" name="opt" value="1">
                                                    <label for="opt1"></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                            Karim Benzema
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt2" type="radio" name="opt" value="2" checked>
                                                    <label for="opt2"></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                            Lionel Messi
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt3" type="radio" name="opt" value="3">
                                                    <label for="opt3"></label>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <p class="small">Vòt la ap fini 5 Jiye</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                              <?php
                              $sql ="SELECT* from atik ORDER BY lekti DESC LIMIT 10;";
                              $result = mysqli_query($conn, $sql);
                              $atik = mysqli_fetch_all($result, MYSQLI_ASSOC);
                               ?>
                                          <div class="mb-30 p-30 card-view">
                                            <h4 class="p-title"><b>Atik Popilè</b></h4>
                                            <?php foreach($atik as $atk){ ?>
                                            <div class="sided-80x mb-20">
                                              <div class="s-left">
                                                <img src="images/GolAyiti-logo.jpg" alt="">
                                              </div><!-- s-left -->

                                              <div class="s-right">
                                                <h5><a href="../../<?php echo $atk['lyen'] ?>">
                                                  <b><?php echo $atk['tit'] ?></b></a></h5>
                                                <ul class="mtb-5 list-li-mr-20 color-lite-black">
                                                  <li><i class="mr-5 font-12 ion-clock"></i><?php echo $atk['dat'] ?></li>
                                                  <li><i class="mr-5 font-12 ion-eye"></i><?php echo $atk['lekti'] ?></li>
                                                </ul>
                                              </div><!-- s-left -->
                                            </div><!-- sided-80x -->
                                          <?php } ?>

                                          </div><!-- card-view -->
                    					<!-- END OF SIDEBAR MOST READ -->


                    					<!-- START OF SIDEBAR BANNER-->
                    					<div class="plr-30 ptb-50 color-white pos-relative text-center bg-7">
                    						<div class="bg-layer-8">
                    							<h3><b>Mansyon</b></h3>
                    							<p class="mb-15 mt-5 color-white">Yon paradi pou w al viv oswa pase vakans ak fanmiw Ayiti</p>
                    							<h6><a class="btn-fill-white btn-b-sm plr-10" href="#"><b>Plis detay</b></a></h6>
                    						</div><!-- banner-area -->
                    					</div><!-- banner-area -->
                    					<!-- END OF SIDEBAR BANNER-->


                            </div>


                        </div>
                    </div>
                </div>

            </section>

            <footer style="background-color: navy">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="../images/GolAyiti-logo.jpg" alt=""  /></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 "style="color: white" >Copyrights 2020, GolAyiti.com
                          <a href="../index.php">| Akey </a> |
                          <a href="#"> Reklam </a> |
                          <a href="../misyon-nou.php"> GolAyiti </a> |
                          <a href="#"> Biznis </a> |
                          <a href="#"> Kontak </a> |
                          <a href="#"> Travay </a> |
                          <a href="#"> Aktivite </a> |
                          <a href="#"> Teknoloji </a> |
                          <a href="#"> Sipote nou </a></div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent"style="background-color: navy">
                            <ul class="socialicons"style="background-color: navy" >
                              <li><a class="pl-0 pl-sm-10" href="https://www.facebook.com/GolAyiti-108762900894576/"><i class="ion-social-facebook"></i></a></li>
                              <li><a href="https://twitter.com/GolAyiti"><i class="ion-social-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/GolAyiti"><i class="ion-social-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </footer>
</div>






        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>


        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/bootstrap.min.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    </body>

</html>
