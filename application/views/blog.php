<div class="container">
		<div class="row"> 

			<!-- Main Container -->
			<div id="main-container"  class="main-container main-box pull-right" >  
				<!-- Our Blog Section -->
				<section id="blog">
					<div class="blog-section section-padding">
						<div class="section-title-container">
							<h2 class="section-title">Our Blog </h2>
						</div><!-- /.section-title-container -->

						<div class="blog-post-container">
							<div class="row">

                            <?php foreach ($blog_data as $key => $value): ?>
								<div class="col-sm-6">
									<article class="post-content wow fadeIn" data-wow-delay=".1s">
										<div class="post-meta"> 
											<div class="entry-meta">
												<div class="entry-date"> 
                                                    <span class="date"><?php
                                                    $d = substr($value['add_date'],8,2); 
                                                    echo $d; ?></span>
													<span class="month"><?php
                                                    $m = substr($value['add_date'],5,2); 
                                                    $m = $months[intval($m)];
                                                    echo $m; ?></span>
												</div> 
											</div><!-- /.entry-meta -->
										</div><!-- /.post-meta -->
										<div class="featured-img">
											<img class="blog-post-image" src="/images/blog/image-1.jpg" alt="Blog Post Image">
											<a href="/images/blog/big-image.jpg" class="boxer img-link"></a>
										</div><!-- /.featured-img -->
										<div class="post-container">
											<h2 class="post-title">
												<a href="/blog/<?php echo $value['slug']; ?>"> <?php echo $value['title']; ?></a>
											</h2><!-- /.post-title -->
											<p class="post-description">
                                            <?php echo $value['des']; ?>
											</p>
											<div class="continue-reading pull-left">
												<a href="/blog/<?php echo $value['slug']; ?>">Read More <i class="fa fa-angle-double-right"></i>  </a>
											</div><!-- /.continue-reading --> 
										</div><!-- /.post-container -->
									</article><!-- /.post-content --> 
								</div><!-- /.col-sm-6 -->

                                <?php endforeach?>
							</div><!-- /.row -->

							
						</div><!-- /.blog-post-container --> 
					</div><!-- /.blog -->
				</section><!-- /#blog -->
				<!-- Our Blog Section End -->  


				<div class="pagination">
					<!-- <nav class="paging-navigation">
						<a href="#" class="page-numbers active">1</a>
						<a href="#" class="page-numbers">2</a>
						<a href="#" class="page-numbers">3</a>
						<a href="#" class="page-numbers">»</a>
					</nav> -->
                    <?php echo $pagination; ?>
				</div><!-- /.pagination -->

				
			</div><!-- /#main-container -->
			<!-- Main Container End -->