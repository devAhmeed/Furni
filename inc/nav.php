<?php
$request = $_SERVER['REQUEST_URI'];
$slug = explode('/', $request)[2];
?>
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						
						<li <?= ($slug == 'home' || $slug == '') ? 'class ="active"' : "" ?>>
							<a class="nav-link" href="home">Home</a>
						</li>
						<li <?= ($slug == 'shop') ? 'class ="active"' : "" ?>><a class="nav-link" href="shop">Shop</a></li>
						<li <?= ($slug == 'about' || $slug == "about-us") ? 'class ="active"' : "" ?>><a class="nav-link" href="about">About us</a></li>
						<li <?= ($slug == 'services') ? 'class ="active"' : "" ?>><a class="nav-link" href="services">Services</a></li>
						<li <?= ($slug == 'blog') ? 'class ="active"' : "" ?>><a class="nav-link" href="blog">Blog</a></li>
						<li <?= ($slug == 'contact') ? 'class ="active"' : "" ?>><a class="nav-link" href="contact">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="assets/images/user.svg"></a></li>
						<li><a class="nav-link" href="cart"><img src="assets/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>