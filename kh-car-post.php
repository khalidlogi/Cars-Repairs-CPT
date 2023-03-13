<?php

/**
 *
 * @link              http://khalid.com
 * @since             1.0.0
 * @package           kh_Post_Cars
 *
 * @wordpress-plugin
 * Plugin Name:       bizoula
 * Plugin URI:        http://khalid.com/
 * Description:       A plugin with a custom post type called Cars. The Custom post type will be storing data about cars
 * Version:           1.0.0
 * Author:            Ocen Chris
 * Author URI:        http://ocenchris.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kh-post-cars
 * Domain Path:       /languages
 */

// If this file is access directly, abort!!!
defined( 'ABSPATH' ) or die( 'Unauthorized Access' );




class KH_Post_Cars {

  public function __construct() {
    add_action( 'init',  array( $this, 'kh_custom_car' ) );
    add_action( 'save_post', array( $this, 'kh_custom_car_save' ) );
    add_action( 'add_meta_boxes', array( $this, 'kh_save_custom_color' ) );
    add_action( 'admin_print_styles', array( $this, 'prfx_admin_styles' ));

    add_action( 'init', array( $this,'custom_taxonomy_car_brands'));

    register_activation_hook(__FILE__, array($this,'activate'));

    //Custom template
    add_filter( 'single_template', array($this,'load_single_ad_template'), 10, 1 );

    //custom template 
    add_filter('template_include', array($this,'load_car_template'), 99);

   
    add_action( 'wp_enqueue_scripts', array($this,'my_plugin_enqueue_scripts' ));



  }


 
  
  function my_plugin_enqueue_scripts() {

    if ( is_singular('car') ) {
      wp_enqueue_style( 'my-single-car-style',plugins_url( '/css/car.css', __FILE__ ));
  }

  if ( is_post_type_archive( 'car' ) ) {
    wp_enqueue_style( 'my-single-car-archive-style',plugins_url( '/css/car-archive.css', __FILE__ ));
    }


    wp_enqueue_style( 'bootstrap', plugins_url( 'css/bootstrap.min.css', __FILE__ ), array(), '4.6.0', 'all' );

    wp_enqueue_style( 'bootstrap-icons', plugins_url( 'css/bootstrap-icons/font/bootstrap-icons.css', __FILE__ ));

    wp_enqueue_script( 'my-plugin-script', plugins_url( 'js/my-plugin.js', __FILE__ ), array( 'jquery' ), '1.0', true );
  }

  function load_car_template($template) {
    if ( is_singular('car') ) {
        $template = plugin_dir_path(__FILE__) . '/single-car.php';
    }
    if ( is_post_type_archive( 'car' ) ) {
      $new_template = plugin_dir_path( __FILE__ ) . 'archive-car.php';
      if ( '' != $new_template ) {
        return $new_template ;
      }
    }
    
    return $template;
}






// Register Custom Taxonomy
function custom_taxonomy_car_brands() {

	$labels = array(
		'name'                       => _x( 'Car Brands', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Car Brand', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Car Brands', 'text_domain' ),
		'all_items'                  => __( 'All Car Brands', 'text_domain' ),
		'parent_item'                => __( 'Parent Car Brand', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Car Brand:', 'text_domain' ),
		'new_item_name'              => __( 'New Car Brand Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Car Brand', 'text_domain' ),
		'edit_item'                  => __( 'Edit Car Brand', 'text_domain' ),
		'update_item'                => __( 'Update Car Brand', 'text_domain' ),
		'view_item'                  => __( 'View Car Brand', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate car brands with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove car brands', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Car Brands', 'text_domain' ),
		'search_items'               => __( 'Search Car Brands', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No car brands', 'text_domain' ),
		'items_list'                 => __( 'Car Brands list', 'text_domain' ),
		'items_list_navigation'      => __( 'Car Brands list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'car_brands', array( 'car' ), $args );

/*$car_brands = array( 'Acura', 'Audi', 'BMW', 'Buick', 'Cadillac', 'Chevrolet', 'Chrysler', 'Citroen', 'Dacia', 'Daewoo', 'Dodge', 'Eagle', 'Fiat', 'Ford', 'Freightliner', 'GMC', 'Geo', 'Honda', 'Holden', 'Hummer', 'Hyundai', 'Infiniti', 'Isuzu', 'Jaguar' );

foreach ( $car_brands as $brand ) {
	wp_insert_term(
		$brand, // the term
		'car_brands', // the taxonomy
		array(
		  'description'=> '',
		  'slug' => strtolower( $brand )
		)
	);
} */




}



  /**
 * Adds the meta box stylesheet when appropriate
 */
function prfx_admin_styles(){
  global $typenow;
  if( $typenow == 'car' ) {
      wp_enqueue_style( 'prfx_meta_box_styles', plugin_dir_url( __FILE__ ) . 'meta-box-styles.css' );
  }
}

  public function activate(){
    $this->kh_custom_car();
    flush_rewrite_rules();  }

//function to create a post type and add it to the admin menu
  public function kh_custom_car() {
    $labels = array(
      'name'               => _x( 'Cars', 'post type general name' ),
      'singular_name'      => _x( 'Car', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'car' ),
      'add_new_item'       => __( 'Add New Car' ),
      'edit_item'          => __( 'Edit Car' ),
      'new_item'           => __( 'New Car' ),
      'all_items'          => __( 'All Car' ),
      'view_item'          => __( 'View Car' ),
      'search_items'       => __( 'Search Cars' ),
      'not_found'          => __( 'No cars found' ),
      'not_found_in_trash' => __( 'No cars found in the Trash' ),
     // 'parent_item_colon'  => ’,
      'menu_name'          => 'Post Cars' //how it appears on the admin menu
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds data about cars',
      'public'        => true,
      'menu_position' => 15,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'car', $args ); 
  }

  //adding custom meta box for color and model
  public function kh_save_custom_color() {
    add_meta_box( 
      'kh_save_custom_color',
      __( 'Car Descriptions', 'kh-post-cars' ),
      array( $this, 'kh_custom_car_content' ),
      'car',
      
      'normal', 'low'
    );}

    public function kh_custom_car_content( $post ) {
      $brand = get_post_meta( $post->ID, 'brand', true );
      $fuel = get_post_meta($post->ID, 'fuel', true);
      $video_url_review = get_post_meta( $post->ID, 'review', true );
      // retrieved using ChatGpt
      $year = get_post_meta( $post->ID, 'year', true );
      $power_steering_fluid = get_post_meta( $post->ID, 'power_steering_fluid', true );
      $tires_wheels = get_post_meta( $post->ID, 'tires_wheels', true );
      $wiper_blade_front = get_post_meta( $post->ID, 'wiper_blade_front', true );
      $fluid_leaks = get_post_meta( $post->ID, 'fluid_leaks', true );
      $fluid_check = get_post_meta( $post->ID, 'fluid_check', true );

      $coolant_antifreeze = get_post_meta( $post->ID, 'coolant_antifreeze', true );
      $clock = get_post_meta( $post->ID, 'clock', true );
      $check_engine_light = get_post_meta( $post->ID, 'check_engine_light', true );
      $brake_fluid = get_post_meta( $post->ID, 'brake_fluid', true );
      $belts = get_post_meta( $post->ID, 'belts', true );
      		  
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
      
      //battery
      $clean_battery_and_terminals = get_post_meta( $post->ID, 'clean_battery_and_terminals', true );
      $replace_battery = get_post_meta( $post->ID, 'replace_battery', true );
      $jump_start = get_post_meta( $post->ID, 'jump_start', true );

      $airconditioner = get_post_meta( $post->ID, 'airconditioner', true );

      $air_filter_engine = get_post_meta( $post->ID, 'air_filter_engine', true );
      $air_filter_cabin = get_post_meta( $post->ID, 'air_filter_cabin', true );
     
      
      $fix_leaks = get_post_meta($post->ID, 'fix_leaks', true);
      $check_oil_level = get_post_meta($post->ID, 'check_oil_level', true);
      $change_oil = get_post_meta($post->ID, 'change_oil', true);
      $add_oil = get_post_meta($post->ID, 'add_oil', true);



      wp_nonce_field( plugin_basename( __FILE__ ), 'kh_custom_car_content_nonce' );
  
      //Call the form.php file that conatins all the html content
      require_once plugin_dir_path(__FILE__).'form.php';
  
    }

    
    //Second group of Fields
   /* add_meta_box( 
      'kh_save_custom_color2',
      __( 'Car Color2', 'kh-post-cars' ),
      array( $this, 'kh_custom_car_content2' ),
      'car',
      
      'normal', 'low'
    );
  }

  public function kh_custom_car_content2( $post ) {
    $brand = get_post_meta( $post->ID, 'brand', true );
    $fuel = get_post_meta($post->ID, 'fuel', true);
    wp_nonce_field( plugin_basename( __FILE__ ), 'kh_custom_car_content_nonce' );

    //Call the form.php file that conatins all the html content
    require_once plugin_dir_path(__FILE__).'form2.php';

  }*/


  
//Creating Custom Template
function load_single_ad_template( $template ) {

      

  global $post;
  
     
  
         if ( 'car' === $post->post_type && locate_template( ['single-cars.php'] ) !== $template ) {
  
             /*
  
              * This is an 'cars' Custom post
  
              * AND a 'single car template' is not found on
  
              * theme or child theme directories, so load it
  
              * from our plugin directory from inside a /templates folder.
  
              */
  
             return plugin_dir_url( __FILE__ ).'templates/single-cars.php';
  
         }
  
     
  
         return $template;
  
     }

  function kh_custom_car_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;
  
    if ( !wp_verify_nonce( $_POST['kh_custom_car_content_nonce'], plugin_basename( __FILE__ ) ) )
    return;
  
if (get_post_type($post_id) !== 'car') {
       if ( !current_user_can( 'edit_page', $post_id ) )
      return;
    } else {
      if ( !current_user_can( 'edit_post', $post_id ) )
      return;
    }
    $fields = ['car_color','car_model','fuel','brand','year','review','year',
    'power_steering_fluid','add_oil', 'change_oil', 'check_oil_level', 'fix_leaks',
    'tires_wheels',
    'wiper_blade_front','jump_start','replace_battery',
    'fluid_leaks','fluid_check',
    'coolant_antifreeze',
    'clock',
    'check_engine_light',
    'brake_fluid',
    'belts',
    'clean_battery_and_terminals','battery1','airconditioner','Brake Light' 
    ,'Center Brake Light', 
    'Daytime Running Light','turn_signal_rear','turn_signal_front','tail_light','reverse_light',
    'parking_light','highbeam','headlight','fog_light','daytime_running_light','center_brake_light','brake_light', 

    'air_filter_engine',
    'air_filter_cabin'];
    foreach($fields as $field){
      if(array_key_exists($field,$_POST)){
        update_post_meta( $post_id, $field,sanitize_text_field( $_POST[$field] ) );
      }
    }
  
  }

}





$newcar = new KH_Post_Cars();
