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
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Tit sijè a</title>
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
                      
                       <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                           <div class="wrap">
                               <form action="#" method="post" class="form">
                                   <div class="pull-left txt"><input type="text" class="form-control" placeholder="Chache Sijè"></div>
                                   <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
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
                           <div class="stnt pull-right" style="color: red">
                             <a href="dekonekte.php"><button type="button" class="btn-primary"> <i class="fa fa-sign-out">Dekonekte</i> </button></a>

                           </div>
                         </div>
                           <div class="stnt pull-right" style="color: red">
                             <a  class="btn-fill-red plr-10 mtb-10 btn-b-md"> <i class="fa fa-user-circle-o"><?php echo $_SESSION['username']; ?></i> </button></a>

                           </div>



                           <div class="clearfix"></div>
                       </div>
                   </div>
               </div>
           </div>


<section>

  <div class="container">
      <div class="row">
          <div class="col-lg-8 breadcrumbf">
              <a href="../index.php"></a>GolAyiti.com<span class="diviver">&gt;</span> <a href="diskisyon.php">Diskisyon</a> <span class="diviver">&gt;</span><?php echo"Tit diskisyon an"; ?>
          </div>
      </div>
  </div>


  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8">

              <!-- POST -->
              <div class="post beforepagination">
                  <div class="topwrap">
                      <div class="userinfo pull-left">
                          <div class="avatar">
                              <img src="images/uservatar.png" alt="" />
                              <div class="status red">&nbsp;</div>
                          </div>

                          <div class="icons">
                              <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                          </div>
                      </div>
                      <div class="posttext pull-left">
                          <h2><strong>Hello this is the title</strong></h2>
                          <p>Today, we're looking at three particularly interesting stories. Pinterest added a new location-based feature on Wednesday that uses Place Pins as a way to map out vacations and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for $8 per day through an onboard hotspot. And in an effort to ramp up its user base, Google Wallet is offering a debit card that can take out cash from.</p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  <div class="postinfobot">

                      <div class="likeblock pull-left">
                          <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                          <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
                      </div>
                      <div class="posted pull-left"><i class="fa fa-clock-o"></i></div>
                      <div class="clearfix"></div>
                  </div>
              </div><!-- POST -->
<!-- Kòmantè -->

<div class="post">
    <div class="topwrap">
        <div class="userinfo pull-left">
            <div class="avatar">
                <img src="images/uservatar.png" alt="" />
                <div class="status red">&nbsp;</div>
            </div>

            <div class="icons">
                <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
            </div>
        </div>
        <div class="posttext pull-left">
            <p>Typography helps you engage your audience and establish a distinct, unique personality on your website. Knowing how to use fonts to build character in your design is a powerful skill, and exploring the history and use of typefaces, as well as typogra...</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="postinfobot">

        <div class="likeblock pull-left">
            <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
            <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>1</a>
        </div>
        <div class="posted pull-left"><i class="fa fa-clock-o"></i></div>
        <div class="clearfix"></div>
    </div>
</div><!-- Kòmantè -->

<!-- POST -->
<div class="post">
    <form action="#" class="form" method="post">
        <div class="topwrap">
            <div class="userinfo pull-left">
                <div class="avatar">
                    <img src="images/uservatar.png" alt="" />
                    <div class="status green">&nbsp;</div>
                </div>

                <div class="icons">
                    <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                </div>
            </div>
            <div class="posttext pull-left">
                <div class="textwraper">
                    <div class="postreply">Poste yon repons</div>
                    <textarea name="reply" id="reply" placeholder="ekri repons lan la"></textarea>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="postinfobot">
            <div class="pull-right postreply">
                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                <div class="pull-left"><button type="submit" class="btn btn-primary">Reponn</button></div>
                <div class="clearfix"></div>
            </div>


            <div class="clearfix"></div>
        </div>
    </form>
</div><!-- POST -->


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
                                  <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
                                  <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
                                  <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
              <p class="smal">Vòt la ap fini 5 Jiyè</p>
          </div>
      </div>

      <!-- -->
      <div class="sidebarblock">
        <div class="mb-30 p-30 card-view">
          <h4 class="p-title"><b>Atik Popilè</b></h4>

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>Pwoblem lajan, Liverpool paka achte Timo Werner</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>FIFA radye "Dadou" Jean-Bart pou twa mwa</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>RFI an Frans 24 pibliye non 11 finalis pri Marc-Vivien Foé 2020</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>Match La Liga yo ap difere ak bri fanatik nan stad yo</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>OFISYEL: Serie A a ap rekomanse 21 Jen 2020</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->

          <div class="sided-80x mb-20">
            <div class="s-left">
              <img src="images/GolAyiti-logo.jpg" alt="">
            </div><!-- s-left -->

            <div class="s-right">
              <h5><a href="#">
                <b>4 lot moun teste pozitif pou Coronavirus lan pami ekip Premier League yo</b></a></h5>
              <ul class="mtb-5 list-li-mr-20 color-lite-black">
                <li><i class="fa fa-clock-o"></i>29 Me 2020</li>
                <li><i class="fa fa-eye"></i>105</li>
              </ul>
            </div><!-- s-left -->
          </div><!-- sided-80x -->
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
