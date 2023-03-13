<div class="hcf_box">
<style scoped>
        .hcf_box{
            display: grid;
            
        }
        .hcf_field{
            display: contents;
        }
    </style>
        <legend>Grouped Fields 1</legend>
        <p>
        <label for="fuel"><?php _e( 'Brand:', 'textdomain' ); ?></label>
        <select name="brand" id="brand" class="form-control">
            <option value="">Select Maker</option>
            <option value="Acura" <?php selected( $brand, 'Acura' ); ?>>Acura</option>
            <option value="Audi" <?php selected( $brand, 'Audi' ); ?>>Audi</option>
            <option value="BMW" <?php selected( $brand, 'BMW' ); ?>>BMW</option>
            <option value="Buick" <?php selected( $brand, 'Buick' ); ?>>Buick</option>
            <option value="Cadillac" <?php selected( $brand, 'Cadillac' ); ?>>Cadillac</option>
            <option value="Chevrolet" <?php selected( $brand, 'Chevrolet' ); ?>>Chevrolet</option>
            <option value="Chrysler" <?php selected( $brand, 'Chrysler' ); ?>>Chrysler</option>
            <option value="Citroen" <?php selected( $brand, 'Citroen' ); ?>>Citroën</option>
            <option value="Dacia" <?php selected( $brand, 'Dacia' ); ?>>Dacia</option>
            <option value="Daewoo" <?php selected( $brand, 'Daewoo' ); ?>>Daewoo</option>
            <option value="Dodge" <?php selected( $brand, 'Dodge' ); ?>>Dodge</option>
            <option value="Eagle" <?php selected( $brand, 'Eagle' ); ?>>Eagle</option>
            <option value="Fiat" <?php selected( $brand, 'Fiat' ); ?>>Fiat</option>
            <option value="Ford" <?php selected( $brand, 'Ford' ); ?>>Ford</option>
            <option value="Freightliner" <?php selected( $brand, 'Freightliner' ); ?>>Freightliner</option>
            <option value="GMC" <?php selected( $brand, 'GMC' ); ?>>GMC</option>
            <option value="Geo" <?php selected( $brand, 'Geo' ); ?>>Geo</option>
            <option value="Honda" <?php selected( $brand, 'Honda' ); ?>>Honda</option>
            <option value="Holden" <?php selected( $brand, 'Holden' ); ?>>Holden</option>
            <option value="Hummer" <?php selected( $brand, 'Hummer' ); ?>>Hummer</option>
            <option value="Hyundai" <?php selected( $brand, 'Hyundai' ); ?>>Hyundai</option>
            <option value="Infiniti" <?php selected( $brand, 'Infiniti' ); ?>>Infiniti</option>
            <option value="Isuzu" <?php selected( $brand, 'Isuzu' ); ?>>Isuzu</option>
            <option value="Jaguar" <?php selected( $brand, 'Jaguar' ); ?>>Jaguar</option>
        </select>
    </p>

    
     <p class="meta-options hcf_field">
        <label for="car_model">Model:</label>
        <input type="text" id="car_model" name="car_model" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_model', true ) ); ?>">
    </p>

    <p class="meta-options hcf_field">
        <label for="year">Year:</label>
        <input type="text" id="year" name="year" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'year', true ) ); ?>">
    </p>

    <p class="meta-options hcf_field">
        <label for="fuel"><?php _e( 'Fuel Type:', 'textdomain' ); ?></label>
        <select name="fuel" id="fuel">
            <option value="Diesel" <?php selected( $fuel, 'Diesel' ); ?>><?php _e( 'Diesel', 'textdomain' ); ?></option>
            <option value="Hybrid" <?php selected( $fuel, 'Hybrid' ); ?>><?php _e( 'Hybrid', 'textdomain' ); ?></option>
            <option value="Electro" <?php selected( $fuel, 'Electro' ); ?>><?php _e( 'Electro', 'textdomain' ); ?>
            </option>
            <option value="Hydrogen" <?php selected( $fuel, 'Hydrogen' ); ?>><?php _e( 'Hydrogen', 'textdomain' ); ?>
            </option>
        </select>
    </p>
    
    <p class="meta-options hcf_field">
     <label for="car_color">Ownership Review:</label>
        <input type="text" id="car_review" name="car_review" placeholder="Car Overview" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_review', true ) ); ?>">

    </p>

    <p class="meta-options hcf_field">
     <label for="car_color">Car color:</label>
        <input type="text" id="car_color" name="car_color" placeholder="Enter car color" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_color', true ) ); ?>">

    </p>

  
    <p class="meta-options hcf_field">
  <label for="power_steering_fluid">Power Steering Fluid:</label>
  <input type="text" id="power_steering_fluid" name="power_steering_fluid" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'power_steering_fluid', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
     <label for="air_conditioner">Air Conditioner:</label>
        <input type="text" id="air_conditioner" name="air_conditioner" placeholder="Enter Air Conditioner" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'air_conditioner', true ) ); ?>">

    </p>

    <p class="meta-options hcf_field">
     <label for="air_filter">Air Filter:</label>
        <input type="text" id="air_filter" name="air_filter" placeholder="Enter Air Filter" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'air_filter', true ) ); ?>">

    </p>


  


<p class="meta-options hcf_field">
  <label for="tires_wheels">Tires & Wheels:</label>
  <input type="text" id="tires_wheels" name="tires_wheels" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'tires_wheels', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="wiper_blade_front">Wiper Blade (Front):</label>
  <input type="text" id="wiper_blade_front" name="wiper_blade_front" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'wiper_blade_front', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="fluid_leaks">Fluid Leaks:</label>
  <input type="text" id="fluid_leaks" name="fluid_leaks" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'fluid_leaks', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="coolant_antifreeze">Coolant (Antifreeze):</label>
  <input type="text" id="coolant_antifreeze" name="coolant_antifreeze" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'coolant_antifreeze', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="clock">Clock:</label>
  <input type="text" id="clock" name="clock" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'clock', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="check_engine_light">Check Engine Light:</label>
  <input type="text" id="check_engine_light" name="check_engine_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'check_engine_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="brake_fluid">Brake Fluid:</label>
  <input type="text" id="brake_flu" name="brake_fluid"
value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'brake_fluid', true ) ); ?>">

</p>
<p class="meta-options hcf_field">
  <label for="belts">Belts:</label>
  <input type="text" id="belts" name="belts" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'belts', true ) ); ?>">
</p>

<h3>Battery</h3>
<p class="meta-options hcf_field">
  <label for="clean_battery_and_terminals">Clean Battery & Terminals:</label>
  <input type="text" id="clean_battery_and_terminals" name="clean_battery_and_terminals" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'clean_battery_and_terminals', true ) ); ?>">
</p>
<p class="meta-options hcf_field">
  <label for="jump_start">Jumpstart:</label>
  <input type="text" id="jump_start" name="jump_start" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'jump_start', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="replace_battery">Replace:</label>
  <input type="text" id="replace_battery" name="replace_battery" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'replace_battery', true ) ); ?>">
</p>


<h3>Oil</h3>
<p class="meta-options hcf_field">
  <label for="air_filter_cabin">Add Oil</label>
  <input type="text" id="add_oil" name="add_oil" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'add_oil', true ) ); ?>">
</p>
<p class="meta-options hcf_field">
  <label for="air_filter_cabin">Check Oil Level</label>
  <input type="text" id="oil_level" name="oil_level" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'oil_level', true ) ); ?>">
</p>
<p class="meta-options hcf_field">
  <label for="change_oil">Change oil</label>
  <input type="text" id="change_oil" name="change_oil" value="<?php echo esc_attr($change_oil); ?>">
</p>
<p class="meta-options hcf_field">
  <label for="check_oil_level">check oil level</label>
  <input type="text" id="check_oil_level" name="check_oil_level" value="<?php echo esc_attr($check_oil_level); ?>">
</p>
<p class="meta-options hcf_field">
  <label for="fix_leaks">Fix leaks</label>
  <input type="text" id="fix_leaks" name="fix_leaks" value="<?php echo esc_attr($fix_leaks); ?>">
</p>

<h3>Light</h3>

<p class="meta-options hcf_field">
  <label for="brake_light">Brake Light</label>
  <input type="text" id="brake_light" name="brake_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'brake_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="center_brake_light">Center Brake Light</label>
  <input type="text" id="center_brake_light" name="center_brake_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'center_brake_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="daytime_running_light">Daytime Running Light</label>
  <input type="text" id="daytime_running_light" name="daytime_running_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'daytime_running_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="turn_signal_rear">Turn Signal Rear</label>
  <input type="text" id="turn_signal_rear" name="turn_signal_rear" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'turn_signal_rear', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="turn_signal_front">Turn Signal Front</label>
  <input type="text" id="turn_signal_front" name="turn_signal_front" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'turn_signal_front', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="tail_light">Tail Light</label>
  <input type="text" id="tail_light" name="tail_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'tail_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="reverse_light">Reverse Light</label>
  <input type="text" id="reverse_light" name="reverse_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'reverse_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="parking_light">Parking Light</label>
  <input type="text" id="parking_light" name="parking_light" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'parking_light', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="highbeam">Highbeam</label>
  <input type="text" id="highbeam" name="highbeam" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'highbeam', true ) ); ?>">
</p>

<p class="meta-options hcf_field">
  <label for="headlight">Headlight</label>
  <input type="text" id="headlight" name="headlight" 
  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'headlight', true ) ); ?>">
</p>



  
