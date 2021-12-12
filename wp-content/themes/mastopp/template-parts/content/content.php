<!-- Content -->
	<div class="content container">
		<div class="col-md-8 main-content">
			<div class="property-listing">
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'house',
						'posts_per_page' => -1,
						'tax_query' => [],
						'meta_query' => [
							'relation' => 'AND'
						],
						'paged' => $paged,
					);
					

					if (isset($_GET['bathroom'])) {
						if (!empty($_GET['bathroom'])) {
							$args['meta_query'][] = [
								'key' => 'bathroom',
								'value'=> sanitize_text_field($_GET['bathroom']),
								'compare' => '=',
								'type' => 'NUMERIC'
							];	
						}
					}

					if (isset($_GET['squarefeet'])) {
						if (!empty($_GET['squarefeet'])) {
							$n = explode('-', str_replace(' ', '', $_GET['squarefeet']));
							$min = $n[0];
							$max = $n[1];
							
							$args['meta_query'][] = [
								'key' => 'squarefeet',
								'value'=> sanitize_text_field($min),
								'compare' => '>=',
								'type' => 'NUMERIC'
							];		

							$args['meta_query'][] = [
								'key' => 'squarefeet',
								'value'=> sanitize_text_field($max),
								'compare' => '<=',
								'type' => 'NUMERIC'
							];								
							
						}
					}

					

					$house = new WP_Query($args);

					// echo '<pre>'.print_r($house).'</pre>';

					// $house = new WP_Query(array(
					// 	'post_type' => 'house',
					// 	'posts_per_page' => -1
					// ));
					if ($house->have_posts()) :
						while ($house->have_posts()) : $house->the_post();
					
				 ?>
					<div class="one-property">
						<div class="image-property">
							<img src="<?= the_field('image');?>">
						</div>
						<div class="price">
							USD <?= the_field('price');?>
						</div>
						<div class="property-info clear">
							<div class="title-property">
								<a href="<?= the_permalink();?>"><?= the_title();?></a>
							</div>
							<div class="overview-property">
								<?= the_excerpt()?>
							</div>
							<div class="property-detail clear text-center">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<i class="fa fa-building" aria-hidden="true"></i> <?= the_field('squarefeet');?> Sf
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<i class="fa fa-car" aria-hidden="true"></i> <?= the_field('car');?> car
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<i class="fa fa-bed" aria-hidden="true"></i> <?= the_field('bedroom');?> room
								</div>
							</div>
						</div>
					</div>

				<?php 
						endwhile;
						// $total_pages = $house->max_num_pages;

					 //    if ($total_pages > 1){

					 //        $current_page = max(1, get_query_var('paged'));

					 //        echo paginate_links(array(
					 //            'base' => get_pagenum_link(1) . '%_%',
					 //            'format' => '/page/%#%',
					 //            'current' => $current_page,
					 //            'total' => $total_pages,
					 //            'prev_text'    => __('« prev'),
					 //            'next_text'    => __('next »'),
					 //        ));
					 //    }    
					endif;
					wp_reset_postdata();
				 ?>
				<!-- <div class="pagination-property">
					<a href="" class="prev-button"></a>
					<div class="page-number">
						<a href="">1</a>
						<a href="">2</a>
						<a href="" class="active">3</a>
						<a href="">4</a>
						<a href="">5</a>
					</div>
					<a href="" class="next-button"></a>
				</div> -->
			</div>
		</div>
		<?php get_sidebar('filter'); ?>
	</div>