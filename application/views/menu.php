<div class="container">
		<div class="row"> 

			<!-- Main Container -->
			<div id="main-container"  class="main-container pull-right" > 
				
				<!-- Our Menus -->
				<section id="our-menus">
					<div class="our-menu section-padding menu-page">
						<div class="section-title-container">
							<h2 class="section-title">  <?php echo $title; ?></h2>
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
						
						
					</div><!-- /.our-menu -->
				</section><!-- /#our-menus -->
				<!-- Our Menus End --> 

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
			


			<!-- Side Bar -->
			<div id="left-sidebar" class="left-sidebar pull-left">
				<!-- do not delete this  --> 
			</div><!-- /#left-sidebar -->
			<!-- Side Bar End --> 


			<div id="scroll-to-top">
				<div class="go-to-top"> 
						<i class="fa fa-angle-double-up"></i>  
				</div><!-- /.go-to-top -->
			</div><!-- /#scroll-to-top -->