<div class="container">
		<div class="row">  

			<!-- Main Container -->
			<div id="main-container"  class="main-container pull-right" > 

				<!-- Top Section -->
				<section id="top-section" class="parallax-style">
					<div class="top-section overlay-normal">  
						<div id="top-carousel" class="carousel slide top-carousel-container" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#top-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#top-carousel" data-slide-to="1"></li>
								<li data-target="#top-carousel" data-slide-to="2"></li>
							</ol><!-- /.carousel-indicators -->
							<div class="carousel-inner">
								<div class="item active">
									<h3 class="top-heading-1"> Embrace With </h3> 
									<h3 class="top-heading-2"> Foody Love  </h3>
									<h3 class="top-heading-3"> The perfect place for food lover. </h3> 
									<div class="btn-container">
										<a href="#" class="btn btn-sm btn-light-green">Learn More</a>
									</div><!-- /.btn-container -->
								</div><!-- /.item -->

								<div class="item"> 
									<h3 class="top-heading-1"> Cheer up With</h3> 
									<h3 class="top-heading-2"> Real Time Test </h3>
									<h3 class="top-heading-3"> The perfect Test for food lover. </h3> 
									<div class="btn-container">
										<a href="#" class="btn btn-sm btn-light-green">Learn More</a>
									</div><!-- /.btn-container -->
								</div><!-- /.item -->

								<div class="item"> 
									<h3 class="top-heading-1">Enjoy With </h3> 
									<h3 class="top-heading-2"> Friend &amp; Family </h3>
									<h3 class="top-heading-3"> The perfect place for Enjoyment.</h3> 
									<div class="btn-container">
										<a href="#" class="btn btn-sm btn-light-green">Learn More</a>
									</div><!-- /.btn-container -->
								</div><!-- /.item -->

							</div><!-- /.carousel-inner -->

							<a class="slide-nav left" href="#top-carousel" data-slide="prev">
								<span class="nav-icon"><i class="fa fa-chevron-left"></i></span>
							</a><!-- /.slide-nav.left -->
							<a class="slide-nav right" href="#top-carousel" data-slide="next">
								<span class="nav-icon"><i class="fa fa-chevron-right"></i></span>
							</a><!-- /.slide-nav.right -->

						</div><!-- /#top-carousel /.top-carousel-container -->
						<div id="next-section" class="next-section">
							<span class="go-to-next">
								<i class="fa fa-angle-double-down"></i>
							</span>
						</div><!-- /.next-section -->
					</div><!-- /.top-section -->
				</section><!-- /#top-section -->
				<!-- Top Section End -->




				<!-- Welcome Section --> 
				<section id="welcome">
					<div class="welcome-section section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Welcome</h2>
						</div><!-- /.section-title-container -->

						<div class="row">
							<div id="welcome-slider"  class="owl-carousel owl-theme"> 
								<div class="item col-xs-12">
									<div class="welcome-post wow fadeIn animated" data-wow-delay="0.1s">
										<div class="hex welcome-hex">
											<span class="hex-icon">
												<i class="fa fa-glass"></i>
											</span><!-- /.hex-icon -->
										</div><!-- /.welcome-hex -->
										<h3 class="welcome-title"> Delicious Food </h3> 
										<p class="welcome-texts">
											Oreo Cookie Pancakes, Mac ‘n’ Cheese Burger, Fried Nutella Banana Hand Pies,Bacon- Egg and Cheese Eggo Waffle Sandwich and delicious food available.
										</p><!-- /.welcome-texts -->
									</div><!-- /.welcome-post -->
								</div><!-- /.item -->


								<div class="item col-xs-12">
									<div class="welcome-post wow fadeIn animated" data-wow-delay="0.2s">
										<div class="hex welcome-hex">
											<span class="hex-icon">
												<i class="fa fa-birthday-cake"></i>
											</span><!-- /.hex-icon -->
										</div><!-- /.welcome-hex -->
										<h3 class="welcome-title"> Great Taste </h3>
										<p class="welcome-texts">
											Having a well-educated staff and customer flow are important elements when launching a flexible-format service model. We work together and try out best.
										</p><!-- /.welcome-texts -->
									</div><!-- /.welcome-post -->							
								</div><!-- /.item -->


								<div class="item col-xs-12">
									<div class="welcome-post wow fadeIn animated" data-wow-delay="0.3s">
										<div class="hex welcome-hex">
											<span class="hex-icon">
												<i class="fa fa-thumbs-o-up"></i>
											</span><!-- /.hex-icon -->
										</div><!-- /.welcome-hex -->
										<h3 class="welcome-title"> TopClass Service </h3> 
										<p class="welcome-texts">
											Having a well-educated staff and customer flow are important elements when launching a flexible-format service model. We work together and try out best. 
										</p><!-- /.welcome-texts -->
									</div><!-- /.welcome-post -->
								</div><!-- /.item -->
							</div><!-- /#welcome-slider --> 
						</div><!-- /.row -->

						<div class="best-deal">
							<img src="images/welcome/foods-in-tray.jpg" alt="Foods Image" class="foods-img">
							<div class="best-deal-content">
								<div class="row">
									<div class="col-sm-6 pull-right">
										<h3 class="deal-txt-1"> Best Deal </h3>
										<h3 class="deal-txt-2"> Chicken Fry + Beef Grills  </h3>
										<h4 class="deal-txt-3"> Only @ <span>$25</span> </h4>
									</div><!-- /.col-sm-6 -->
								</div><!-- /.row -->
							</div><!-- /.best-deal-content -->
						</div><!-- /.best-deal -->

					</div><!-- /.welcome-section -->
				</section><!-- /#welcome -->
				<!-- Welcome Section End --> 




				<!-- Our Menus -->
				<section id="our-menus">
					<div class="our-menu section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Our Menus</h2>
						</div><!-- /.section-title-container -->

						<div class="row">
						<?php foreach ($menu_data as $key => $value) : ?>
							<div class="col-sm-6">
								<article class="menus-container wow fadeIn animated" data-wow-delay="0.1s">
									<div class="featured-img">
										<img src="/images/menus/breakfast.jpg" alt="Breakfast Menus Image">
										<a href="/images/menus/breakfast-big.jpg" class="boxer img-link"></a>
									</div><!-- /.featured-img -->
									<h4 class="item-title"><?php if(isset($value['slug'])){echo '<a href="/menu/'.$value['slug'].'">';} ?> <?php echo $value['name']; if(isset($value['slug'])){echo "</a>"; }?></h4>
									<div class="item-entry">
										<p>
                                        <?php echo $value['des']; ?>
										</p>
									</div><!-- /.item-entry -->
								</article><!-- /.menus-container -->
							</div><!-- /.col-sm-6 -->

                            <?php endforeach ?>

						</div><!-- /.row -->
						<div class="btn-container">
							<a href="/menu/category" class="btn btn-sm btn-orange">See Full Menu</a>
						</div><!-- /.btn-container -->

					</div><!-- /.our-menu -->
				</section><!-- /#our-menus -->
				<!-- Our Menus End -->




				<!-- Book Table -->
				<section id="book-table" class="parallax-style">
					<div class="book-table overlay-light section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Book your table </h2>
						</div><!-- /.section-title-container -->

						<div class="choose-table">
							<form action="#" method="post" class="choose-table-form">
								<div class="col-sm-4 form-item"> 
									<select class="form-control">
										<option value="">Select Dining Space</option>
										<option value="space-1">Space-1</option>
										<option value="space-2">Space-2</option>
										<option value="space-3">Space-3</option>
										<option value="space-4">Space-4</option>
										<option value="space-5">Space-5</option>
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<select class="form-control">
										<option value="">Select Occasion</option>
										<option value="occasion-1">Occasion-1</option>
										<option value="occasion-2">Occasion-2</option>
										<option value="occasion-3">Occasion-3</option>
										<option value="occasion-4">Occasion-4</option>
										<option value="occasion-5">Occasion-5</option> 
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<select class="form-control">
										<option value="">Select Preferred Food</option>
										<option value="food-item-1">food-item-1</option>
										<option value="food-item-2">food-item-2</option>
										<option value="food-item-3">food-item-3</option>
										<option value="food-item-4">food-item-4</option>
										<option value="food-item-5">food-item-5</option>
									</select><!-- /.form-control -->
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="clients_name" id="clients_name" placeholder="Your Name" required> 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="clients_phone" id="clients_phone" placeholder="Your Phone" required> 	
								</div><!-- /.form-item -->

								<div class="col-sm-4 form-item"> 
									<input type="text" class="form-control" name="clients_email" id="clients_email" placeholder="Email Address" required> 	
								</div><!-- /.form-item -->
								<div class="btn-container">
									<button type="submit" class="btn btn-sm btn-light-green">Book Table Now</button>
								</div><!-- /.btn-container -->

							</form><!-- /.choose-table-form -->
						</div><!-- /.choose-table --> 
					</div><!-- /.book-table -->
				</section><!-- /#book-table -->
				<!-- Book Table  End -->



				<!-- Events -->
				<section id="events">
					<div class="events section-padding"> 
						<div class="section-title-container">
							<h2 class="section-title">Events </h2>
						</div><!-- /.section-title-container -->
						<div class="event-container">
							<div class="row">
								<div class="col-sm-6">
									<div class="event-item wow fadeIn animated" data-wow-delay="0.1s">
										<div class="event-img">
											<img src="images/event/event-1.jpg" alt="Event 1">
										</div><!-- /.event-img -->
										<div class="event-time">
											<span class="event-month">September</span>
											<span class="event-date">23</span>
											<span class="event-year">2014</span>
										</div><!-- /.event-time -->
										<h3 class="event-title">Valentine's Day Special</h3>
										<div class="event-place">
											<strong>Place:</strong>1612 Collins Street West, Victoria 8007 Australia.
										</div>
										<div class="event-time-h"><strong>Time:</strong>7:30pm </div>
									</div><!-- /.event-item -->
								</div>

								<div class="col-sm-6">
									<div class="event-item wow fadeIn animated" data-wow-delay="0.2s">
										<div class="event-img">
											<img src="images/event/event-2.jpg" alt="Event 1">
										</div><!-- /.event-img -->
										<div class="event-time">
											<span class="event-month">September</span>
											<span class="event-date">23</span>
											<span class="event-year">2014</span>
										</div><!-- /.event-time -->
										<h3 class="event-title">New Year Special</h3>
										<div class="event-place">
											<strong>Place:</strong>1612 Collins Street West, Victoria 8007 Australia.
										</div>
										<div class="event-time-h"><strong>Time:</strong>7:30pm </div>
									</div><!-- /.event-item -->
								</div>

								<div class="col-sm-6">
									<div class="event-item wow fadeIn animated" data-wow-delay="0.1s">
										<div class="event-img">
											<img src="images/event/event-3.jpg" alt="Event 1">
										</div><!-- /.event-img -->
										<div class="event-time">
											<span class="event-month">September</span>
											<span class="event-date">23</span>
											<span class="event-year">2014</span>
										</div><!-- /.event-time -->
										<h3 class="event-title">Autumn Special</h3>
										<div class="event-place">
											<strong>Place:</strong>1612 Collins Street West, Victoria 8007 Australia.
										</div>
										<div class="event-time-h"><strong>Time:</strong>7:30pm </div>
									</div><!-- /.event-item -->
								</div>

								<div class="col-sm-6">
									<div class="event-item wow fadeIn animated" data-wow-delay="0.2s">
										<div class="event-img">
											<img src="images/event/event-4.jpg" alt="Event 1">
										</div><!-- /.event-img -->
										<div class="event-time">
											<span class="event-month">September</span>
											<span class="event-date">23</span>
											<span class="event-year">2014</span>
										</div><!-- /.event-time -->
										<h3 class="event-title">Summer Special</h3>
										<div class="event-place">
											<strong>Place:</strong>1612 Collins Street West, Victoria 8007 Australia.
										</div>
										<div class="event-time-h"><strong>Time:</strong>7:30pm </div>
									</div><!-- /.event-item -->
								</div>
							</div><!-- /.row --> 
						</div><!-- /.event-container -->
					</div><!-- /.events -->
				</section><!-- /#event -->
				<!-- Events End -->




				<!-- Mobile App Section --> 
				<section id="mobile-app" class="parallax-style">
					<div class="mobile-app overlay-normal section-padding">
						<div class="row">
							<div class="col-sm-5">
								<div class="mobile-container wow fadeIn animated" data-wow-delay="0.1s">
									<img class="mobile-img" src="images/mobile-app/mobile.png" alt="Mobile">
								</div><!-- /.mobile-containe -->
							</div><!-- /.col-sm-5 -->

							<div class="col-sm-7">
								<h2 class="apps-title">
									Happy to Announce
									<span>Mobile App</span>
									is Available in every os platform. 
								</h2><!-- /.apps-title -->
								<div class="btn-container">
									<a href="#" class="btn btn-sm btn-light-green">Download Now</a>
								</div><!-- /.btn-container -->
							</div><!-- /.col-sm-7 --> 
						</div><!-- /.row --> 
					</div><!-- /.mobile-app -->
				</section><!-- /#mobile-app -->
				<!-- Mobile App Section End -->



				<!-- Our Blog Section -->
				<section id="blog">
					<div class="blog-section section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Our Blog </h2>
						</div><!-- /.section-title-container -->

						<div class="blog-post-container">
							<div class="row">
								<div class="col-sm-6">
									<article class="post-content wow fadeIn" data-wow-delay=".1s">
										<div class="post-meta"> 
											<div class="entry-meta">
												<div class="entry-date"> 
													<span class="date">23</span>
													<span class="month">Oct</span>
												</div> 
											</div><!-- /.entry-meta -->
										</div><!-- /.post-meta -->
										<div class="featured-img">
											<img class="blog-post-image" src="images/blog/image-1.jpg" alt="Blog Post Image">
											<a href="images/blog/big-image.jpg" class="boxer img-link"></a>
										</div><!-- /.featured-img -->
										<div class="post-container">
											<h2 class="post-title">
												<a href="single-page.html">We provide safe food with delicious menu</a>
											</h2><!-- /.post-title -->
											<p class="post-description">
												When we cook, we not only take on the responsibility of making a delicious meal, but also of ensuring that the food we serve is safe to eat. We always try to keep a clean and delicious menu.
											</p>
											<div class="continue-reading pull-left">
												<a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i>  </a>
											</div><!-- /.continue-reading --> 
										</div><!-- /.post-container -->
									</article><!-- /.post-content --> 
								</div><!-- /.col-sm-6 -->

								<div class="col-sm-6">
									<article class="post-content wow fadeIn" data-wow-delay=".2s">
										<div class="post-meta"> 
											<div class="entry-meta">
												<div class="entry-date"> 
													<span class="date">12</span>
													<span class="month">Oct</span>
												</div> 
											</div><!-- /.entry-meta -->
										</div><!-- /.post-meta -->
										<div class="featured-img">
											<img class="blog-post-image" src="images/blog/image-2.jpg" alt="Blog Post Image">
											<a href="images/blog/big-image.jpg" class="boxer img-link"></a>
										</div><!-- /.featured-img -->
										<div class="post-container">
											<h2 class="post-title">
												<a href="single-page.html">Eggs are most important for breakfast</a>
											</h2><!-- /.post-title -->
											<p class="post-description">
												Eggs are one of the most versatile and important foods on earth and a popular breakfast item in many cultures. Cooking eggs properly can make awesome test on your breakfast and it’s love to all.
											</p>
											<div class="continue-reading pull-left">
												<a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i>  </a>
											</div><!-- /.continue-reading --> 
										</div><!-- /.post-container -->
									</article><!-- /.post-content --> 
								</div><!-- /.col-sm-6 -->

								<div class="col-sm-6">
									<article class="post-content wow fadeIn" data-wow-delay=".1s">
										<div class="post-meta"> 
											<div class="entry-meta">
												<div class="entry-date"> 
													<span class="date">29</span>
													<span class="month">Sep</span>
												</div> 
											</div><!-- /.entry-meta -->
										</div><!-- /.post-meta -->
										<div class="featured-img">
											<img class="blog-post-image" src="images/blog/image-3.jpg" alt="Blog Post Image">
											<a href="images/blog/big-image.jpg" class="boxer img-link"></a>
										</div><!-- /.featured-img -->
										<div class="post-container">
											<h2 class="post-title">
												<a href="single-page.html">We know how to cook &amp; make better Pasta</a>
											</h2><!-- /.post-title -->
											<p class="post-description">
												Dumping noodles into water with powdered cheese doesn’t mean cooking pasta. Pasta can be light, delicate and incredibly flavorful by it’s cooking. You may be become a pasta lover with our cook item.
											</p>
											<div class="continue-reading pull-left">
												<a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i>  </a>
											</div><!-- /.continue-reading --> 
										</div><!-- /.post-container -->
									</article><!-- /.post-content --> 
								</div><!-- /.col-sm-6 -->

								<div class="col-sm-6">
									<article class="post-content wow fadeIn" data-wow-delay=".2s">
										<div class="post-meta"> 
											<div class="entry-meta">
												<div class="entry-date"> 
													<span class="date">23</span>
													<span class="month">Sep</span>
												</div> 
											</div><!-- /.entry-meta -->
										</div><!-- /.post-meta -->
										<div class="featured-img">
											<img class="blog-post-image" src="images/blog/image-4.jpg" alt="Blog Post Image">
											<a href="images/blog/big-image.jpg" class="boxer img-link"></a>
										</div><!-- /.featured-img -->
										<div class="post-container">
											<h2 class="post-title">
												<a href="single-page.html">Do you know Vegetables are most important?</a>
											</h2><!-- /.post-title -->
											<p class="post-description">
												Some people think that Vegetables can not provide better delicious food into our menu item. We provide better cook vegetables and make it delicious for all. Cooking methods can improve it only.
											</p>
											<div class="continue-reading pull-left">
												<a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i>  </a>
											</div><!-- /.continue-reading --> 
										</div><!-- /.post-container -->
									</article><!-- /.post-content --> 
								</div><!-- /.col-sm-6 -->
							</div><!-- /.row -->

							<div class="btn-container">
								<a href="blog-page.html" class="btn btn-sm btn-orange"> View All Posts </a>
							</div><!-- /.btn-container -->

						</div><!-- /.blog-post-container --> 
					</div><!-- /.blog -->
				</section><!-- /#blog -->
				<!-- Our Blog Section End --> 



				
				<!-- Testimonial Section -->
				<section id="testimonial" class="parallax-style">
					<div class="testimonial overlay-normal section-padding">
						<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#testimonial-carousel" data-slide-to="1" class=""></li>
								<li data-target="#testimonial-carousel" data-slide-to="2" class=""></li>
							</ol><!-- /.carousel-indicators -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="testimonial-figure">
										<div class="author-avatar">
											<img class="img-circle" src="images/testimonial-carousel/01.png" alt="carousel image">
										</div><!-- /.author-avatar --> 
										<div class="authors-review">
											<p class="author-says">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quam consectetur deserunt delectus, maxime natus aperiam libero molestiae beatae
											</p><!-- /.author-says -->
											<div class="given-stars">
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star-half-o"></i></span>
											</div><!-- /.given-stars --> 
											<div class="author-and-ulr">
												<h4 class="author-name"> Max Sherman  </h4> 
												<a href="#" class="author-website">www.companyname.com</a> 
											</div> <!-- /.author-and-ulr --> 
										</div><!-- /.authors-review --> 
									</div><!-- /.testimonial-figure -->
								</div><!-- /.item --> 

								<div class="item">
									<div class="testimonial-figure">
										<div class="author-avatar">
											<img class="img-circle" src="images/testimonial-carousel/01.png" alt="carousel image">
										</div><!-- /.author-avatar --> 
										<div class="authors-review">
											<p class="author-says">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quam consectetur deserunt delectus, maxime natus aperiam libero molestiae beatae
											</p><!-- /.author-says -->
											<div class="given-stars">
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star-o"></i></span>
											</div><!-- /.given-stars --> 
											<div class="author-and-ulr">
												<h4 class="author-name"> Max Sherman  </h4> 
												<a href="#" class="author-website">www.companyname.com</a> 
											</div> <!-- /.author-and-ulr --> 
										</div><!-- /.authors-review --> 
									</div><!-- /.testimonial-figure -->
								</div><!-- /.item -->

								<div class="item">
									<div class="testimonial-figure">
										<div class="author-avatar">
											<img class="img-circle" src="images/testimonial-carousel/01.png" alt="carousel image">
										</div><!-- /.author-avatar --> 
										<div class="authors-review">
											<p class="author-says">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quam consectetur deserunt delectus, maxime natus aperiam libero molestiae beatae
											</p><!-- /.author-says -->
											<div class="given-stars">
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star"></i></span>
												<span><i class="fa fa-star-half-o"></i></span>
											</div><!-- /.given-stars --> 
											<div class="author-and-ulr">
												<h4 class="author-name"> Max Sherman  </h4> 
												<a href="#" class="author-website">www.companyname.com</a> 
											</div> <!-- /.author-and-ulr --> 
										</div><!-- /.authors-review --> 
									</div><!-- /.testimonial-figure -->
								</div><!-- /.item -->
							</div><!-- /.carousel-inner -->
						</div><!-- /#testimonial-carousel --> 
					</div><!-- /.testimonial -->
				</section><!-- /#testimonial -->
				<!-- Testimonial Section End -->


				

				<!-- Our Crew -->
				<section id="our-crew">
					<div class="our-crew section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Our Crew </h2>
						</div><!-- /.section-title-container --> 
						<div class="crew-container">
							<div class="row">
								<div id="crew-slider"  class="owl-carousel owl-theme">
									<div class="item col-xs-12">
										<div class="crew-member-box wow fadeIn animated" data-wow-delay="0.1s">
											<h4 class="crew-name">Georgia</h4>
											<h5 class="crew-designation">Ass Chef</h5>
											<p class="about-crew">
												Food Safety is my duty. I have done my course on Food Safety and know how to look after food and keep it fresh.
											</p><!--  /.about-crew -->
											<div class="crew-photo">
												<img src="images/crew/01.jpg" alt="Crew Photo">
											</div><!-- /.crew-photo -->
										</div><!-- /.crew-member-box -->
									</div><!-- /.item -->

									<div class="item col-xs-12">
										<div class="crew-member-box wow fadeIn animated" data-wow-delay="0.2s">
											<h4 class="crew-name">Harrison</h4>
											<h5 class="crew-designation">Ass Chef</h5>
											<p class="about-crew">
												Chicken, Vegetables and Eggs are most important for body. I am Chicken &amp; Poultry, Vegetables and Egg cooking expert. 
											</p><!--  /.about-crew -->
											<div class="crew-photo">
												<img src="images/crew/02.jpg" alt="Crew Photo">
											</div><!-- /.crew-photo -->
										</div><!-- /.crew-member-box -->
									</div><!-- /.item -->


									<div class="item col-xs-12">
										<div class="crew-member-box wow fadeIn animated" data-wow-delay="0.3s">
											<h4 class="crew-name">Evelyn</h4>
											<h5 class="crew-designation">Ass Chef</h5>
											<p class="about-crew">
												I have done Mastering on Fry Pan and at the same time I know how to make cook delicious pasta sauce.
											</p><!--  /.about-crew -->
											<div class="crew-photo">
												<img src="images/crew/03.jpg" alt="Crew Photo">
											</div><!-- /.crew-photo -->
										</div><!-- /.crew-member-box -->
									</div><!-- /.item --> 
								</div><!-- /#crew-slider -->
							</div><!-- /.row -->
						</div><!-- /.crew-container --> 
					</div><!-- /.our-crew --> 
				</section><!-- /#our-crew -->
				<!-- Our Crew End -->




				<!-- Tweets  -->
				<div id="tweet" class="parallax-style">
					<div class="tweet-section overlay-normal section-padding"> 
						<div class="twitter-icon-container">
							<div class="hex tweeter-icon">
								<span class="hex-icon"> <i class="fa fa-twitter"></i> </span>
							</div><!-- /.tweeter-icon -->
						</div><!-- /.twitter-icon-container --> 
						<div id="tweet-slider" class="carousel slide tweet-slider" data-ride="carousel"> 
							<div class="carousel-inner">
								<div class="item active">
									<div class="tweet-details"> 
										<p class="tweet-description">
											<a href="https://twitter.com/jwthemeltd">@jwthemeltd</a> 
											#TopClass - Multipurpose Business &amp; Corporate #WordPress Theme has been updated, check out at  http://t.co/Oc2cfugiqE                                    
										</p><!-- /.tweet-description -->
									</div><!-- /.tweet-details -->
								</div><!-- /.item -->

								<div class="item">
									<div class="tweet-details">
										<p class="tweet-description">
											<a href="https://twitter.com/jwthemeltd">@jwthemeltd</a> 
											Our #TopClass #HTML5 template is now in #wordPress version  Check out TopClass WordPress Multipurpose Theme  http://t.co/fEwxJjF5hf                                    
										</p><!-- /.tweet-description -->
									</div><!-- /.tweet-details -->
								</div><!-- /.item --> 

								<div class="item">
									<div class="tweet-details">
										<p class="tweet-description">
											<a href="https://twitter.com/jwthemeltd">@jwthemeltd</a> 
											Our #TopClass #HTML5 template is now in #wordPress version  Check out TopClass WordPress Multipurpose Theme  http://t.co/fEwxJjF5hf                                    
										</p><!-- /.tweet-description -->
									</div><!-- /.tweet-details -->
								</div><!-- /.item -->  

							</div><!-- /.carousel-inner -->
							<a class="slide-nav left" href="#tweet-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
							<a class="slide-nav right" href="#tweet-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
						</div><!-- /#tweet-slider -->  						
					</div><!-- /.tweet-section -->
				</div><!-- /#tweet -->
				<!-- Tweets End  -->


				

				<!-- Contact Us -->
				<section id="contact">
					<div class="contact-section section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Contact Us </h2>
						</div><!-- /.section-title-container -->

						<div class="contact-form-container">
							<div class="row"> 
								<form action="email.php" method="post" id="contact-form" class="wpcf7-form">

									<div class="col-sm-5">
										<input type="text" name="your_name" id="your_name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Your name here">
										
																	
										<input type="email" name="your_email" id="your_email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Your email here">
									</div><!-- /.col-sm-5 -->

									<div class="col-sm-7 contact-form-elements">
										<textarea name="your_message" id="your_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" placeholder="Your message here"></textarea>
									
										<input id="submit" type="submit" value="Send" class="wpcf7-form-control wpcf7-submit">
									</div><!-- /.col-sm-7 -->

								</form>
							</div><!-- /.row -->
						</div><!-- /.contact-form-container -->

						<div class="open-close">
							<h4 class="oc-heading text-center"> We are waiting for you! Visit us</h4>

							<div class="row">
								<div class="col-md-6">
									<div class="oc-container">
										<div class="col-sm-7 os-txt-box">
											<span class="oc-txt">Every Monday to Friday </span>
										</div>
										<div class="col-sm-5">
											<span class="oc-time">09:00 AM - 09:30 PM </span>
										</div>
									</div><!-- /.oc-container -->
								</div><!-- /.oc-container -->

								<div class="col-md-6">
									<div class="oc-container">
										<div class="col-sm-7 os-txt-box">
											<span class="oc-txt">Every Saturday and Sunday </span>
										</div>
										<div class="col-sm-5">
											<span class="oc-time">11:00 AM - 11:30 PM </span>
										</div>
									</div><!-- /.oc-container -->
								</div><!-- /.oc-container -->
							</div><!-- /.row -->
						</div><!-- /.open-close --> 
					</div><!-- /.contact-section --> 
				</section><!-- /#contact -->
				<!-- Contact Us End -->



				<!-- Google Map Section -->
				<div id="google-map">
					<div class="map-container">
						<div id="googleMaps" class="google-map-container"></div>
					</div>
				</div><!-- /#google-map-->
				<!-- Google Map Section End -->	

			</div><!-- /#main-container -->
			<!-- Main Container End -->





			<div id="scroll-to-top" class="right-fix-btn">
				<div class="go-to-top"> 
					<i class="fa fa-angle-double-up"></i>  
				</div><!-- /.go-to-top -->
			</div><!-- /#scroll-to-top -->  

			
			<!-- Footer Section -->
			<footer id="footer-section" class="main-container pull-right"> 
				<div class="go-top">
					<span class="go-to-up">
						<i class="fa fa-angle-double-up"></i>
					</span><!-- /.go-to-up -->
				</div><!-- /.go-top -->

				<div class="copyrights "> 

					&copy; <a href="#">Foody</a>  2015 - All Rights Reserved <span class="v-line"></span> Developed by <a href="https://jeweltheme.com">Jewel Theme</a>

				</div><!-- /.copyrights -->
			</footer><!-- /#footer-section -->
			<!-- Footer Section End -->


		</div><!-- /.row --> 
	</div><!-- /.container -->  

	<!-- Include jquery.min.js plugin -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Include JavaScript Plugins -->
	<script src="assets/js/plugins.js"></script>

	<!-- Include jquery.parallax.js Plugins -->
	<script src="assets/js/jquery.parallax.js"></script>

	<!-- Include wow.js Plugins -->
	<script src="assets/js/wow.min.js"></script> 

	<!-- Include JavaScript Functions -->
	<script src="assets/js/functions.js"></script>

	<!-- Google Maps Script  -->
	<script src="https://maps.google.com/maps/api/js?sensor=true"></script> 

	<!-- Gmap3.js For Static Maps -->
	<script src="assets/js/gmap3.js"></script> 

	<script type="text/javascript"> 

		/*----------- Google Map - with support of gmaps.js ----------------*/

		function isMobile() { 
			return ('ontouchstart' in document.documentElement);
		}

		function init_gmap() {
			if ( typeof google == 'undefined' ) return;
			var options = {
				center: [53.599339, 10.172954],
				zoom: 15,
				mapTypeControl: true,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
				},
				navigationControl: true,
				scrollwheel: false,
				streetViewControl: true
			}

			if (isMobile()) {
				options.draggable = false;
			}

			$('#googleMaps').gmap3({
				map: {
					options: options
				},
				marker: {
					latLng: [53.599339, 10.172954],
					options: { icon: 'assets/images/mapicon.png' }
				}
			});
		}

		init_gmap();




		jQuery(document).ready(function($) {
			"use strict";

			/*---------------------- Current Menu Item -------------------------*/
			$('#main-menu #headernavigation').onePageNav({
				currentClass: 'active',
				changeHash: false,
				scrollSpeed: 750,
				scrollThreshold: 0.5,
				scrollOffset: 0,
				filter: ':not(.sub-menu a, .not-in-home)',
				easing: 'swing',
				begin: function() {
					$('body').append('<div id="device-dummy" style="height: 1px;"></div>');
				},
				end: function() {
					$('#device-dummy').remove();
				}
			}); 
			
		});
		// document ready function End
		
		$("#contact-form").on("submit", function(e){
			e.preventDefault();
			$this = $(this);
			$.ajax({
				type: "POST",
				url: $this.attr('action'),
				data: $this.serialize(),
				success : function(){
					alert('Message Sent Successfully');
				}
			});
		});
	</script>
</body>
</html>