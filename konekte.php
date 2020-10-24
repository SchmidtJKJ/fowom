
<?php
if( $_SESSION['username']!=null)
{
  header("Location: diskisyon.php");
  exit();
}
$error['imel'] ="";
 $error['user']= "";
 // code for logging in
 if( !empty($_GET['imel'])){
 $error['imel'] = $_GET['imel'];
}
if( !empty($_GET['user'])){
  $error['user']= $_GET['user'];
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Konekte</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

<link rel="shortcut icon" href="images/GolAyiti-logo.jpg" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">

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
            <!--<ul class="drop-down-menu drop-down-inner" style="color: red" >
              <li><a href="ALMAY/Bundesliga/Akey.php">Bundesliga</a></li>
              <li><a href="ALMAY/Bundesliga2/Akey.php">Bundesliga 2</a></li>
              <li><a href="ALMAY/DFB-Pokal/Akey.php">DFB-Pokal</a></li>
              <li><a href="ALMAY/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class="" ><a href="../ANGLETÈ/Akey.php">ANGLETÈ</a>
              <!--<ul class="drop-down-menu drop-down-inner">
              <li><a href="ANGLETÈ/PremierLeague/Akey.php">Premier League</a></li>
              <li><a href="ANGLETÈ/Championship/Akey.php">Championship</a></li>
              <li><a href="ANGLETÈ/FACup/Akey.php">FA Cup</a></li>
              <li><a href="ANGLETÈ/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../AYITI/Akey.php">AYITI</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="AYITI/PremyeDivizyon/Akey.php">Premye Divizyon</a></li>
              <li><a href="AYITI/DezyemDivizyon/Akey.php">Dezyem Divizyon</a></li>
              <li><a href="AYITI/SeleksyonNasyonal/Akey.php">Seleksyon</a></li>
              <li><a href="AYITI/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../BREZIL/Akey.php">BREZIL</a>
            <!--<ul class="drop-down-menu drop-down-inner">
              <li><a href="BREZIL/SerieA/Akey.php">Serie A</a></li>
              <li><a href="BREZIL/SerieB/Akey.php">Serie B</a></li>
              <li><a href="BREZIL/BrazilCup/Akey.php">Brazil Cup</a></li>
              <li><a href="BREZIL/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../ESPAY/Akey.php">ESPAY</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red" >
              <li><a href="ESPAY/LaLiga/Akey.php">La Liga</a></li>
              <li><a href="ESPAY/Secunda/Akey.php">Secunda</a></li>
              <li><a href="ESPAY/CopaDelRey/Akey.php">Copa de Rey</a></li>
              <li><a href="ESPAY/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>

          <li class=""><a href="../ETAZINI/Akey.php">ETAZINI</a>
          <!--	<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="ETAZINI/MLS/Akey.php">MLS</a></li>
              <li><a href="ETAZINI/USL/Akey.php">USL</a></li>
              <li><a href="ETAZINI/OpenCup/Akey.php">Open Cup</a></li>
              <li><a href="ETAZINI/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../FRANS/Akey.php">FRANS</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="FRANS/Ligue1/Akey.php">Ligue 1</a></li>
              <li><a href="FRANS/Ligue2/Akey.php">Ligue 2</a></li>
              <li><a href="FRANS/CoupeDeFrance/Akey.php">Coupe de France</a></li>
              <li><a href="FRANS/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../ITALI/Akey.php">ITALI</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="ITALI/SerieA/Akey.php">Serie A</a></li>
              <li><a href="ITALI/SerieB/Akey.php">Serie B</a></li>
              <li><a href="ITALI/CoppaItalia/Akey.php">Coppa Italia</a></li>
              <li><a href="ITALI/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>

          <li class=""><a href="../PEYIBA/Akey.php">PEYIBA</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="ITALI/SerieA/Akey.php">Serie A</a></li>
              <li><a href="ITALI/SerieB/Akey.php">Serie B</a></li>
              <li><a href="ITALI/CoppaItalia/Akey.php">Coppa Italia</a></li>
              <li><a href="ITALI/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>

          <li class=""><a href="../PÒTIGAL/Akey.php">PÒTIGAL</a>
            <!--<ul class="drop-down-menu drop-down-inner"style="color: red">
              <li><a href="ITALI/SerieA/Akey.php">Serie A</a></li>
              <li><a href="ITALI/SerieB/Akey.php">Serie B</a></li>
              <li><a href="ITALI/CoppaItalia/Akey.php">Coppa Italia</a></li>
              <li><a href="ITALI/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>

          <li class=""><a href="../FIFA/Akey.php">FIFA</a>
          <!--	<ul class="drop-down-menu drop-down-inner">
              <li><a href="FIFA/Mondyal/Akey.php">Mondyal</a></li>
              <li><a href="FIFA/KoupKonfederasyon/Akey.php">Koup Konfederasyon</a></li>
              <li><a href="FIFA/MondyalClub/Akey.php">Mondyal Club</a></li>
              <li><a href="FIFA/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../UEFA/Akey.php">UEFA</a>
            <!--<ul class="drop-down-menu drop-down-inner">
              <li><a href="UEFA/ChampionsLeague/Akey.php">Champions League</a></li>
              <li><a href="UEFA/EuropaLeague/Akey.php">Europa League</a></li>
              <li><a href="UEFA/Euro/Akey.php">Euro</a></li>
              <li><a href="UEFA/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../CONCACAF/Akey.php">CONCACAF</a>
            <!--<ul class="drop-down-menu drop-down-inner">
              <li><a href="CONCACAF/GoldCup/Akey.php">Gold Cup</a></li>
              <li><a href="CONCACAF/CaribbeanCup/Akey.php">Caribbean Cup</a></li>
              <li><a href="CONCACAF/ChampionsLeague/Akey.php">Champions League</a></li>
              <li><a href="CONCACAF/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>
          <li class=""><a href="../CONMEBOL/Akey.php">CONMEBOL</a>
            <!--<ul class="drop-down-menu drop-down-inner">
              <li><a href="CONMEBOL/CopaLibertadores/Akey.php">Copa Libertadores</a></li>
              <li><a href="CONMEBOL/CopaSudamericana/Akey.php">Copa Sudamericana</a></li>
              <li><a href="CONMEBOL/CopaAmerica/Akey.php">Copa America</a></li>
              <li><a href="CONMEBOL/Lòt/Akey.php">Lòt Koze</a></li>
            </ul>-->
          </li>

        </ul>
				<div class="clearfix"></div>
			</div><!-- container -->
		</div><!-- bottom-menu -->
	</header>
  <section class="pt-0 bg-primary">
		<div class="container ptb-10">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="nouvo_kont.php"><b>Kreye yon kont</b></a>
					<a class="dplay-inl-block color-grey mtb-10 ml-15 ml-md-0 hover-grey" href="nouvo_kont.php">Al kreye l kont si w poko gen youn</a>
				</div><!-- col-md-8 -->
      </div>
      </div>
    </section>


	<section class="pt-30 pb-0">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-12">

					<div class="ptb-0">
						<a class="mt-10" href="../index.php"><i class="mr-5 ion-ios-home"></i><b>AKÈY</b></a>
						<a class="mt-10"><i class="mlr-10 ion-chevron-right"></i><b>KONEKTE</b></a>

					</div>

				</div><!-- col-sm-12 -->

			</div><!-- row -->
		</div><!-- container -->
	</section>


	<section class="pt-0 pb-20">

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
          <form action="login-code.php" method="POST">
					<div class="p-30 mb-30 card-view">

						<h4 class="p-title"><b>KONEKTE</b></h4>
						<form>
							<div class="row">
								<div class="col-sm-6">
                  <label for="">adrès imèl ou</label>
									<input class="mb-30" type="text" value="<?php echo($error['user']); ?>" name="uname" required>
									<div class="red-text">

									</div>
								</div><!-- col-sm-6 -->
                <br> &nbsp;
								<div class="col-sm-6">
									<input class="mb-30" type="password" placeholder="modpas ou" name="pass" required>
									<div class="red-text" style="text: red">
										<h4 style="color: red"><?php echo "".$error['imel'] ;?></h4>
										<br>
									</div>
								</div><!-- col-sm-6 -->
                <br>


							</div><!-- row -->
							<button class="btn-fill-primary plr-20" type="submit" name="login">Konekte</button>


					</div><!-- card-view -->
          <div class="pull-right"style= > <a href="resetPassword.php"> <u style="color: navy"> Ou bliye modpas ou? </u> </a> </div>

          </form>
				</div><!-- col-sm-12 -->
				<div class="col-md-12 col-lg-4">

					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>Egzanp Diskisyon</b></h4>
						<ul class="list-contact list-li-mb-20">
            <li>  <div class="blocktxt">
                  <a href="#">Ronaldo ta dwe Ballon d'Or ane sa</a>
              </div></li>

              <li> <div class="blocktxt">
                  <a href="#">Milan AC sanble ap retounen pou pi bon</a>
              </div></li>
              <li>
              <div class="blocktxt">
                  <a href="#">VAR gate filing ki te gen nan desizyon konplike yo</a>
              </div> </li>
            <li>
              <div class="blocktxt">
                  <a href="#">Messi THE BEST, statistik you pwouve sa</a>
              </div></li>
              <li>
              <div class="blocktxt">
                  <a href="#">Pjanic ki al nan Barelone nan pral bay mitan tèren an yon be figi</a>
              </div></li>
						</ul>
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->

			</div><!-- row -->
		</div><!-- container -->
	</section>


	<footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>

		<div class="container">


			<div class="mt-20 brdr-ash-1 opacty-4"></div>

			<div class="text-center ptb-30">
				<div class="row">
					<div class="col-sm-3">
						<a class="mtb-10" href="../index.php"><img src="images/GolAyiti-logo.jpg" alt=""></a>
					</div><!-- col-sm-3 -->

					<div class="col-sm-5">
						<p class="mtb-10">Ak pasyon nap sèvi kominote Ayisyen an nan lang manman nou ak papa nou, lang nou se fyète n!</p>
					</div><!-- col-sm-3 -->

          <div class="col-sm-4">
  						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
  							<li><a href="https://www.facebook.com/GolAyiti-108762900894576/"><i class="ion-social-facebook"></i></a></li>
  							<li><a href="https://twitter.com/GolAyiti"><i class="ion-social-twitter"></i></a></li>

  							<li><a href="https://www.instagram.com/GolAyiti"><i class="ion-social-instagram"></i></a></li>
  						</ul>
  					</div><!-- col-sm-3 -->
				</div><!-- row -->
			</div><!-- text-center -->
		</div><!-- container -->

		<div class="bg-dark-primary ptb-15 text-left">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-6">
						<p class="text-md-center font-9 pt-5 mtb-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | GolAyiti.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div><!-- col-sm-3 -->

					<div class="col-sm-12 col-md-6">
						<ul class="mtb-5 font-11 text-md-center text-right list-a-p-5">
							<li><a href="../index.php">Akey</a></li>
							<li><a href="#">Reklam</a></li>
							<li><a href="../misyon-nou.php">GolAyiti</a></li>
							<li><a href="#">Biznis</a></li>
							<li><a href="#">Kontak</a></li>
							<li><a href="#">Travay</a></li>
							<li><a href="#">Aktivite</a></li>
							<li><a href="#">Teknoloji</a></li>
							<li><a href="#">Sipote nou</a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->

			</div><!-- container -->
		</div><!-- container -->
	</footer>

	<!-- SCIPTS -->

	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>

	<script src="plugin-frameworks/tether.min.js"></script>

	<script src="plugin-frameworks/bootstrap.js"></script>

	<script src="common/scripts.js"></script>
<!-- This going to be my own goog api maps credentials -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Nkl4q13z00Fid3Vh8eOp4mqVlgfcXLA&callback=">
		</script>
</body>
</html>
