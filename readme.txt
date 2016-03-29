=== WP Google Maps Shortcode ===
Author URI: http://fahmiadib.wordpress.com
Plugin URI: http://fahmiadib.wordpress.com/wp-google-maps-shortcode/
Contributors: fahmiadib, siamkreative
Tags: gmaps, google maps, short code, maps
Requires at least: 3.5
Tested up to: 3.9.1
Stable tag: 1.1b
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Insert Google Maps into your post or page using Shortcode

== Description ==

**WP Google Maps Shortcode** - Insert Google Maps into your post or page using Shortcode.

Maps are displayed with the [wp_gmaps] short code:

`[wp_gmaps address="San Francisco, California" zoom="7" marker="1"]`

* Fully Responsive
* Support geocoding service
* Support latitude and longitude parameters
* Support zoom
* Ability to disable scrollwheel
* Enable/Disable marker

== Installation ==

1. Activate the plugin
2. Add [wp_gmaps address="your address here"] or [wp_gmaps lat="your latitude" lng="your longitude"] to any post or page
3. To add your Google API Key, you need to define a constant in your theme's functions.php `define( 'WP_GMAPS_GOOGLE_API_KEY', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX' );`. See <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">Obtaining an API key</a>.

== Changelog ==

= 1.1 =

* Utilize Transients API for delivering cached maps

= 1.0 =

* First release.