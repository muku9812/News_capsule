<?php 
$title = "Home Page";
require_once "header.php"; 
$sliderNews = $news->getNewsForSlider();
 ?>
	<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
						<div class="item" style="background-image:url(images/news/lifestyle/health5.jpg)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">Health</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#">Netcix cuts out the chill with an integrated personal trainer on running</a>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!--/ Featured post end -->
							
						</div><!-- Item 1 end -->

						<div class="item" style="background-image:url(images/news/tech/gadget2.jpg)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">Gadget</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#">Samsung Gear S3 review: A whimper, when smartwatches need a bang</a>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!--/ Featured post end -->
						</div><!-- Item 2 end -->

						<div class="item" style="background-image:url(images/news/lifestyle/travel5.jpg)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">Travel</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!--/ Featured post end -->
						</div><!-- Item 3 end -->
					</div><!-- Featured owl carousel end-->
				</div><!-- Col 12 end -->

				

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Trending post end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<!--- Featured Tab startet -->
					<div class="featured-tab color-blue">
						<h3 class="block-title"><span>Technology</span></h3>
						<ul class="nav nav-tabs">
						  	<li>
						  		<a class="active animated fadeIn" href="#tab_a" data-toggle="tab">
						  			<span class="tab-head">
										<span class="tab-text-title">Gadgets</span>					
									</span>
						  		</a>
						  	</li>
						  	<li>
							  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Games</span>					
									</span>
							  	</a>
							</li>
						 	<li>
							  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Robotics</span>					
									</span>
							  	</a>
							</li>
						</ul>

						<div class="tab-content">
					      <div class="tab-pane active animated fadeInRight" id="tab_a">
					      	<div class="row">
						      	<div class="col-md-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Gadgets</a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 24, 2017</span>
									 			</div>
									 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

						      	<div class="col-md-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Samsung Gear S3 review: A whimper, when smartwatches need a bang</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's dream</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Jan 11, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 2 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/gadget4.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 19, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 3 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/gadget5.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Google Assistant starts calling out to all recent Android phones</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 27, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 4 end -->
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 1 end -->
					      </div><!-- Tab pane 1 end -->

				        	<div class="tab-pane animated fadeInRight" id="tab_b">
					        	<div class="row">
						      	<div class="col-md-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/game1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Games</a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Historical heroes and robot dinosaurs: New games on our... </a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 24, 2017</span>
									 			</div>
									 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

						      	<div class="col-md-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/game2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Lindie game plonks players in front of huge starship command cent…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/game3.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Meet Twitch: Mintendo’s new console mixes handheld and console…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Jan 11, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 2 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/game4.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 19, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 3 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/game5.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Oazer and Lacon bring eSport expertise to new PS4 controller…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 27, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 4 end -->
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 2 end -->
				       	</div><!-- Tab pane 2 end -->

				        	<div class="tab-pane animated fadeInLeft" id="tab_c">

								<div class="row">
						      	<div class="col-md-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/robot1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Robotics</a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">There's no escaping Watsone Dynamics' wheeled jumping robot</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 24, 2017</span>
									 			</div>
									 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

						      	<div class="col-md-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/robot2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Robot Life on Mars! Meet the Machines Exploring the Red Planet To…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/robot3.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Amaging China mech suit aims to assist with Lukushima cleanup</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Jan 11, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 2 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/robot4.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Taddler robot provides insights into early childhood learning</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 19, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 3 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 27, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 4 end -->
											</ul><!-- List post end -->

										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 3 end -->
				        	</div><!-- Tab pane 3 end -->	
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>

					<div class="block color-orange">
						<h3 class="block-title"><span>Lifestyle</span></h3>

						<div class="row">
							<div class="col-md-6">
								<div class="post-overaly-style clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/lifestyle/travel1.jpg" alt="" />
										</a>
									</div>
									
									<div class="post-content">
							 			<a class="post-cat" href="#">Travel</a>
							 			<h2 class="post-title">
							 				<a href="#">10 Hdrenaline fuelled activities that will chase the post...</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-date">Mar 03, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->

								<div class="list-post-block">
									<ul class="list-post">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Food</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how to make </a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 13, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/health1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Health</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">That wearable on your wrist could soon track your health as well…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Jan 11, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 2 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/travel2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Travel</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Early tourists choices to the sea of Maldives in fancy dresses an…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Feb 19, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 3 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/architecture2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Architecture</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Science meets architecture in robotically coven, solar-active str…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Jan 07, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->
							</div><!-- Col 1 end -->

							<div class="col-md-6">
								<div class="post-overaly-style last clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/lifestyle/architecture3.jpg" alt="" />
										</a>
									</div>
									
									<div class="post-content">
							 			<a class="post-cat" href="#">Architecture</a>
							 			<h2 class="post-title">
							 				<a href="#">The bedroom keys to Bond villain chic: The best houses of 2017</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-date">Feb 06, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->

								<div class="list-post-block">
									<ul class="list-post">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/health2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Health</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Can't shed those Gym? The problem might be in your health</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 13, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/food2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Food</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Asia's best restaurant has a frustratingly confusing menu of only…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 07, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 2 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/architecture1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Architecture</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Science meets architecture in robotically woven, s…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 01, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 3 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Travel</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Hynopedia helps female travelers find health …</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Feb 27, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->
							</div><!-- Col 2 end -->
						</div><!-- Row end -->
					</div><!-- Block Lifestyle end -->

					<div class="gap-50"></div>

					<div class="latest-news block color-red">
						<h3 class="block-title"><span>Latest News</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<div class="item">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/lifestyle/health5.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Health</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Netcix cuts out the chill with an integrated...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/lifestyle/travel4.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Travel</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">19 incredible photos from Disney's 'Star Wars…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Mar 09, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->

							<div class="item">

								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Travel</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Hynopedia helps female travelers find health …</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Mar 12, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Health</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Samsung Gear S3 review: A whimper, when...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 17, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 2 end -->
								
							</div><!-- Item 2 end -->

							<div class="item">

								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Gadget</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Samsung Gear S3 review: A whimper, when...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 18, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#"><img class="img-fluid" src="images/news/lifestyle/architecture3.jpg" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Architecture</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">The bedroom keys to Bond villain chic: The be…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 12, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 3 end -->
								
							</div><!-- Item 3 end -->

							<div class="item">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/food3.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Food</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">You can now get paid to shove chocolate coffe…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 16, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/game1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Games</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Historical heroes and robot dinosaurs: New...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 06, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 4 end -->
								
							</div><!-- Item 4 end -->
						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="block-title"><span>Follow Us</span></h3>

							<ul class="social-icon">
								<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div><!-- Widget Social end -->

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" />
									</a>
								</div>
								
								<div class="post-content">
						 			<a class="post-cat" href="#">Health</a>
						 			<h2 class="post-title">
						 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
						 			</h2>
						 			<div class="post-meta">
						 				<span class="post-date">Feb 06, 2017</span>
						 			</div>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->


							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Gadgets</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Mar 13, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Travel</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Hynopedia helps female travelers find health care...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Jan 11, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Robotics</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Robots in hospitals can be quite handy to navigate around...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Food</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 27, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 4 end -->

								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->

						<div class="widget color-default m-bottom-0">
							<h3 class="block-title"><span>Trending News</span></h3>

							<div id="post-slide" class="owl-carousel owl-theme post-slide">
								<div class="item">
									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Gadgets</a>
									      <h2 class="post-title">
									         <a href="#">The best MacBook Pro alternatives in 2017 for Appl…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Feb 06, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 1 end -->

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/video/video1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Video</a>
									      <h2 class="post-title">
									         <a href="#">KJerry's will sell food cream that tastes like you…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Jan 09, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 2 end -->

								</div><!-- Item 1 end -->

								<div class="item">

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/lifestyle/health5.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Health</a>
									      <h2 class="post-title">
									         <a href="#">Netcix cuts out the chill with an integrated perso…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Feb 06, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 3 end -->

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/tech/robot1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Robotics</a>
									      <h2 class="post-title">
									         <a href="#">There's no escaping Watsone Dynamics' wheeled...</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Jan 15, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 4 end -->

								</div><!-- Item 2 end -->

							</div><!-- Post slide carousel end -->

						</div><!-- Trending news end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="images/banner-ads/ad-content-one.jpg" alt="" />
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content top end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-12">
					<div class="block color-dark-blue">
						<h3 class="block-title"><span>Travel</span></h3>
						<div class="post-overaly-style clearfix">
							<div class="post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/lifestyle/travel1.jpg" alt="" />
								</a>
							</div>
							
							<div class="post-content">
					 			<h2 class="post-title">
					 				<a href="#">10 Hdrenaline fuelled activities that will chase the…</a>
					 			</h2>
					 			<div class="post-meta">
					 				<span class="post-date">Mar 03, 2017</span>
					 			</div>
				 			</div><!-- Post content end -->
						</div><!-- Post Overaly Article end -->

						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/travel2.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Early tourists choices to the sea of Maldives in fancy dress…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/travel3.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">This Aeroplane that looks like a butt is the largest aircraf…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/travel4.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">19 incredible photos from Disney's 'Star Wars' cruise algore</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->
							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Block end -->
				</div><!-- Travel Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="block color-aqua">
						<h3 class="block-title"><span>Gadgets</span></h3>
						<div class="post-overaly-style clearfix">
							<div class="post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" />
								</a>
							</div>
							
							<div class="post-content">
					 			<h2 class="post-title">
					 				<a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
					 			</h2>
					 			<div class="post-meta">
					 				<span class="post-date">Mar 03, 2017</span>
					 			</div>
				 			</div><!-- Post content end -->
						</div><!-- Post Overaly Article end -->

						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Samsung Gear S3 review: A whimper, when smartwatches need...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/tech/gadget4.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Soaring through Southern Patagonia with the Premium Byrd dro…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->
							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Block end -->
				</div><!-- Gadget Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="block color-violet">
						<h3 class="block-title"><span>Health</span></h3>
						<div class="post-overaly-style clearfix">
							<div class="post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/lifestyle/health1.jpg" alt="" />
								</a>
							</div>
							
							<div class="post-content">
					 			<h2 class="post-title">
					 				<a href="#">That wearable on your wrist could soon track your health as …</a>
					 			</h2>
					 			<div class="post-meta">
					 				<span class="post-date">Mar 03, 2017</span>
					 			</div>
				 			</div><!-- Post content end -->
						</div><!-- Post Overaly Article end -->

						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/health2.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Can't shed those Gym? The problem might be in your health</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/health3.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Deleting fears from the brain means you might never need to …</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Smart packs parking sensor tech and beeps when collisions</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->
							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Block end -->
				</div><!-- Health Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 2nd block end -->

	<section class="block-wrapper video-block">
		<div class="container">
			<div class="row">
				<div class="video-tab clearfix">
					<h2 class="video-tab-title">Watch Now</h2>
					<div class="row">
					<div class="col-lg-7 pad-r-0">
						<div class="tab-content">
							<div class="tab-pane active animated fadeIn" id="video1">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
										<img class="img-fluid" src="images/news/video/video4.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#">Video</a>
								      <h2 class="post-title">
								         <a href="#">Is Running Good for You, Health Benefits of Morning Running</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->
							</div><!--Tab pane 1 end-->

							<div class="tab-pane animated fadeIn" id="video2">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
								      <img class="img-fluid" src="images/news/video/video3.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#">Video</a>
								      <h2 class="post-title title-medium">
								         <a href="#">Breeze through 17 locations in Europe in this breathtaking video</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 2 end -->
							</div><!--Tab pane 2 end-->

							<div class="tab-pane animated fadeIn" id="video3">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
								      <img class="img-fluid" src="images/news/video/video2.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#">Video</a>
								      <h2 class="post-title title-medium">
								         <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 2 end -->
							</div><!--Tab pane 2 end-->
							

						</div><!-- Tab content end -->
					</div><!--Tab col end -->

					<div class="col-lg-5 pad-l-0">
						<ul class="nav nav-tabs">
						  	<li class="nav-item active">
						  		<a class="nav-link animated fadeIn" href="#video1" data-toggle="tab">
						  			<div class="post-thumb">
								        <img class="img-fluid" src="images/news/video/video4.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>Is Running Good for You, Health Benefits of Morning Running</h3>
						  		</a>
						  	</li>
						  	<li class="nav-item">
							  	<a class="nav-link animated fadeIn" href="#video2" data-toggle="tab">
							  		<div class="post-thumb">
								      <img class="img-fluid" src="images/news/video/video3.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>Breeze through 17 locations in Europe in this breathtaking video</h3>
							  	</a>
							</li>
						 	<li class="nav-item">
							  	<a class="nav-link animated fadeIn" href="#video3" data-toggle="tab">
							  		<div class="post-thumb">
								      <img class="img-fluid" src="images/news/video/video2.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>TG G6 will have dual 13-megapixel cameras on the back</h3>
							  	</a>
							</li>
						</ul>
					</div><!--Tab nav col end -->

					</div>
				</div><!-- Video tab end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Video block end -->



	<section class="block-wrapper p-bottom-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="more-news block color-default">
						<h3 class="block-title"><span>More News</span></h3>

						<div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
							<div class="item">
								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/video/video1.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Video</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">KJerry's will sell food cream that tastes like your favorite video</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Mar 29, 2017</span>
							 			</div>
							 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 1 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/game5.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Games</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Oazer and Lacon bring eSport expertise to new PS4 controllers</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Mar 27, 2017</span>
							 			</div>
							 			<p>Pityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of he...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 2 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/game4.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Games</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 24, 2017</span>
							 			</div>
							 			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 3 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Robotics</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 24, 2017</span>
							 			</div>
							 			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 4 end -->
							</div><!-- Item 1 end -->

							<div class="item">
								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/video/video2.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Video</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Mar 29, 2017</span>
							 			</div>
							 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 5 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/video/video3.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Video</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Breeze through 17 locations in Europe in this breathtaking v…</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Mar 31, 2017</span>
							 			</div>
							 			<p>Pityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of he...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 6 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/lifestyle/architecture1.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Architecture</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Science meets architecture in robotically woven, solar...</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Mar 23, 2017</span>
							 			</div>
							 			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 7 end -->

								<div class="gap-30"></div>

								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/game1.jpg" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#">Robotics</a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="#">Historical heroes and robot dinosaurs: New games on our…</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 24, 2017</span>
							 			</div>
							 			<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 8 end -->
							</div><!-- Item 2 end -->
							
						</div><!-- More news carousel end -->
					</div><!--More news block end -->
				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">

						<div class="widget color-default">
							<h3 class="block-title"><span>Latest Reviews</span></h3>
							<div class="list-post-block">
								<ul class="list-post review-post-list">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/review/review1.jpg" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Topical Resorts you need to know</a>
									 			</h2>
									 			<div class="post-meta">
									 				<div class="review-stars">
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star-half-o"></i>
									 					<i class="fa fa-star-o"></i>
									 				</div>
									 			</div><!-- Post meta end -->
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/review/review2.jpg" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Apple - MacBook Pro with Retina display</a>
									 			</h2>
									 			<div class="post-meta">
									 				<div class="review-stars">
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star-half-o"></i>
									 				</div>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/review/review3.jpg" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Asus ZenPad 3S 10 Z500M</a>
									 			</h2>
									 			<div class="post-meta">
									 				<div class="review-stars">
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star-o"></i>
									 					<i class="fa fa-star-o"></i>
									 				</div>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/review/review4.jpg" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Polar M600 GPS Smart Sports Watch</a>
									 			</h2>
									 			<div class="post-meta">
									 				<div class="review-stars">
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star"></i>
									 					<i class="fa fa-star-half-o"></i>
									 					<i class="fa fa-star-o"></i>
									 					<i class="fa fa-star-o"></i>
									 				</div>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 4 end -->

								</ul><!-- List post end -->
							</div><!-- List post block end -->
						</div><!-- Latest Review Widget end -->

						<div class="widget m-bottom-0">
							<h3 class="block-title"><span>Newsletter</span></h3>
							<div class="ts-newsletter">
								<div class="newsletter-introtext">
									<h4>Get Updates</h4>
									<p>Subscribe our newsletter to get the best stories into your inbox!</p>
								</div>

								<div class="newsletter-form">
									<form action="#" method="post">
										<div class="form-group">
											<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
											<button class="btn btn-primary">Subscribe</button>
										</div>
									</form>
								</div>
							</div><!-- Newsletter end -->
						</div><!-- Newsletter widget end -->
					</div><!--Sidebar right end -->
				</div><!-- Sidebar col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 3rd block end -->

	<section class="ad-content-area text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<img class="img-fluid" src="images/banner-ads/ad-content-two.png" alt="" />
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content two end -->

	<?php require_once "footer.php";