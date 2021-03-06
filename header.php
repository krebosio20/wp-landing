<!DOCTYPE>
<html>

	<head>
		<title>MarketCrates</title>
		<meta charset="utf-8">
		<!-- Responsiveness -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/main.css">
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	</head>

		<body>
    		<section class="bg">
    		<div class="bg-overlay">

    			<header id="scroll">

    				<div class="menubar">
				  		<?php
		                  wp_nav_menu('theme_location','header-top');
		                ?>
					</div>
					
					<div class="menubar-responsive">
						<input type="radio" id="mostrar-modal" name="modal"/>
						<label for="mostrar-modal" class="mostrar-modal"><i class="fa fa-navicon fa-2x"></i></label>
						<input type="radio" id="cerrar-modal" name="modal"/>
						<label for="cerrar-modal" class="cerrar-modal"><i class="fa fa-close fa-2x"></i></label>
						<div id="modal">
							<?php
			                  wp_nav_menu('theme_location','header-top');
			                ?>
						</div>
					</div>

				</header>

				<div class="container-menu">
					<div class="menu text-right">
						<nav class="SocialMedia">
							<a href="https://instagram.com/marketcratesny" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="https://www.facebook.com/MarketCrates" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="https://twitter.com/marketcratesny" target="_blank"> 
								<i class="fa fa-twitter"></i>
							</a>
							<a href="mailto:info@marketcrates.com">
								<i class="fa fa-envelope-o"></i>
							</a>
						</nav>
						
					</div>
				</div>
				<div class="frase">
					<h4>spread the love!</h4>
				</div>
				
				<section class="banner">
					<div class="row">
						<div id="left" class="col-md-3 col-xs-12 top">
							<div>
								<h3 class="color-white">
									TREAT <br>
									YOUR BODY<br>
									WELL!
								</h3>
							</div>
							<div>
								<h3 class="color-cream">
									Opening<br>
									Soon:	
								</h3>
							</div>
							<div id="mc_embed_signup">
								<form action="//pastpresentfuture.us3.list-manage.com/subscribe/post?u=a8c91fecd277d8167ae2bb298&amp;id=b5b93e790f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">			 
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Sign up with email">
									<button class="button" title="Submit" type="submit" value="Subscribe" id="mc-embedded-subscribe"><i class="fa fa-arrow-right"></i></button>
								</form>
							</div>
							<div>
								<h3 class="text-cream-small">be the first to taste!</h3>
							</div>
						</div>
						<div id="center" class="col-md-6 col-xs-12">
							<img class="img-svg" src="<?php bloginfo('template_url'); ?>/img/MARKETCRATES_Logo_forwebsite.svg">
							<img class="img-no-svg" src="<?php bloginfo('template_url'); ?>/img/market-crates-banner01.png">
						</div>
						<div id="right" class="col-md-3 col-xs-12 top">
							<div>
								<h3 class="color-white">
									<span>YOUR</span>
									<span>healthy</span>
									<span>&amp; tasty</span>
									<span>kitchen in</span>
									<span>the heart</span>
									<span>of NYC</span>
								</h3>
							</div>
							<div class="fechas">
								<div class="fechas__content fecha_one">
									<div class="number"><h3 class="text-number-white">26</h3></div>
									<div class="text"><h4 class="text-top">w</h4></div>
								</div>
								<div class="fechas__content fecha_two">
									<div class="number margin-left-10"><h3 class="text-number-white">33</h3></div>
									<div class="text"><h4 class="text-top">rd</h4></div>
								</div>
							</div>
							<div>
								<a href="https://www.google.com/maps/place/26+W+33rd+St,+New+York,+NY+10001,+USA/@40.7482721,-73.9865728,17z/data=!4m7!1m4!3m3!1s0x89c259a90325a315:0x232e7cb7fefa3227!2s26+W+33rd+St,+New+York,+NY+10001,+USA!3b1!3m1!1s0x89c259a90325a315:0x232e7cb7fefa3227?hl=en" target="_blank">
									<h3 class="text-right-white-small">
										Directions
									</h3>
								</a>
							</div>
						</div>
					</div class="container">
				</section>
    		</div>
            	
    		</section>