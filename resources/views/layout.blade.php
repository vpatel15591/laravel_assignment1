<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header">
					
					<!-- Logo -->
						<h1><a href="home">Dopetrope</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
                            <li class="current"><a href="{{url('/')}}">Home</a></li>
								<li>
									<a href="">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
												<li><a href="#">Nisl sed aliquam</a></li>
												<li><a href="#">Dolore adipiscing</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="{{url('leftsidebar')}}">Left Sidebar</a></li>
                                <li><a href="{{url('rightsidebar')}}">Right Sidebar</a></li>
								{{-- <li><a href="no-sidebar.html">No Sidebar</a></li> --}}
							</ul>
						</nav>
                        @yield('content')
					</div>
			</div>

        @yield('home_portfoio')
        
        @yield('left')

        @yield('right')

		<!-- Footer -->
			<div id="footer-wrapper">
				<section id="footer" class="container">
					<div class="row">
						<div class="8u">
							<section>
								<header>
									<h2>Blandit nisl adipiscing</h2>
								</header>
								<ul class="dates">
									<li>
										<span class="date">Jan <strong>27</strong></span>
										<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
										<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
									</li>
									<li>
										<span class="date">Jan <strong>23</strong></span>
										<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
										<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
									</li>
									<li>
										<span class="date">Jan <strong>15</strong></span>
										<h3><a href="#">Magna tempus lorem feugiat</a></h3>
										<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
									</li>
									<li>
										<span class="date">Jan <strong>12</strong></span>
										<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
										<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
									</li>
									<li>
										<span class="date">Jan <strong>10</strong></span>
										<h3><a href="#">Blandit tempus aliquam?</a></h3>
										<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
									</li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>What's this all about?</h2>
								</header>
								<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
								<p>
									This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by 
									<a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
									the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
								</p>
								<footer>
									<a href="#" class="button">Find out more</a>
								</footer>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="4u">
							<section>
								<header>
									<h2>Tempus consequat</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Ipsum et phasellus</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Vitae tempor lorem</h2>
								</header>
								<ul class="social">
									<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
									<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
									<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
									<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
									<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
								</ul>
								<ul class="contact">
									<li>
										<h3>Address</h3>
										<p>
											Untitled Incorporated<br />
											1234 Somewhere Road Suite<br />
											Nashville, TN 00000-0000
										</p>
									</li>
									<li>
										<h3>Mail</h3>
										<p><a href="#">someone@untitled.tld</a></p>
									</li>
									<li>
										<h3>Phone</h3>
										<p>(800) 000-0000</p>
									</li>
								</ul>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="12u">
						
							<!-- Copyright -->
								<div id="copyright">
									<ul class="links">
										<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>

						</div>
					</div>
				</section>
			</div>

	</body>
</html>