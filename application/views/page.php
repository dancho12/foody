<div class="container">
		<div class="row"> 

			<!-- Main Container -->
			<div id="main-container"  class="main-container pull-right" >  
				<!-- Our Blog Section -->
				<section id="blog">
					<div class="blog-section section-padding single-page">
						<div class="section-title-container">
							<h2 class="section-title">Our Blog </h2>
						</div><!-- /.section-title-container -->

						<div class="blog-post-container">  
							<article class="post type-post">
								<div class="post-thumbnail">
									<img src="/images/blog/single-post.jpg" alt="Post Thumbnail Image">
								</div><!-- /.post-thumbnail -->
								<div class="post-content">
									<h2 class="post-title">
										<a href="#"><?php echo $page_data['title']?></a>
									</h2>
									<div class="entry">
										<?php echo $page_data['main_text']?>
									</div><!-- /.entry -->
									<footer class="post-meta">
										<div class="entry-meta pull-left">
											<span class="entry-date">
												<i class="fa fa-clock-o"></i>
												<time datetime="2014-04-11T14:52:56+00:00"> <?php echo $page_data['add_date']?> </time>
											</span>
											<span class="tag-links">
												<i class="fa fa-tag"></i>
												<a href="#" rel="tag">HTML</a>
												<a href="#" rel="tag">Responsive</a>
												<a href="#" rel="tag">Template</a>
												<a href="#" rel="tag">webdesign</a>
											</span>
										</div><!-- /.entry-meta --> 
									</footer><!-- /.post-meta -->
								</div><!-- /.post-content -->  
							</article><!-- /.post-content -->  

							<nav class="navigation post-navigation" role="navigation">
								<div class="nav-links">
									<a href="/blog/<?php if(isset($pr_page)){echo $pr_page;}?>" class="prev" rel="prev">
										<span class="meta-nav">Previous Post</span>
										<span class="nav-icon"><i class="fa fa-angle-double-left"></i></span>
										Previous Post title goes here ...
									</a>
									<a href="/blog/<?php if(isset($n_page)){echo $n_page;}?>" class="next" rel="next">
										<span class="meta-nav">Next Post</span>
										<span class="nav-icon"><i class="fa fa-angle-double-right"></i></span>
										Previous Post title goes here ...
									</a>		
								</div><!-- .nav-links -->
							</nav><!-- /.post-navigation -->

							<div id="comments" class="comments-area">
								<h3 class="comments-title"> 
									23 Comments	
								</h3><!-- /.comments-title -->

								<ol class="comment-list">
									<li class="comment parent" id="comments-id-1">
										<article class="comment-body">
											<div class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar" alt="Comment Author Name" src="images/comments/01.png" >
												</div><!-- /.comment-author -->
											</div><!-- /.comment-meta -->

											<div class="comment-metadata">
												<h5 class="comment-author">
													<a href="#">Mirko</a>
												</h5><!-- /.comment-author -->
												<a href="blog-single.html#comments-id-1">
													<time datetime="2014-04-22T14:52:56+00:00">
														April 22, 2014 at 2:52 pm							
													</time>
												</a>
												<span class="reply pull-right">
													<a class="comment-reply-link" href="blog-single.html?replytocom=847#respond">Reply</a> 
												</span><!-- /.reply -->
											</div><!-- /.comment-metadata -->

											<div class="comment-content">
												<p>The blog page you guys design is really cool! I am waiting for the WP Version of foody. Hope you will release the WordPress Version very soon.</p>
												<p>Thanks a lot!</p>
												<p>Mirko</p>
											</div><!-- .comment-content -->

										</article><!-- /.comment-body -->
										<ol class="children">
											<li class="comment" id="comments-id-2">
												<article class="comment-body">
													<div class="comment-meta">
														<div class="comment-author vcard">
															<img class="avatar" alt="Comment Author Name" src="images/comments/02.png" >
														</div><!-- /.comment-author -->
													</div><!-- /.comment-meta -->

													<div class="comment-metadata">
														<h5 class="comment-author">
															<a href="#">Riki</a>
														</h5><!-- /.comment-author -->
														<a href="blog-single.html#comments-id-1">
															<time datetime="2014-04-22T15:22:56+00:00">
																April 22, 2014 at 3:22 pm							
															</time>
														</a>
														<span class="reply pull-right">
															<a class="comment-reply-link" href="blog-single.html?replytocom=847#respond">Reply</a> 
														</span><!-- /.reply -->
													</div><!-- /.comment-metadata -->

													<div class="comment-content">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo. In dicta eos atque, debitis maiores earum assumenda sunt illum itaque. Unde, sed, neque!</p> 
													</div><!-- .comment-content -->

												</article><!-- /.comment-body -->
											</li><!-- /.comment -->
										</ol><!-- /.children -->
									</li><!-- /.comment -->
									<li class="comment" id="comments-id-3">
										<article class="comment-body">
											<div class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar" alt="Comment Author Name" src="images/comments/03.png" >
												</div><!-- /.comment-author -->
											</div><!-- /.comment-meta -->

											<div class="comment-metadata">
												<h5 class="comment-author">
													<a href="#">Aysha</a>
												</h5><!-- /.comment-author -->
												<a href="blog-single.html#comments-id-1">
													<time datetime="2014-04-22T15:25:56+00:00">
														April 22, 2014 at 3:25 pm							
													</time>
												</a>
												<span class="reply pull-right">
													<a class="comment-reply-link" href="blog-single.html?replytocom=847#respond">Reply</a> 
												</span><!-- /.reply -->
											</div><!-- /.comment-metadata -->

											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo. In dicta eos atque, debitis maiores earum assumenda sunt illum itaque. Unde, sed, neque!</p> 
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi similique natus nostrum fugiat error ratione ipsum aliquid cumque eligendi optio? Facilis ipsum iure tempora laboriosam mollitia modi, neque obcaecati quia.</p>
											</div><!-- .comment-content -->

										</article><!-- /.comment-body -->
									</li><!-- /.comment -->
									<li class="comment" id="comments-id-4">
										<article class="comment-body">
											<div class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar" alt="Comment Author Name" src="images/comments/04.png" >
												</div><!-- /.comment-author -->
											</div><!-- /.comment-meta -->

											<div class="comment-metadata">
												<h5 class="comment-author">
													<a href="#">James</a>
												</h5><!-- /.comment-author -->
												<a href="blog-single.html#comments-id-1">
													<time datetime="2014-04-22T16:22:56+00:00">
														April 22, 2014 at 4:22 pm							
													</time>
												</a>
												<span class="reply pull-right">
													<a class="comment-reply-link" href="blog-single.html?replytocom=847#respond">Reply</a> 
												</span><!-- /.reply -->
											</div><!-- /.comment-metadata -->

											<div class="comment-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ab consequatur temporibus dicta odio consectetur quo. In dicta eos atque, debitis maiores earum assumenda sunt illum itaque. Unde, sed, neque!</p> 
											</div><!-- .comment-content -->

										</article><!-- /.comment-body -->
									</li><!-- /.comment -->
								</ol><!-- /.comment-list -->



								<div id="respond" class="comment-respond">
									<h4 id="reply-title" class="comment-reply-title">
										Leave a Reply
									</h4><!-- /#reply-title -->
									<form action="#" method="post" id="commentform" class="comment-form">
										<input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name" title="Name" required>
										<input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email" title="Email"  required>
										<input id="url" class="form-control" name="url" type="url" value="" size="30" placeholder="URL" title="URL" >
										<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment" title="Comment"  required></textarea>
										<button name="submit" class="btn btn-sm btn-default full-width" type="submit" id="submit">Post Comment</button>
									</form><!-- /#commentform -->
								</div><!-- /#respond -->


							</div><!-- /#comments -->

							
						</div><!-- /.blog-post-container --> 
					</div><!-- /.blog -->
				</section><!-- /#blog -->
				<!-- Our Blog Section End -->   
			</div><!-- /#main-container -->
			<!-- Main Container End -->
