<?php 
	function mastopp_style()
	{
		wp_enqueue_style('style', get_theme_file_uri('/assets/scss/style.css'));
		wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/scss/bootstrap/css/bootstrap.css'));		
	}

	add_action('wp_enqueue_scripts', 'mastopp_style');

	function mastopp_customize($wp_customize)
	{
		//Topnav Setting
		$wp_customize->add_section('topnav_setting', array(
			'title' => 'Setting Topnav Information'
		));

		//address
		$wp_customize->add_setting('mastopp_topnav_address', array(
			'default' => 'Tongkol Raya No.5 - Minormartani Sleman, Yogyakarta'
		));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'address_control', array(
			'label' => 'Address',
			'section' => 'topnav_setting',
			'settings' => 'mastopp_topnav_address',
			'type' => 'text'
		)) );		

		//opening hour
		$wp_customize->add_setting('mastopp_topnav_openhour', array(
			'default' => 'Mon-Fri : 09.00AM - 07.00PM<br>Sat-Sun : CLosed'
		));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'openhour_control', array(
			'label' => 'Open Hour',
			'section' => 'topnav_setting',
			'settings' => 'mastopp_topnav_openhour',
			'type' => 'text'
		)) );

		//contact
		$wp_customize->add_setting('mastopp_topnav_contact', array(
			'default' => '<a href="tel:+62123456786">(+62) 123 456 7896</br></a>
						<a href="mailto:halo@tonjoo.com?Subject=Hello%20Tonjoo">halo@tonjoo.com</a>'
		));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'contact_control', array(
			'label' => 'Contact',
			'section' => 'topnav_setting',
			'settings' => 'mastopp_topnav_contact',
			'type' => 'textarea'
		)) );
	}

	add_action('customize_register', 'mastopp_customize');


	function mastopp_post_type(){
		$args = array(
			'labels' => array(
				'name' => 'House',
				'add_new_item' => 'Add New House',
				'edit_item' => 'Edit House',
				'update_item' => 'Update House',
				'all_items' => 'All Houses',
				'search_items' => 'Search',
				'not_found' => 'Not Found',
		        'not_found_in_trash'  => 'Not found in Trash',

			),
			'public'              => true,
			'has_archive'         => true,
			'menu_icon' => 'dashicons-images-alt',
			'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',
	        ),
		);
		register_post_type('house', $args);
	}
	add_action('init', 'mastopp_post_type');

	function mastopp_taxonomy(){
		$args = array(
			'labels' => array(
				'name' => 'Categories',
				'singular_name' => 'Category',
			),	
			'public' => true,
			'hierarchical' => true,

		);
		//register taxonomy
		register_taxonomy('house_category', array('house'), $args);

	}
	add_action('init', 'mastopp_taxonomy');

	//support
	function mastopp_support()
	{
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'mastopp_support');

	function register_widget_mastopp()
	{
		register_sidebar([
			'name' => 'Primary',
			'id' =>	'primary',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
		]);

		register_sidebar([
			'name' => 'Filter',
			'id' =>	'filter',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
		]);
	}

	add_action('widgets_init', 'register_widget_mastopp');

	//require cron for info-korona
	require get_theme_file_path('/plugins/wp-cron-corona.php');



 ?>