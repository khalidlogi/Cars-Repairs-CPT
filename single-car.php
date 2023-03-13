<?php
/**
 * The template for displaying single cars.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

  wp_head();

  
while ( have_posts() ) :
	the_post();
	?>





<div class="mycontainer">
  <!-- Your plugin content here -->
  <?php
  
  ?>

<header>
  <div class="container">

  <nav>
  <ul>
    <li class="active">...</li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></li>
    <li><a href="<?php echo esc_url( get_post_type_archive_link('car') ); ?>">Cars List</a></li>
    ...
  </ul>
</nav>

    <div class="logo">
      
     
    </div>

    
  </div>
</header>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			

			<div class="entry-meta">
				<?php
					   $brand = get_post_meta( $post->ID, 'brand', true );
					   $fuel = get_post_meta($post->ID, 'fuel', true);
					   $video_url_review = get_post_meta( $post->ID, 'review', true );
					   // retrieved using ChatGpt
					   $year = get_post_meta( $post->ID, 'year', true );
					  
					   $power_steering_fluid = get_post_meta( $post->ID, 'power_steering_fluid', true );
					   
					 //Tires & Wheels
					   $tires_wheels = get_post_meta( $post->ID, 'tires_wheels', true );
					   $wiper_blade_front = get_post_meta( $post->ID, 'wiper_blade_front', true );
					 
					   $fluid_leaks = get_post_meta( $post->ID, 'fluid_leaks', true );
					   $fluid_check = get_post_meta( $post->ID, 'fluid_check', true );
					   
					   //Light
					   $coolant_antifreeze = get_post_meta( $post->ID, 'coolant_antifreeze', true );
					   $clock = get_post_meta( $post->ID, 'clock', true );
					  
					   $check_engine_light = get_post_meta( $post->ID, 'check_engine_light', true );
					   $brake_fluid = get_post_meta( $post->ID, 'brake_fluid', true );
					   $belts = get_post_meta( $post->ID, 'belts', true );
					   
					 //battery
					   $clean_battery_and_terminals = get_post_meta( $post->ID, 'clean_battery_and_terminals', true );
					   $replace_battery = get_post_meta( $post->ID, 'replace_battery', true );
				 	   $jump_start = get_post_meta( $post->ID, 'jump_start', true );
				 
					   $air_filter_engine = get_post_meta( $post->ID, 'air_filter_engine', true );
					   $air_filter_cabin = get_post_meta( $post->ID, 'air_filter_cabin', true );
					  
					   
					   $fix_leaks = get_post_meta($post->ID, 'fix_leaks', true);
					   
					 //oil
					   $check_oil_level = get_post_meta($post->ID, 'check_oil_level', true);
					   $change_oil = get_post_meta($post->ID, 'change_oil', true);
					   $add_oil = get_post_meta($post->ID, 'add_oil', true);

					   //Lights
					   $brake_light = get_post_meta($post->ID, 'brake_light', true);
						$center_brake_light = get_post_meta($post->ID, 'center_brake_light', true);
						$daytime_running_light = get_post_meta($post->ID, 'daytime_running_light', true);
						$fog_light = get_post_meta($post->ID, 'fog_light', true);
						$headlight = get_post_meta($post->ID, 'headlight', true);
						$highbeam = get_post_meta($post->ID, 'highbeam', true);
						$parking_light = get_post_meta($post->ID, 'parking_light', true);
						$reverse_light = get_post_meta($post->ID, 'reverse_light', true);
						$tail_light = get_post_meta($post->ID, 'tail_light', true);
						$turn_signal_front = get_post_meta($post->ID, 'turn_signal_front', true);
						$turn_signal_rear = get_post_meta($post->ID, 'turn_signal_rear', true);


					   
				 
				?>
				
<ul> 
					


<div class="entry-content">

<div class="container">
<div  style="width: 300px; height: 200px;" class="img-fluid w-50 h-50" ><?php the_post_thumbnail( 'medium' );
?></div>

  <div class="row">
    <div class="col-md-8">
      <!-- left sidebar-->
	  <h2 class="h2 mb-2">Car Information/ <?php the_title( '<span class="">', '</span>' ); ?>
</h2>

<div class="border-left1 p-3">
  
  <?php if ( !empty( $brand ) ) : ?>
  <p class="p"><strong>Brand:</strong> <?php echo $brand; ?></p>
  <?php endif; ?>
    <?php if ( !empty( $year ) ) : ?>
  <p><strong>Year:</strong> <?php echo $year; ?></p>
  <?php endif; ?>
  <?php if ( !empty( $fuel ) ) : ?>
  <p><strong>Fuel:</strong> <?php echo $fuel; ?></p>
  <?php endif; ?>
  </div> 
 


  
  
 
  <?php if ( !empty( $power_steering_fluid ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $power_steering_fluid );?>">Video URL Review</a></p>

  <?php endif; ?>

  <?php if ( !empty( $tires_wheels ) ) : ?>
	<p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $tires_wheels );?>">tires_wheels</a></p>
  <?php endif; ?>

  
 <!-- Battery--> <div class="border-left2 p-2 mt-2">
 <h2> Battery <img width="40px" src="<?php echo plugin_dir_url( __FILE__ ) . 'img/belt_Passenger_3047.png'; ?>" alt="My Image">
</h2>
  <?php if ( !empty( $replace_battery ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $replace_battery );?>">Replace battery</a></p>
<?php endif; ?>
<?php if ( !empty( $clean_battery_and_terminals ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $clean_battery_and_terminals );?>">Clean battery and terminals</a></p>
<?php endif; ?>
<?php if ( !empty( $jump_start ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $jump_start );?>">Jump start 
  <img width="40px" src="<?php echo plugin_dir_url( __FILE__ ) . 'img/jump_start_Jump_Rope_107660.png'; ?>" alt="My Image">
</a></p>
<?php endif; ?>
<!-- Battery--> </div>

 <!-- Lights--> <div class="border-left1 p-2 mt-2">
 <h2> Lights <i class="bi bi-stoplights"></i></h2>

  <?php if ( !empty( $turn_signal_rear ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $turn_signal_rear );?>">turn_signal rear</a></p>
<?php endif; ?>
<?php if ( !empty( $turn_signal_front ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $turn_signal_front );?>">turn signal front</a></p>
<?php endif; ?>
<?php if ( !empty( $tail_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $tail_light );?>">tail light</a></p>
<?php endif; ?>
<?php if ( !empty( $reverse_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $reverse_light );?>">taireverse_light</a></p>
<?php endif; ?><?php if ( !empty( $reverse_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $reverse_light );?>">reverse light</a></p>
<?php endif; ?>
<?php if ( !empty( $parking_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $parking_light );?>">parking light</a></p>
<?php endif; ?>
<?php if ( !empty( $highbeam ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $highbeam );?>">highbeam</a></p>
<?php endif; ?>
<?php if ( !empty( $headlight ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $headlight );?>">headlight</a></p>
<?php endif; ?>
<?php if ( !empty( $fog_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $fog_light );?>">fog light</a></p>
<?php endif; ?>
<?php if ( !empty( $daytime_running_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $daytime_running_light );?>">daytime running light</a></p>
<?php endif; ?>
<?php if ( !empty( $center_brake_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $center_brake_light );?>">Center brake light</a></p>
<?php endif; ?>
<?php if ( !empty( $brake_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $brake_light );?>">brake light</a></p>
<?php endif; ?>
<!-- Lights--> </div>

<?php if ( !empty( $belts ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $belts );?>">Belts
  <img width="40px" src="<?php echo plugin_dir_url( __FILE__ ) . 'img/belt_Passenger_3047.png'; ?>" alt="My Image">
</a></p>
<?php endif; ?>

<?php if ( !empty( $brake_fluid ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $brake_fluid );?>">Brake fluid
  <img width="40px" src="<?php echo plugin_dir_url( __FILE__ ) . 'img/brake_fluid_Glue_20454.png'; ?>" alt="My Image">
</a></p>
<?php endif; ?>

<?php if ( !empty( $check_engine_light ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $check_engine_light );?>">Check engine light</a></p>
<?php endif; ?>

<div class="border-left2 p-2 mt-2">
  <h2> Clock <i class="bi bi-clock"></i></h2>
<?php if ( !empty( $clock ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $clock );?>">Clock</a></p>
<?php endif; ?></div>

<?php if ( !empty( $coolant_antifreeze ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $coolant_antifreeze );?>">Coolant antifreeze
  <img width="40px" src="<?php echo plugin_dir_url( __FILE__ ) . 'img/coolant_antifreeze_Defrosting_25817.png'; ?>" alt="My Image">
</a></p>
<?php endif; ?>

<?php if ( !empty( $power_steering_fluid ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $power_steering_fluid );?>">Power steering fluid</a></p>
<?php endif; ?>

 <!-- Fluid--> <div class="border-left1 p-2 mt-2 mb-2">
 <h2> Fluids <i class="bi-droplet-half"></i>
</h2>
<?php if ( !empty( $fluid_leaks ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $fluid_leaks );?>">Fluid leaks</a></p>
<?php endif; ?>
<?php if ( !empty( $fluid_check ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $fluid_check );?>">Fluid Check</a></p>
<?php endif; ?>
</div>

 <!-- Oil--> <div class="border-left2 p-2 mt-2">
 <h2> Oil <i class="bi bi-droplet"></i></h2>
<?php if ( !empty( $add_oil ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $add_oil );?>">Add oil</a></p>
<?php endif; ?>
<?php if ( !empty( $check_oil_level ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $check_oil_level );?>">Check oil level</a></p>
<?php endif; ?>
<?php if ( !empty( $change_oil ) ) : ?>
  <p><a class="btn btn-primary mt-2 car-type-video" href="<?php echo  esc_url( $change_oil );?>">Change oil</a></p>
<?php endif; ?>
</div>

	  <!-- End left sidebar-->
    </div>
    <div class="col-md-4">
      <h3>Description</h3>
      <?php if ( !empty( $video_url_review ) ) : ?>
  <p><strong>Video URL Review:</strong> <?php echo $video_url_review; ?></p>
  <li><a class="car-type-video" href="' . esc_url( $video_url_review ) . '">Video URL Review</a></li>
  <?php endif; ?>

    <?php the_content(); ?>
	</div>
  </div>
</div>
</div><!-- .entry-content -->


					
				</ul>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->



    <header>
  <div class="container">

  <nav>
  <ul>
    <li class="active">...</li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li><a href="<?php echo esc_url( get_post_type_archive_link('car') ); ?>">Cars List</a></li>
    ...
  </ul>
</nav>

    <div class="logo">
      
     
    </div>

    
  </div>
</header>

	</article><!-- #post-<?php the_ID(); ?> --></div>

<?php endwhile; ?>


