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
     <label for="car_color">car_color:</label>
        <input type="text" id="car_color" name="car_color" placeholder="Enter car color" 
        value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_color', true ) ); ?>">

    </p>
     <p class="meta-options hcf_field">
        <label for="car_model">Field 2:</label>
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



  
