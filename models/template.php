<?php


class Template
{

    function draw_header( $Seccion = '', $marcas_filtradas = 0, $busqueda_categorias = 0,$seo= 0)
    {

        //   header('X-Frame-Options: SAMEORIGIN'); // FF 3.6.9+ Chrome 4.1+ IE 8+ Safari 4+ Opera 10.5+
        header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: public");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Pragma: public");
        header('Strict-Transport-Security: max-age=0;');


        ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Luciano Verni" />
        <link rel="icon" type="image/x-icon" href="<?php echo IMGS ?>fav16.ico">  
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo CSS?>bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CSS?>swiper.css" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	<link rel="stylesheet" href="<?php echo CONSTRUCCION?>construction.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo CONSTRUCCION?>css/font-icons.css">        

        <!-- / -->
        

	<link rel="stylesheet" href="<?php echo CSS?>dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CSS?>font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CSS?>one-page/css/et-line.css" type="text/css" />
        
	<link rel="stylesheet" href="<?php echo CSS?>animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo CSS?>magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo CONSTRUCCION?>/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo CSS?>custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="<?php echo CSS?>colors.php?color=F18052" type="text/css" />
	<link rel="stylesheet" href="ws.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Maderas El Aleman</title>

</head>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://www.facebook.com/MADERASELALEMANDEGR" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" target="_blank" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
                                                        <li><a href="https://www.instagram.com/maderaselaleman/" target="_blank" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=541121844813" target="_blank" class="si-whatsapp"><span class="ts-icon"><i class="icon-whatsapp"></i></span><span class="ts-text">WhatsApp</span></a></li>
                                                        
						</ul><!-- #top-social end -->

					</div>

<!--					<div class="col-12 col-md-auto">

						 Top Links
						============================================= 
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#">Locations</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#">San Francisco</a></li>
										<li class="top-links-item"><a href="#">London</a></li>
										<li class="top-links-item"><a href="#">Amsterdam</a></li>
									</ul>
								</li>
								<li class="top-links-item"><a href="faqs.html">FAQs</a></li>
								<li class="top-links-item"><a href="contact.html">Contact</a></li>
							</ul>
						</div> .top-links end 

					</div>-->
				</div>

			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<!-- Logo
					============================================= -->
					<div id="logo" class="ml-auto ml-lg-0 mr-lg-auto">
<!--						<a href="index.html" class="standard-logo"><img src="demos/construction/images/logo.png" alt="Maderas el aleman Logo"></a>
						<a href="index.html" class="retina-logo"><img src="demos/construction/images/logo@2x.png" alt="Maderas el aleman Logo"></a>-->
						<a href="home.html" class="standard-logo"><img src="<?php echo IMGS ?>logos/logocolor.png" alt="Maderas el Aleman"></a>
						<a href="home.html" class="retina-logo"><img src="<?php echo IMGS ?>logos/logoblack.png" alt="Maderas el Aleman"></a>
                                                
					</div><!-- #logo end -->

					<div class="header-misc d-none d-lg-flex">

						<ul class="header-extras">
							<li>
								<i class="i-plain icon-call m-0"></i>
								<div class="he-text">
									Llamanos 
                                                                        <span>(0237) 4860534</span>
                                                                        <span>(011) 21844813</span>
								</div>
							</li>
							<li>
								<i class="i-plain icon-line2-envelope m-0"></i>
								<div class="he-text">
									Email
                                                                        <span><a href="mailto:maderaselaleman@yahoo.com.ar">maderaselaleman@yahoo.com.ar</a></span>
								</div>
							</li>
							<li>
								<i class="i-plain icon-line-clock m-0"></i>
								<div class="he-text">
									Nuestros Horarios
									<span>Lunes - Viernes, 08:00 a 16:30</span>
									<span>Sábados , 08:00 a 12:30</span>
                                                                        
								</div>
							</li>
						</ul>

					</div>

				</div>
			</div>

			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
                                                            <li class="menu-item  <?php if($Seccion == 'home') echo 'current'?>"><a class="menu-link" href="<?php echo HOME?>home.html"><div>Home</div></a></li>
                                                            <li class="menu-item "><a class="menu-link" href="#"><div>Productos</div></a></li>
                                                            <li class="menu-item "><a class="menu-link" href="#"><div>Mercado Pago</div></a></li>
                                                            <li class="menu-item <?php if($Seccion == 'cbu') echo 'current'?>"><a class="menu-link" href="<?php echo HOME?>cbu.html"><div>CBU</div></a></li>
                                                            <li class="menu-item "><a class="menu-link" href="#"><div>Como Comprar</div></a></li>
                                                            <li class="menu-item "><a class="menu-link" href="#"><div>Nosotros</div></a></li>
                                                            <li class="menu-item <?php if($Seccion == 'contactenos') echo 'current'?> "><a class="menu-link" href="<?php echo HOME?>contactenos.html"><div>Consultas</div></a></li>
                                                                
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="" autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
                </header>
        <?php
    }


    function draw_footer($Seccion = '')
    {
        ?>
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
<!--			<div class="container">

				 Footer Widgets
				============================================= 
				<div class="footer-widgets-wrap">

					<div class="row">
						<div class="col-lg-9">
							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

								<div class="line" style="margin: 30px 0;"></div>

								<div class="row col-mb-30">
									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">FAQs</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Shop</a></li>
											<li><a href="#">Portfolio</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Forums</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Restaurant</a></li>
											<li><a href="#">Wedding</a></li>
											<li><a href="#">App Showcase</a></li>
											<li><a href="#">Magazine</a></li>
											<li><a href="#">Landing Page</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<div class="col-lg-3 mt-5 mt-lg-0">
							<div class="widget clearfix">

								<div class="row col-mb-30">
									<div class="col-12">
										<div class="footer-big-contacts">
											<span>Call Us:</span>
											(1) 22 55412474
										</div>
									</div>

									<div class="col-12">
										<div class="footer-big-contacts">
											<span>Send an Email:</span>
											info@canvas.com
										</div>
									</div>
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">

								<div class="row col-mb-30">
									<div class="col-12 col-sm-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
									</div>
									<div class="col-12 col-sm-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div> .footer-widgets-wrap end 
			</div>-->

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-left">
							Copyrights &copy; 2021 All Rights Reserved by Maderas el Aleman.<br>
							<!--<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>-->
						</div>

<!--						<div class="col-12 col-md-auto text-center text-md-right">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>-->
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
          <a href="https://api.whatsapp.com/send?phone=541121844813" class="float" target="_blank">
          <i class="fa fa-whatsapp my-float"></i>
          </a>        
            <br>
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo JS?>jquery.js"></script>
	<script src="<?php echo JS?>plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo JS?>functions.js"></script>

</body>
</html>
        <?php


    }
}

?>
