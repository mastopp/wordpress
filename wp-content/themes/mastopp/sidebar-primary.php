<div class="col-md-4 sidebar">
	<?php dynamic_sidebar('primary'); ?>
	<div class="sidebar-box clear">
		<div class="sidebar-title">
			CATEGORY
		</div>
		<div class="content-sidebar sidebar-list clear">
			<ul>
				<?php 
					$terms = get_terms([
						'taxonomy' => 'house_category',
						'hide_empty' => false
					]);

					foreach($terms as $category) { 
					    echo 
						'<li><a href="'.get_home_url().'/'.$category->slug.'">'.$category->name.'</a></li>';
					} 
				 ?>
			</ul>
		</div>
	</div>
	<div class="sidebar-box">
		<div class="sidebar-title">
			POPULAR POST
		</div>
		<div class="content-sidebar popular-post">
			<?php 
				$house = new WP_Query(array(
					'post_type' => 'house',
					'posts_per_page' => 5
				));
				if ($house->have_posts()) :
					while ($house->have_posts()) : $house->the_post();
				
			 ?>
			<div class="one-post">
				<div class="thumbnail-post">
					<img src="<?= the_field('image');?>">
				</div>
				<div class="info-post">
					<div class="date-post">
						<?= the_time('M jS, Y'); ?>
					</div>
					<div class="title-post">
						<a href="<?= the_permalink();?>"><?= the_title();?></a>
					</div>
				</div>
			</div>
			<?php 
					endwhile;
				endif;
				wp_reset_postdata();
			 ?>

		</div>
	</div>
	<div class="sidebar-box clear">
		<div class="sidebar-title">
			ARCHIVES
		</div>
		<div class="content-sidebar sidebar-list clear">
			<ul>
				<li><a href="">January</a></li>
				<li><a href="">February</a></li>
				<li><a href="">March</a></li>
				<li><a href="">April</a></li>
				<li><a href="">June</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-box clear">
		<div class="sidebar-title">
			TAGS
		</div>
		<div class="content-sidebar list-tags clear">
			<a href="">Wordpress</a>
			<a href="">Property</a>
			<a href="">Furniture</a>
			<a href="">Cheap</a>
			<a href="">Sale</a>
		</div>
	</div>
</div>