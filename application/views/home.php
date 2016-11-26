<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php echo $titulo; ?></title>
	<meta name="description" content="<?php echo $descripcion; ?>">
	<!-- icono -->
	<link rel="shortcut icon" href="static/images/favicon.png">
	<!-- Bootstrap implementation -->
	<!-- <link href="static/dist/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
	<link href="static/css/style.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	<!-- GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
	<!-- FONTELLO -->
	<link href="static/font/fontello/css/fontello.css" rel="stylesheet" type="text/css" />
	<link href="static/font/fontello/css/animation.css" rel="stylesheet" type="text/css" />
	<!--if IE 7
	link(rel='stylesheet', href='static/font/fontello/css/fontello-ie7.css')
	-->
	<!-- ANONYMOUS PRO FONT-->
	<link href="http://fonts.googleapis.com/css?family=Anonymous+Pro:400,700" rel="stylesheet" type="text/css" />
	<!-- DRIPICONS -->
	<link href="static/font/dripicons/webfont.css" rel="stylesheet" type="text/css" />
	<!-- SIMPLE LINE ICONS -->
	<link href="static/font/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
	<!-- THEMIFY ICONS -->
	<link href="static/font/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />
	<!-- FONTASTIC ICONS -->
	<link href="static/font/fontastic/styles.css" rel="stylesheet" type="text/css" />
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="static/css/extralayers.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="static/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- CarouFredSel -->
	<link href="static/css/caroufredsel.css" rel="stylesheet" type="text/css" />
	<!-- WOW.JS REVEAL ANIMATIONS -->
	<link href="static/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- PYE CHART -->
	<link href="static/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
	<!-- Hover Effect Ideas -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css' />
	<link href="static/css/HoverEffectIdeas/css/demo.css" rel="stylesheet" type="text/css" />
	<link href="static/css/HoverEffectIdeas/css/set1.css" rel="stylesheet" type="text/css" />
	<!-- Lightcase ( image popup preview ) -->
	<link href="static/plugins/lightcase/css/lightcase.css" rel="stylesheet" type="text/css" />
</head>
<body class="hidenavv">
	<div id="preloader">
	    <div id="status">&nbsp;</div>
	</div>

	<div id="tm-fullscreen" class="fixed bg111 wfull hfull z900"></div>
	<div class="tm-prev">
		<div class="bg111 text-center fontproximabold clight size10 caps pt5">Home Pages</div>
		<div class="tm-content">
			<ul>
				<li> <a href="index.php"   onMouseOver="ShowPicture('Style',1)"  onMouseOut="ShowPicture('Style',0)"><img src="static/images/spacer.png"  width="150" height='73' class="hpage1" alt=""><div class="tm-over"><p>Home 01</p></div></a> </li>
				<li> <a href="index02.php" onMouseOver="ShowPicture('Style2',1)" onMouseOut="ShowPicture('Style2',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage2" alt=""><div class="tm-over"><p>Home 02</p></div></a> </li>
				<li> <a href="index03.php" onMouseOver="ShowPicture('Style3',1)" onMouseOut="ShowPicture('Style3',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage3" alt=""><div class="tm-over"><p>Home 03</p></div></a> </li>
				<li> <a href="index04.php" onMouseOver="ShowPicture('Style4',1)" onMouseOut="ShowPicture('Style4',0)"><img src="static/images/spacer.png" width="150" height='72' class="hpage4" alt=""><div class="tm-over"><p>Home 04</p></div></a> </li>
				<li> <a href="index05.php" onMouseOver="ShowPicture('Style5',1)" onMouseOut="ShowPicture('Style5',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage5" alt=""><div class="tm-over"><p>Home 05</p></div></a> </li>
				<li> <a href="index06.php" onMouseOver="ShowPicture('Style6',1)" onMouseOut="ShowPicture('Style6',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage6" alt=""><div class="tm-over"><p>Home 06</p></div></a> </li>
				<li> <a href="index07.php" onMouseOver="ShowPicture('Style7',1)" onMouseOut="ShowPicture('Style7',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage7" alt=""><div class="tm-over"><p>Home 07</p></div></a> </li>
				<li> <a href="index08.php" onMouseOver="ShowPicture('Style8',1)" onMouseOut="ShowPicture('Style8',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage8" alt=""><div class="tm-over"><p>Home 08</p></div></a> </li>
				<li> <a href="index09.php" onMouseOver="ShowPicture('Style9',1)" onMouseOut="ShowPicture('Style9',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage9" alt=""><div class="tm-over"><p>Home 09</p></div></a> </li>
				<li> <a href="index10.php" onMouseOver="ShowPicture('Style10',1)" onMouseOut="ShowPicture('Style10',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage10" alt=""><div class="tm-over"><p>Home 10</p></div></a> </li>
				<li> <a href="index11.php" onMouseOver="ShowPicture('Style11',1)" onMouseOut="ShowPicture('Style11',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage11" alt=""><div class="tm-over"><p>Home 11</p></div></a> </li>
				<li> <a href="index12.php" onMouseOver="ShowPicture('Style12',1)" onMouseOut="ShowPicture('Style12',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage12" alt=""><div class="tm-over"><p>Home 12</p></div></a> </li>
				<li> <a href="index13.php" onMouseOver="ShowPicture('Style13',1)" onMouseOut="ShowPicture('Style13',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage13" alt=""><div class="tm-over"><p>Home 13</p></div></a> </li>
				<li> <a href="index14.php" onMouseOver="ShowPicture('Style14',1)" onMouseOut="ShowPicture('Style14',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage14" alt=""><div class="tm-over"><p>Home 14</p></div></a> </li>
				<li> <a href="index15.php" onMouseOver="ShowPicture('Style15',1)" onMouseOut="ShowPicture('Style15',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage15" alt=""><div class="tm-over"><p>Home 15</p></div></a> </li>
				<li> <a href="index16.php" onMouseOver="ShowPicture('Style16',1)" onMouseOut="ShowPicture('Style16',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage16" alt=""><div class="tm-over"><p>Home 16</p></div></a> </li>
				<li> <a href="index17.php" onMouseOver="ShowPicture('Style17',1)" onMouseOut="ShowPicture('Style17',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage17" alt=""><div class="tm-over"><p>Home 17</p></div></a> </li>
				<li> <a href="index18.php" onMouseOver="ShowPicture('Style18',1)" onMouseOut="ShowPicture('Style18',0)"><img src="static/images/spacer.png" width="150" height='73' class="hpage18" alt=""><div class="tm-over"><p>Home 18</p></div></a> </li>
				<li> <a href="index19.php" onMouseOver="ShowPicture('Style19',1)" onMouseOut="ShowPicture('Style19',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage19" alt=""><div class="tm-over"><p>Home 19</p></div></a> </li>
				<li> <a href="index20.php" onMouseOver="ShowPicture('Style20',1)" onMouseOut="ShowPicture('Style20',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage20" alt=""><div class="tm-over"><p>Home 20</p></div></a> </li>
				<li> <a href="index21.php" onMouseOver="ShowPicture('Style21',1)" onMouseOut="ShowPicture('Style21',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage21" alt=""><div class="tm-over"><p>Home 21</p></div></a> </li>
				<li> <a href="index22.php" onMouseOver="ShowPicture('Style22',1)" onMouseOut="ShowPicture('Style22',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage22" alt=""><div class="tm-over"><p>Home 22</p></div></a> </li>
				<li> <a href="index23.php" onMouseOver="ShowPicture('Style23',1)" onMouseOut="ShowPicture('Style23',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage23" alt=""><div class="tm-over"><p>Home 23</p></div></a> </li>
				<li> <a href="index24.php" onMouseOver="ShowPicture('Style24',1)" onMouseOut="ShowPicture('Style24',0)"><img src="static/images/spacer.png" width="150" height='75' class="hpage24" alt=""><div class="tm-over"><p>Home 24</p></div></a> </li>
				<li> <a href="#"><img src="static/images/spacer.png" width='150' height='87' class="hpagesoon" alt="" class="mb5"></a> </li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<a href="../builder" target="_blank" class="btn btn-default btngreen noborders titlefont center wfull caps"><span class="size11">Try Page Builder</span></a>
		<div class="clearfix"></div>
		<a class="tm-close"><span class="ti-close"></span></a>
		<a class="tm-open"><span class="ti-layout-width-full"></span></a>
	</div>

	<div class="navigation">
		<div class="container">
			<div class="logo"><a href="index.php"><img src="static/images/spacer.png" class="white mt5 relative z100" alt=""/></a></div>
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid relative">
					<button type="button" class="btn left hide-show-button none">
					    <span class="burgerbar"></span>
					    <span class="burgerbar"></span>
					    <span class="burgerbar"></span>
					</button>
					<a href="#" class="closemenu"></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu mobanim dark-menu navbar-collapse white collapse offset-0 ">
						<ul class="nav navbar-nav mobpad">
							<li><a href="#">Inicio</a></li>

							<li><a href="#">Nosotros</a></li>

							<li class="dropdown static">
							  	<a class="dropdown-toggle" href="index.php">Servicios <b class="caret"></b></a>
							  	<ul class="dropdown-menu dropwidth01">
									<li>
										<div class="row">
									  		<ul class="droplist col-md-3 findcol4 col4fix">
												<li class="dropdown-header">Desarrollo Web</li>
												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index.php">Rediseño de Pagina web<b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index02.php">Web informativa<b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index03.php">Desarrollo a Medida<b class="caret2"></b></a>
												</li>
									  		</ul>

									  		<ul class="droplist col-md-3 findcol4 col4fix">
												<li class="dropdown-header">Branding</li>
												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index07.php">Diseño de marcas y logotipos <b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index08.php">Identidad corporativa <b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="index09.php">Estrategia corporativa <b class="caret2"></b></a>
												</li>
									  		</ul>

									  		<ul class="droplist col-md-3 findcol4 col4fix">
												<li class="dropdown-header">E-commerce</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">Plan Básico <b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">Plan Premium <b class="caret2"></b></a>
												</li>

												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">Plan Exclusivo <span class="ti-bolt-alt clight"></span><b class="caret2"></b></a>
												</li>
									  		</ul>

									  		<ul class="droplist col-md-3 findcol4 col4fix noline">
												<li class="dropdown-header">Merchandising</li>
												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">XXX XXX <span class="ti-bolt-alt clight"></span><b class="caret2"></b></a>
												</li>
												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">XXX XXX <span class="ti-bolt-alt clight"></span><b class="caret2"></b></a>
												</li>
												<li class="dropdown submenu">
													<a class="dropdown-toggle" href="#">XXX XXX <span class="ti-bolt-alt clight"></span><b class="caret2"></b></a>
												</li>
									  		</ul>
										</div>
									</li>
							  	</ul>
							</li>

							<li class="dropdown">
							  	<a class="dropdown-toggle" href="#">Proyectos <b class="caret"></b></a>
							  	<ul class="dropdown-menu">
									<li><a href="#">proyecto 1</a></li>
									<li><a href="#">proyecto 2</a></li>
									<li><a href="#">proyecto 3</a></li>
							  	</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

					<div class="shopsearch navbar-collapse white collapsee offset-0 relative z1000">
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="#"><i class="ti-facebook"></i></a>
							</li>
							<li class="">
								<a href="#"><i class="ti-twitter"></i></a>
							</li>
						</ul>
					</div>	

					<div class="dots">
						<a href="#" class="opendots">
							<span class="icon-dots"></span>
							<span class="icon-dots"></span>
							<span class="icon-dots"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="parallax-off" class="tp-banner-container relative">
		<div class="tp-banner" >
			<ul>
				<!-- SLIDE 1  -->
				<li  data-transition="fade" data-slotamount="1" data-masterspeed="2000" data-thumb="static/images/slider/girls.jpg" data-delay="12000"  data-saveperformance="on"  data-title="Ken Burns Slide" data-color="white">
					<!-- MAIN IMAGE -->
					<img src="static/images/dummy.png" alt="" data-lazyload="static/images/slider/girls.jpg" data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center">

					<!-- LAYER 1 -->
					<div class="prlx-off tp-caption caption-white-bigbold-caps customin customout tp-resizeme"
						data-x="center"  data-voffset="-80"
						data-y="center"  data-hoffset="0"
												
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"						
						data-speed="500"
						data-start="3500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="100"
						style="z-index: 10;"
						>AVISION
					</div>
					
					<!-- LAYER 2 -->
					<div class="prlx-off tp-caption caption-white randomrotate customout tp-resizeme"
						data-x="center"  data-voffset="0"		
						data-y="center"  data-hoffset="0"	

						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"						
						data-endspeed="300"
						style="z-index: 10;"
						>The easiest way to build your website.
					</div>
					
					<!-- LAYER 3 -->
					<div class="prlx-off tp-caption caption-white-bold-caps  customin customout"
						data-x="center"   data-voffset="80"	
						data-y="center"   data-hoffset="0"
					
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="3500"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Back.easeIn"
						style="z-index: 10;"
						>
						<a href="../builder" class="btn btnwhiteline2 fontproximabold plr50 caps center" target="_blank">You can also use a pagebuilder</a>
					</div>	

					<!-- Filter dark -->
					<div class="tp-caption "
						 data-x="center"
						 data-y="center"
						 data-speed="600"
						 data-start="0"
						 data-easing="easeOut"  
						 style="z-index: 4; display:block; background:rgba(0,0,0,0.5); width:100%; height:100%;"
						 ></div>
				</li>

				<!-- VIDEO  -->
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-color="white">
				
					<!-- MAIN IMAGE -->
					<img src="static/images/slider/video/flexboxvideo.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<div class="tp-caption tp-fade fadeout fullscreenvideo"
						data-x="0"
						data-y="0"
						data-speed="1000"
						data-start="0"
						data-easing="Power4.easeOut"
						data-endspeed="1500"
						data-endeasing="Power4.easeIn"
						data-autoplay="true"
						data-autoplayonlyfirsttime="false"
						data-nextslideatend="true"
						data-forceCover="1"
						data-aspectratio="16:9"
						data-forcerewind="on"
						style="z-index: 2">
					<!-- data-dottedoverlay="twoxtwo" -->

					<video class="video-js vjs-default-skin whfull" preload="none" poster='static/images/slider/video/flexboxvideo.jpg' >
					<source src='static/images/slider/video/flexboxvideo.mp4' type='video/mp4' />
					<source src='static/images/slider/video/flexboxvideo.webm' type='video/webm' />
					<source src='static/images/slider/video/flexboxvideo.ogv' type='video/ogg' />
					</video>

					</div>

					<!-- Filter maron -->
					<div class="tp-caption "
						 data-x="center"
						 data-y="center"
						 data-speed="600"
						 data-start="0"
						 data-easing="easeOut"  
						 style="z-index: 4; display:block; background:rgba(102,102,51,0.1); width:100%; height:100%;"
						 ></div>

					<!-- Filter dark -->
					<div class="tp-caption "
						 data-x="center"
						 data-y="center"
						 data-speed="600"
						 data-start="0"
						 data-easing="easeOut"  
						 style="z-index: 4; display:block; background:rgba(0,0,0,0.1); width:100%; height:100%;"
						 ></div>

					<!-- LAYER NR. 1 -->
					<div class="prlx-off tp-caption caption-white-bigbold-caps customin customout"
						data-x="center"
						data-y="center"
						data-captionhidden="on"


						data-splitin="words"
						data-elementdelay="0.25"
						data-start="200"
						data-speed="600"
						data-easing="Back.easeOut"
						data-customin="x:0;y:-20;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"



						data-frames="{ typ :lines;
									 elementdelay :0.1;
									 start:1650;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:0;y:-50;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 { typ :lines;
									 elementdelay :0.1;
									 start:2150;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:0;y:-40;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 {
									 elementdelay :0.1;
									 start:3200;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:-240;y:13;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.0;scaleY:0.12;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },

									 {typ:chars;
									 elementdelay :0.1;
									 start:4000;
									 speed:1500;
									 ease:Power3.easeInOut;
									 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:720;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 }
									 "

						data-splitout="words"
						data-endelementdelay="0.1"
						data-customout="x:0;y:0;z:0;rotationX:40;rotationY:70;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"

						style="z-index: 4">Avision
					</div>

					<div class="prlx-off tp-caption caption-light customin customout"
						data-x="center"   data-hoffset="0"
						data-y="center"   data-voffset="30"

						data-splitin=""
						data-elementdelay=""
						data-start="1600"
						data-speed="600"
						data-easing="Power3.easeOut"
						data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

						data-frames="{ typ :lines;
									 elementdelay :0.1;
									 start:2150;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:0;y:-35;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 {
									 elementdelay :0.1;
									 start:3600;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:-240;y:13;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.0;scaleY:0.12;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 {typ:chars;
									 elementdelay :0.1;
									 start:4200;
									 speed:1500;
									 ease:Power3.easeInOut;
									 animation:x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:720;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 }
									 "

						data-splitout="lines"
						data-endelementdelay="0.1"
						data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
						data-endspeed="500"

						data-endeasing="Back.easeIn"
						data-captionhidden="on"
						style="z-index: 10">Everything at the touch of a finger!
					</div>

					<div class="prlx-off tp-caption  customin customout"
						data-x="center"   data-voffset="100"	
						data-y="center"   data-hoffset="0"

						data-splitin=""
						data-elementdelay=""
						data-start="2150"
						data-speed="600"
						data-easing="Power3.easeOut"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 100%;"
						
						data-frames="{ 
									 elementdelay :0.1;
									 start:2150;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:0;y:-20;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 {
									 elementdelay :0.1;
									 start:3800;
									 speed:500;
									 ease:Power3.easeOut;
									 animation:x:-240;y:13;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.0;scaleY:0.12;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 },
									 {
									 elementdelay :0.1;
									 start:4400;
									 speed:1500;
									 ease:Power3.easeInOut;
									 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:720;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
									 }
									 "

						data-endelementdelay="0.1"
						data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
						data-endspeed="500"
					
						data-endeasing="Back.easeIn"
						data-captionhidden="on"
						style="z-index: 10">
						<div class="container rev-ct1">
							<div class="col-md-6">
								<a href="#" class="btn btnwhiteline2 fontproximabold plr40 caps rev-l">Purchase this template</a>
							</div>
							<div class="col-md-6">
								<a class="btn btnmaincolor fontproximabold plr50 caps rev-r activate-tmprev">Browse more pages</a>
							</div>
						</div>
					</div>

				</li>
			</ul>
			<div class="tp-bannertimer none"></div>
		</div>
	</div>

	<div id="navoffset2" class="bg222  relative z100">
		<div class="container">
			<ul class="squares dark">
				<li class="col-md-3 text-center">
					<a href="#">
						<i class="icon-heart-2 size40"></i>
						<h4 class="uppercase">Desarrollo Web</h4>
						<p>Desarrollo de Paginas Web.</p>
					</a>
				</li>
				<li class="col-md-3 text-center">
					<a href="#">
						<i class="icon-params size40"></i>
						<h4 class="uppercase">Branding</h4>
						<p>xxx xxx xxx xxx xxx xxx xxxx</p>
					</a>
				</li>
				<li class="col-md-3 text-center">
					<a href="#">
						<i class="icon-mobile-3 size40"></i>
						<h4 class="uppercase">E-commerce</h4>
						<p>xxx xxx xxx xxx xxx xxx xxxx</p>
					</a>
				</li>
				<li class="col-md-3 text-center">
					<a href="#">
						<i class="icon-lightbulb-1 size40"></i>
						<h4 class="uppercase">Merchandising</h4>
						<p>xxx xxx xxx xxx xxx xxx xxxx</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- WOOD SECTION -->
	<section ID="wallsection" class="relative z100 none" data-type="background" data-offsety="450" data-speed="2">
		<div class="container pt50 pb80">
			<div class="row">
				<h3 class="text-center caps pb20 cwhite">Portfolio</h3>
				<div class="col-md-4 wow flipInY center animated" data-wow-delay="0.5s">
					<div class="bglight offset-0">
						<h4 class="p20 caps">Monday morning at the desk</h4>
						<div class="pfover">
							<a href="#" class="circlebig2"><i class="icon-article-alt"></i></a>
							<a href="#"><img src="static/images/folio1.jpg" class="wdhover" alt=""/></a>
						</div>
						<p class="wleft">
							By <a href="#"><b>Admin</b></a> - Web Development<br/>
							Dolor sit amet consectetur 
						</p>
						<a href="#" class="btn btnwhite btn-default wright"><i class="icon-article-alt"></i> More</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 wow flipInX center animated" data-wow-delay="1.0s">
					<div class="bglight offset-0">
						<h4 class="p20 caps">Brainstorming ideas</h4>
						<div class="pfover">
							<a href="#" class="circlebig2"><i class="icon-resize-full"></i></a>
							<a href="#"><img src="static/images/folio2.jpg" class="wdhover" alt=""/></a>
						</div>
						<p class="wleft">
							By <a href="#"><b>Admin</b></a> - Web Development<br/>
							Dolor sit amet consectetur 
						</p>
						<a href="#" class="btn btnwhite btn-default wright"><i class="icon-article-alt"></i> More</a>
						<div class="clearfix"></div>					
					</div>		
				</div>
				<div class="col-md-4 wow flipInY center animated" data-wow-delay="1.5s">
					<div class="bglight offset-0">
						<h4 class="p20 caps">Coffee break</h4>
						<div class="pfover">
							<a href="#" class="circlebig2"><i class="icon-video"></i></a>
							<a href="#"><img src="static/images/folio3.jpg" class="wdhover" alt=""/></a>
						</div>
						<p class="wleft">
							By <a href="#"><b>Admin</b></a> - Web Development<br/>
							Dolor sit amet consectetur 
						</p>
						<a href="#" class="btn btnwhite btn-default wright"><i class="icon-article-alt"></i> More</a>
						<div class="clearfix"></div>					
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- End of Wood Section -->

	<!-- PORTFOLIO SECTION-->
	<div class="bglight cdark relative z100">
		<div class="container-fluid offset-0 pt50">
			
				<h3 class="text-center caps pb20 titlefont">Some of our recent work</h3>
				
				<div class="bgblue">
					<ul class="pgal">
						<li><img src="static/images/pgal/thumb01.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li class="pgalhide2"><img src="static/images/pgal/thumb02.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li class="pgalhide"><img src="static/images/pgal/thumb03.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li><img src="static/images/pgal/thumb04.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li><img src="static/images/pgal/thumb05.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li><img src="static/images/pgal/thumb06.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li><img src="static/images/pgal/thumb07.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li class="pgalhide2"><img src="static/images/pgal/thumb08.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li class="pgalhide"><img src="static/images/pgal/thumb09.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
						<li class="times2 bglightgrey custpos01 relative">
							
							<!-- TESTIMONIALS CAROUSEL -->
							<div class="testimonials styled responsive">
								<ul id="testimonials" >
									<li class="cwhite">
										Nice colors, great balance, sharp details, 
										functionality and a little bit of creativity  makes awesome aesthetics.
									</li>
									<li class="cwhite">Great service with fast and reliable support. The design work and detail put into these themes has been recognized by my customers. </li>
									<li class="cwhite">Love your work! I used some of your themes for some of my projects and i would most definitely return here. Keep up the good work. </li>
								</ul>
								<div class="clearfix"></div>
								
								
								<!-- <div class="test-timer"></div>
								<a id="test-prev" href="" class="">&#60;</a>
								<a id="test-next" href="" class="">&#62;</a> -->
								<div class="test-pager white"></div>
								
							</div>
							<!-- TESTIMONIALS END -->
						</li>
						<li><img src="static/images/pgal/thumb10.jpg" class="zoom" alt="" />
							<div class="pgal-hover">
								<h4>Nice Branding</h4><span></span><p>Creative</p>
								<a class="btnmore" href="#"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
						</li>
					</ul>
				</div>
		</div>
	</div>
	<!-- End of Portfolio Section -->

	<!-- THE TEAM SECTION -->
	<div class="teamsection bgwhite relative z100 sspacing-title-button owhidden">
		<div class="container">
			<div class="row">
				<h3 class="text-center caps pb30 titlefont">The team</h3>	
				<div class="col-md-3" data-scroll-reveal="enter left over 1s and move 300px after 0.5s">
					<div class="player offset-0" data-scrollreveal="enter left">
						<h4 class="m15">Alice</h4>
						<div class="teampicture">
							<img src="static/images/team1.jpg" class="fwi dajy" alt=""/>
							<div class="teamover"></div>
							<p>Graphic Designer</p>
						</div>
						<div class="socialiconswhite m20">
							<ul>
								<li class="blue"><a href="#"><i class="icon-facebook"></i></a></li>
								<li class="lblue"><a href="#"><i class="icon-twitter-bird"></i></a></li>
								<li class="orange"><a href="#"><i class="icon-gplus"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3" data-scroll-reveal="enter top over 1s and move 50px after 0.5s">
					<div class="player offset-0" data-scrollreveal="enter top">
						<h4 class="m15">Jake</h4>
						<div class="teampicture">
							<img src="static/images/team2.jpg" class="fwi dajy" alt=""/>
							<div class="teamover"></div>
							<p>Web Developer</p>
						</div>
						<div class="socialiconswhite m20">
							<ul>
								<li class="blue"><a href="#"><i class="icon-facebook"></i></a></li>
								<li class="lblue"><a href="#"><i class="icon-twitter-bird"></i></a></li>
								<li class="orange"><a href="#"><i class="icon-gplus"></i></a></li>
								<li class="pink"><a href="#"><i class="icon-dribbble"></i></a></li>
								<li class="red"><a href="#"><i class="icon-youtube"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>					
					</div>		
				</div>
				<div class="col-md-3" data-scroll-reveal="enter bottom over 1s and move 50px after 0.5s">
					<div class="player offset-0" data-scrollreveal="enter bottom">
						<h4 class="m15">Kate</h4>
						<div class="teampicture">
							<img src="static/images/team3.jpg" class="fwi dajy" alt=""/>
							<div class="teamover"></div>
							<p>Marketing Manager</p>
						</div>
						<div class="socialiconswhite m20">
							<ul>
								<li class="blue"><a href="#"><i class="icon-facebook"></i></a></li>
								<li class="lblue"><a href="#"><i class="icon-twitter-bird"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>					
					</div>		
				</div>	
				<div class="col-md-3" data-scroll-reveal="enter right over 1s and move 300px after 0.5s">
					<div class="player offset-0" data-scrollreveal="enter right">
						<h4 class="m15">Simon</h4>
						<div class="teampicture">
							<img src="static/images/team4.jpg" class="fwi dajy" alt=""/>
							<div class="teamover"></div>
							<p>CEO</p>
						</div>
						<div class="socialiconswhite m20">
							<ul>
								<li class="blue"><a href="#"><i class="icon-facebook"></i></a></li>
								<li class="lblue"><a href="#"><i class="icon-twitter-bird"></i></a></li>
								<li class="orange"><a href="#"><i class="icon-gplus"></i></a></li>
								<li class="red"><a href="#"><i class="icon-youtube"></i></a></li>
							</ul>
							<div class="clearfix"></div>
						</div>					
					</div>		
				</div>
				
				<div class="clearfix"></div>
				<div class="separator33" data-scroll-reveal="enter top over 1s and move 30px after 0.5s"></div>
				
				<div class="col-md-8" data-scroll-reveal="enter bottom over 1s and move 30px after 0.5s">
				
					<ul class="aboutteamlist">
						<li>
							<div class="circlesmall left"><i class="icon-globe"></i></div>
							<div class="ctnr">
								<h4 class="uppercase mb15 titlefont">The company</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, magni, sint sunt totam impedit doloribus.</p>
							</div>
						</li>

						<li>				
							<div class="circlesmall left"><i class="icon-signal"></i></div>
							<div class="ctnr">
								<h4 class="uppercase mb15 titlefont">The Goal</h4>
								<p>Placeat dolorum expedita modi corporis molestias fuga consectetur pariatur dolorem neque deserunt sint odio.</p>			
							</div>
						</li>

						<li>				
							<div class="circlesmall left"><i class="icon-group"></i></div>
							<div class="ctnr">
								<h4 class="uppercase mb15 titlefont">The team</h4>		
								<p>Placeat dolorum expedita modi corporis molestias fuga consectetur pariatur dolorem neque deserunt sint odio.</p>
							</div>
						</li>				
						
						<li>				
							<div class="circlesmall left"><i class="icon-beaker"></i></div>
							<div class="ctnr">
								<h4 class="uppercase mb15 titlefont">The Projects</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, magni, sint sunt totam impedit doloribus.</p>	
							</div>	
						</li>
					</ul>
				</div>
				<div class="col-md-4 enableanimation" data-scroll-reveal="enter bottom over 1s and move 30px after 0.5s">
					<h4 class="uppercase mb15 titlefont">The skills</h4>				
					
					<div class="progress-about margbar">
					  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-maincolor pbar1">
						BRANDING 90%
					  </div>
					</div>
					<div class="progress-about margbar">
					  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-maincolor pbar2">
						WEB DEVELOPING 100%
					  </div>
					</div>
					<div class="progress-about margbar">
					  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-maincolor pbar3">
						GRAPHIC DESIGN 85%
					  </div>
					</div>				
					<div class="progress-about margbar mb50">
					  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-maincolor pbar4">
						S.E.O. 95%
					  </div>
					</div>				
				</div>		
				
				<div class="clearfix"></div>		
				<p class="text-center caps"><a href="#" class="btn btnwhitehuge btn-default">Join our team</a></p>
			</div>
		</div>
	</div>
	<!-- END OF TEAM SECTION -->

	<!-- FACTS SECTION -->
	<section ID="sectionfacts-c" class="hauto">
		<div class="prlx-sectionfacts"></div>
		<div class="container sspacing-title" >
			<div class="row">
				<h3 class="text-center caps pb30 cwhite titlefont">The Facts</h3>	
				
				<div class="col-md-3 text-center" data-scroll-reveal="enter top over 1s and move 30px after 0.2s">
					<div class="factscircle center"><i class="icon-twitter-bird"></i></div>
					<p class="size56 cwhite">150</p>
					<div class="separatorsmall"></div>			
					<p class="caps cwhite mt20">tweets</p>
				</div>
				<div class="col-md-3 text-center" data-scroll-reveal="enter top over 1s and move 30px after 0.4s">
					<div class="factscircle center"><i class="icon-group-circled"></i></div>
					<p class="size56 cwhite">2100</p>
					<div class="separatorsmall"></div>			
					<p class="caps cwhite mt20">happy clients</p>
				</div>
				<div class="col-md-3 text-center" data-scroll-reveal="enter top over 1s and move 30px after 0.6s">
					<div class="factscircle center"><i class="icon-coffee"></i></div>
					<p class="size56 cwhite">450</p>
					<div class="separatorsmall"></div>			
					<p class="caps cwhite mt20">coffee cups</p>
				</div>
				<div class="col-md-3 text-center" data-scroll-reveal="enter top over 1s and move 30px after 0.8s">
					<div class="factscircle center"><i class="icon-ok-circle"></i></div>
					<p class="size56 cwhite">10</p>
					<div class="separatorsmall"></div>
					<p class="caps cwhite mt20">finished projects</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End of FACTS SECTION-->

	<!-- SECTION -->
	<div class="">
		<div class="container sspacing">
			<div class="row">

				<div class="col-md-6">
					<h3 class="caps bold size30 pb20 titlefont">Take your business in your pocket. Do it mobile!</h3>
					<!-- Accordion -->
					<div class="panel-group" id="accordion">
					  
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							  Why should you do it mobile?
							</a>
						  </h4>
						  <span></span>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
						  <div class="panel-body"><span></span>
							Peoples time spent per day on mobile devices has increased 575% in three years and 80% of the time spent on mobile devices is spent using apps.<br/><br/>
							Mobile Apps may become more important than your website, so thinking how your business will look on a device should concern you.
						  </div>
						</div>					
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							  Mobile, Tablet, Web + Emerging Platforms
							</a>
						  </h4>
						  <span></span>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
						  <div class="panel-body"><span></span>
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>					
					  </div>

					  
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							  Experience + Service Design
							</a>
						  </h4>
						  <span></span>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
						  <div class="panel-body"><span></span>
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>					
					  </div>
	 				</div>
					<!-- End of Accordion -->			
				</div>
				
				<div class="col-md-6">
					<!-- CarouFredSel 3 -->
					<div class="list_carousel3 responsive">
						<ul id="foo3">
							<li><img src="static/images/device.png" class="fwi" alt=""/></li>
							<li><img src="static/images/device-b.png" class="fwi" alt=""/></li>
							<li><img src="static/images/device-c.png" class="fwi" alt=""/></li>
						</ul>
						<div class="clearfix"></div>
						
						<div class="timer3 none"></div>
						<a id="prev3" href="" class="none">&#60;</a>
						<a id="next3" href="" class="none">&#62;</a>
						<div class="pager3"></div>
					</div>
					<!-- End of CarouFredSel 3 -->
				</div>

				<div class="clearfix"></div>
				<div class="separator33 mt10"></div>
				
				<div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.2s">
					<div class="circlesmall left"><i class="icon-child"></i></div>
					<div class="ctnr">
						<h4 class="uppercase mb15 titlefont">User Experience</h4>
						<p>A Mobile Application has a much better user experience. The navigation is seamless and intuitive, and hence, used much more than mobile websites.</p>
					</div>
				</div>
				<div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.4s">
					<div class="circlesmall left"><i class="icon-network"></i></div>
					<div class="ctnr">
						<h4 class="uppercase mb15 titlefont">Works Offline</h4>
						<p>Once the app is downloaded on the device, it doesn’t “load” whenever one opens it. You can access it anytime, even if you are offline. </p>
					</div>
				</div>
				<div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.6s">
					<div class="circlesmall left"><i class="icon-shield"></i></div>
					<div class="ctnr">
						<h4 class="uppercase mb15 titlefont">Security</h4>
						<p>Native Mobile Apps have an architectural advantage, and hence, do not need to connect with the network frequently.</p>
					</div>
				</div>
				<div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.8s">
					<div class="circlesmall left"><i class="icon-ok"></i></div>
					<div class="ctnr">
						<h4 class="uppercase mb15 titlefont">Compatibility</h4>
						<p>A Native App is specifically built to be compatible with your mobile device. That’s why it is able to communicate and interact with your device.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Facts -->

	<div class="separator100"></div>

	<!-- SECTION CONTACT -->
	<div class="">
		<div class="container sspacing-title-button">
			<div class="row">

				<form class="cmxform result" id="commentForm" >
					<h3 class="text-center caps pb20 titlefont">Contact</h3>
					<p class="text-center size30 mb10 pb20">Since you arrived here, you could leave us a message.</p>
					
					<div class="col-md-3">
						<div class="relative">
							<input type="text"  class="form-control formlarge"      placeholder="Name"    id="cname"    name="cname"  minlength="2" required>
						</div>
						<div class="relative">
							<input type="email" class="form-control formlarge mt17" placeholder="Email"   id="cemail"   name="cemail" required>
						</div>
						<input type="text"  class="form-control formlarge mt17" placeholder="Phone" id="phone" name="phone">
					</div>
					<div class="col-md-9">
						<div class="relative">
							<textarea class="form-control formstyle" rows="7"       placeholder="Message" id="ccomment" name="ccomment" required></textarea>
						</div>
					</div>
					<div class="clearfix"></div>
					<button id="submit" type="submit" class="btn btnwhitebig btn-default caps center mt30 wow pulse animated" data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="2"><i class="icon-mail"></i> Send Message</button>
					<div class="clearfix"></div>
				</form>

			</div>
		</div>
	</div>
	<!-- END OF CONTACT -->

	<div class="separator100"></div>

	<!-- SECTION PARTNERS -->
	<div class="sspacing-title">
		<div class="container text-center">
			<h3 class="text-center caps titlefont pb10">Partners</h3>

			<!-- CarouFredSel 4 -->
			<div class="list_carousel4 responsive">
				<ul id="foo4">
					<li><img src="static/images/logos/logo1.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo2.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo3.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo4.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo5.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo6.jpg" alt=""/></li>
					<li><img src="static/images/logos/logo7.jpg" alt=""/></li>
				</ul>
				<div class="clearfix"></div>
				
				<!--
				
				This enables more scrolling options and timer
				
				<div class="timer4"></div>
				<a id="prev4" href="" class="">&#60;</a>
				<a id="next4" href="" class="">&#62;</a>
				<div class="pager4"></div>
				-->
			</div>
			<!-- End of CarouFredSel 4 -->
			
		</div>
	</div>
	<!-- End of Section -->

	<!-- ADDRESS SECTION -->
	<section ID="sectionaddress-c" class="">
		<div class="prlx-address"></div>
		<div class="container pt180" >
			
			<div class="col-md-3">
			</div>
			<div class="col-md-9 wow bounceInDown center animated" data-wow-delay="0.3s">
				<h4>Visit our headquarters</h4>
				<h1 class="titlefont size56">Westminster, London</h1>
				<h4>SW1A 0AA, United Kingdom,<br/>
				+44 820 800 1234 </h4>
			</div>
			
		</div>
	</section>
	<!-- End of Address -->

	<!-- FOOTER -->
	<div class="footer">
		<div class="container ptb50 cwhite">
			<div class="row">
				<div class="col-md-3">
					<h5 class="uppercase bold pb20 cwhite titlefont">About us</h5>
					<p>Aenean sodales eros ac scelerisque sagittis. Aliquam porta consectetur blandit. Nulla sed augue nisl. Vivamus pulvinar ullamcorper malesuada.</p>
				</div>
				<div class="col-md-3">
					<h5 class="uppercase bold pb20 cwhite titlefont">Services</h5>
					<ul>
						<li><a href="#">Awareness Planning</a></li>
						<li><a href="#">Connected Experiences</a></li>
						<li><a href="#">Mobile Application Development</a></li>
						<li><a href="#">Corporate Branding</a></li>
						<li><a href="#">Social Strategy</a></li>
						<li><a href="#">S.E.O.</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5 class="uppercase bold pb20 cwhite titlefont">Tweets</h5>
					<div id="twitter-feed" class="tweett"></div>
				</div>
				<div class="col-md-3">
					<h5 class="uppercase bold pb20 cwhite titlefont">Newsletter</h5>
					<p>Latest News Straight to your inbox</p>
					<input type="email" class="form-control newsletter" placeholder="Enter email">
					<button type="submit" class="btn newsletterbtn"><i class="icon-mail"></i></button>
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		<div class="separator100dark"></div>
		
		<div class="container ptb30 cwhite">
			<a href="#"><img src="static/images/avision-footer.png" class="w90" alt="avision logo" /></a>
			<div class="socialicons right">
				<ul>
					<li class="blue dgrey"><a href="https://www.facebook.com/EmprendeHub.org" target="_blank"><i class="icon-facebook"></i></a></li>
					<li class="lblue lgrey"><a href="https://twitter.com/emprendehub" target="_blank"><i class="icon-twitter-bird"></i></a></li>
					<li class="orange dgrey"><a href="https://plus.google.com/108155995109406532333" target="_blank"><i class="icon-gplus"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End of Footer -->

	<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>

	<div class="newsletter-ani">
		<div class="circle-obj"></div>
		<div class="circle-obj2"><span class="ti-check"></span></div>
		<div class="circle-obj3 opensans xslim">Subscribed</div>
	</div>

	<!-- Include Footer -->
	<!-- jQuery --> 

	<script type="text/javascript" src="static/js/jquery.js"></script>
	<!-- COMPRESSED -->
	<script type="text/javascript" src="static/js/compressed.js"></script>
	<!-- Parallax & Animations -->
	<script type="text/javascript" src="static/js/animations.js"></script>
	<!-- FUNCTIONS -->
	<script type="text/javascript" src="static/js/functions.js"></script>
	<!-- Including all compiled Bootstrap plugins  --> 
	<script type="text/javascript" src="static/dist/js/bootstrap.min.js"></script>
	<!-- Including all compiled Bootstrap plugins  --> 
	<script type="text/javascript" src="static/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="static/js/jquery.validate.init.js"></script>

</body>
</html>


