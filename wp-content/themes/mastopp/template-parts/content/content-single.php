<div class="content container">
	<div class="col-md-8 main-content">
		<div class="post-content">
			<div class="post-title">
				<?= the_title();?>
			</div>
			<div class="post-image">
				<img src="<?= the_field('image');?>">
			</div>
			<div class="post-meta">
				<ul>
					<li><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="#"><?= get_the_author_meta('display_name');?></a></li>
					<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href=""><span>10</span> Comment</a></li>
					<?php
					$terms = get_the_terms(get_the_ID(), 'house_category');
					// $term_name = $terms[0]->name;
					if (!empty($terms)) {
						
						foreach($terms as $key => $category) { 
						    echo 
							'<li><i class="fa fa-tags" aria-hidden="true"></i><a href="">'.$category->name.'</a></li>';
						} 
					}
					?>
				</ul>
			</div>
			<div>
				<?= the_content();?>

			</div>
		</div>
		<div class="post-comment">
			<div class="title-box">
				COMMENT
			</div>
			<ul class="main-comment">
				<li>
					<img class="avatar-user" src="<?php echo get_template_directory_uri(); ?>/assets/images/agent.jpeg">
					<div class="content-comment">
						<div class="top-comment">
							<div class="comment-meta">
								<span>Ayub Beud</span>
								<span>April 25th, 2017</span>
							</div>
							<a href="">Reply</a>
						</div>
						<div class="comment">
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</div>
					</div>
					<ul class="reply-comment">
						<li>
							<img class="avatar-user" src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.jpeg">
							<div class="content-comment">
								<div class="top-comment">
									<div class="comment-meta">
										<span>Ryan Davion</span>
										<span>December 15th, 2017</span>
									</div>
									<a href="">Reply</a>
								</div>
								<div class="comment">
									It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<img class="avatar-user" src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.jpeg">
					<div class="content-comment">
						<div class="top-comment">
							<div class="comment-meta">
								<span>Ayub Beud</span>
								<span>April 25th, 2017</span>
							</div>
							<a href="">Reply</a>
						</div>
						<div class="comment">
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</div>
					</div>
				</li>
				<li>
					<img class="avatar-user" src="<?php echo get_template_directory_uri(); ?>/assets/images/agent.jpeg">
					<div class="content-comment">
						<div class="top-comment">
							<div class="comment-meta">
								<span>Ayub Beud</span>
								<span>April 25th, 2017</span>
							</div>
							<a href="">Reply</a>
						</div>
						<div class="comment">
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</div>
					</div>
					<ul class="reply-comment">
						<li>
							<img class="avatar-user" src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.jpeg">
							<div class="content-comment">
								<div class="top-comment">
									<div class="comment-meta">
										<span>Ryan Davion</span>
										<span>December 15th, 2017</span>
									</div>
									<a href="">Reply</a>
								</div>
								<div class="comment">
									It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="input-comment">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="email" placeholder="Email">
			<textarea type="text" name="message" placeholder="Your Message"></textarea>
			<button>
				SUBMIT COMMENT
			</button>
		</div>
	<?php
	the_content();
	?>
	</div>
	<?php get_sidebar('primary'); ?>
</div>