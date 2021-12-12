<?php 
/*
Plugin Name: Custom table info korona
Author: Mastopp
Version: 1.0
Description: Creating table info korona
*/

	function info_korona_create_db() {
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		//* Create the teams table
		$table_name = $wpdb->prefix . 'info_korona';
		$sql = "CREATE TABLE $table_name (
		id INTEGER NOT NULL AUTO_INCREMENT,
		nama_negara TEXT NOT NULL,
		kasus_aktif INTEGER NOT NULL,
		kasus_sembuh INTEGER NOT NULL,
		kasus_meninggal INTEGER NOT NULL,
		PRIMARY KEY (id)
		) $charset_collate;";
		dbDelta( $sql );
	}
	register_activation_hook( __FILE__, 'info_korona_create_db' );
 ?>