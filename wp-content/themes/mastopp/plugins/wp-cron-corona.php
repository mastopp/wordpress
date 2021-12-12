<?php 
/*
Plugin Name: My WP-Cron Test
*/
	//interval
	add_filter('cron_schedules', 'covid_add_cron_interval');
	function covid_add_cron_interval($schedules)
	{
		$schedules['seven_minutes'] = array(
			'interval' => 420,
			'display' => esc_html__('Every Seven minutes'),
		);
		return $schedules;
	}

	add_action('covid_cron_hook', 'covid_cron');

	function covid_cron(){
		global $wpdb;

	    $table_name = $wpdb->prefix . 'info_korona'; 

		//generate to db 
		$country = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries'),true);
		//truncate first
		$wpdb->query('TRUNCATE TABLE '.$table_name);
		foreach($country['countries'] as $c){
			if (!empty($c['iso3']) && ($c['iso3'] != 'CZE') && ($c['iso3'] != 'GMB')) {
				
				$data = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/'.$c['iso3']),true);
				if ($data) {
					$item = array(
			        	'nama_negara' => $c['name'],
						'kasus_aktif' => $data['confirmed']['value'],
						'kasus_sembuh' => $data['recovered']['value'],
						'kasus_meninggal' => $data['deaths']['value']
			        );
		        $result = $wpdb->insert($table_name, $item);
				}
			}
		}
			// print_r($item);//die();

	}

	if (!wp_next_scheduled('covid_cron_hook')) {
		wp_schedule_event(time(), 'seven_minutes', 'covid_cron_hook');
	}


	
 ?>