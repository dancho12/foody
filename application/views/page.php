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
										<?php echo $page_data['main_text'];
										// print_r($comments);?>
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
								<?php echo $comments_count; ?> Comments	
								</h3><!-- /.comments-title -->

								<ol class="comment-list">
									<li class="comment parent" id="comments-id-1">

									<?php 
									if(!$comments_exist){
										echo "<p>".$comments."</p>";
									}else{
									foreach ($comments as $key => $value): ?>
										<article class="comment-body">
											<div class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar" alt="Comment Author Name" src="/images/comments/01.png" >
												</div><!-- /.comment-author -->
											</div><!-- /.comment-meta -->

											<div class="comment-metadata">
												<h5 class="comment-author">
													<a href="#"><?php echo $value['user_id']; ?></a>
												</h5><!-- /.comment-author -->
												<a href="blog-single.html#comments-id-1">
													<time datetime="2014-04-22T14:52:56+00:00">
													<?php echo $value['add_date']; ?>							
													</time>
												</a>
												<span class="reply pull-right">
													<a class="comment-reply-link" href="blog-single.html?replytocom=847#respond">Reply</a> 
												</span><!-- /.reply -->
											</div><!-- /.comment-metadata -->

											<div class="comment-content">
												<p><?php echo $value['text']; ?></p>
											</div><!-- .comment-content -->
									<?php endforeach;
											}?>
										</article><!-- /.comment-body -->
										
									</li><!-- /.comment -->
								</ol><!-- /.comment-list -->



								<div id="respond" class="comment-respond">
									<h4 id="reply-title" class="comment-reply-title">
										Leave a Reply
									</h4><!-- /#reply-title -->
									<form action="/blog/<?php echo $slug; ?>" method="post" id="commentform" class="comment-form">
									
										<input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name" title="Name" required>
										<!-- <input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email" title="Email"  required> -->
										<!-- <input id="url" class="form-control" name="url" type="url" value="" size="30" placeholder="URL" title="URL" > -->
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
