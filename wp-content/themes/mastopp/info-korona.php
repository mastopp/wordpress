<?php /* Template Name: Info Korona Template */ ?>
<?php get_header(); ?>

<?php //get_template_part('template-parts/content/content');
	$json = json_decode(file_get_contents('https://covid19.mathdro.id/api'),true);
 ?>


<div class="content container">
	<div class="col-md-8 main-content">
		<h3><?= the_title(); ?></h3>
		<p><b>Total Positif: <?= number_format($json['confirmed']['value']);?> Jiwa</b></p>
		<p><b>Total Sembuh: <?= number_format($json['recovered']['value']);?> Jiwa</b></p>
		<p><b>Total Meninggal: <?= number_format($json['deaths']['value']);?> Jiwa</b></p>
		<p><b>Last Update: <?= date('Y-m-d h:i:sa', strtotime($json['lastUpdate'])); ?></b></p>
		<table class="table" id="example">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Negara</th>
		      <th scope="col">Positif</th>
		      <th scope="col">Sembuh</th>
		      <th scope="col">Meninggal</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
			  	global $wpdb;

			    $table_name = $wpdb->prefix . 'info_korona'; 

				//truncate first
				$info = $wpdb->get_results('SELECT 
					nama_negara,
					kasus_aktif,
					kasus_sembuh,
					kasus_meninggal FROM '.$table_name);
				// print_r($info);
				foreach ($info as $key => $value) :
					$key = $key+1;
		  	 ?>
		    <tr>
		      <td scope="row"><?= $key;?></td>
		      <td><?= $value->nama_negara; ?></td>
		      <td><?= number_format($value->kasus_aktif); ?></td>
		      <td><?= number_format($value->kasus_sembuh); ?></td>
		      <td><?= number_format($value->kasus_meninggal); ?></td>
		    </tr>
		    <?php 
		    	endforeach;
		     ?>
		    
		  </tbody>
		  <tfoot>
		  	<tr>
		      <th scope="col">#</th>
		      <th scope="col">Negara</th>
		      <th scope="col">Positif</th>
		      <th scope="col">Sembuh</th>
		      <th scope="col">Meninggal</th>
		    </tr>
		  </tfoot>
		</table>
	</div>
	<?php get_sidebar('primary'); ?>
</div>


<?php get_footer(); ?>