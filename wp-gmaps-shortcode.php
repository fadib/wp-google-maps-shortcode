<?php
/*
Plugin Name: WP Google Maps Shortcode
Plugin URL: http://fadib.net/wp-google-maps-shortcode
Description: Insert Google Maps into your post/page using Shortcode
Version: 1.0
Author: Fahmi Adib
Author URI: http://fadib.net
Contributors: fahmiadib
*/

function wp_gmaps_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'api_key' 	=> false,
		'address' 	=> false,
		'lat' 		=> false,
		'lng' 		=> false,
		'zoom' 		=> '10',
		'height'    => '350px',
		'width'		=> '350px',
		'marker'    => 1,
	), $atts );
	
	wp_print_scripts( 'wp-gmaps-api' );
	
	$map_id = uniqid( 'wp_gmaps_' );
	
	// show marker or not
	$atts['marker'] = (int) $atts['marker'] ? true : false;

	ob_start(); ?>
	<div class="wp_gmaps_canvas" id="<?php echo esc_attr( $map_id ); ?>" style="height: <?php echo esc_attr( $atts['height'] ); ?>; width: <?php echo esc_attr( $atts['width'] ); ?>"></div>
    <script type="text/javascript">
		var map_<?php echo $map_id; ?>;
		var marker_<?php echo $map_id; ?>;
		var geocoder = new google.maps.Geocoder();
		function wp_gmaps_<?php echo $map_id; ?>() {
			var location = new google.maps.LatLng("<?php echo esc_attr( $atts['lat'] ); ?>", "<?php echo esc_attr( $atts['lng'] ); ?>");
			var map_options = {
				zoom: <?php echo esc_attr( $atts['zoom'] ) ?>,
				center: location,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map_<?php echo $map_id; ?> = new google.maps.Map(document.getElementById("<?php echo $map_id; ?>"), map_options);
			
			<?php if ( $atts['marker'] ): ?>
			marker_<?php echo $map_id ?> = new google.maps.Marker({
				position: location,
				map: map_<?php echo $map_id; ?>
			});
			<?php endif; ?>
			
			<?php if ( $atts['address'] ): ?>
				var address = "<?php echo esc_attr( $atts['address'] ) ?>";
				geocoder.geocode( { 'address': address }, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
		  				map_<?php echo $map_id; ?>.setCenter(results[0].geometry.location);
						if (marker_<?php echo $map_id ?>) {
							marker_<?php echo $map_id ?>.setPosition(results[0].geometry.location);
						}
				    } else {
				      	alert('Address not found: ' + address);
				    }
				});
			<?php endif; ?>
		}
		wp_gmaps_<?php echo $map_id; ?>();
	</script>
	<?php
	
	return ob_get_clean();
}
add_shortcode( 'wp_gmaps', 'wp_gmaps_shortcode' );

/**
 * Loads Google Map API
 *
 * @since       1.0
 * @return      void
*/
function wp_gmaps_load_scripts() {
	wp_register_script( 'wp-gmaps-api', '//maps.google.com/maps/api/js?sensor=false' );
}
add_action( 'wp_enqueue_scripts', 'wp_gmaps_load_scripts' );
