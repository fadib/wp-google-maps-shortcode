=== WP Google Maps Shortcode ===
Author URI: https://github.com/frankent/wp-google-maps-shortcode
Plugin URI: http://fahmiadib.wordpress.com/wp-google-maps-shortcode/
Contributors: fahmiadib, frankent
Tags: gmaps, google maps, short code, maps
Requires at least: 3.5
Tested up to: 5.2.2
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Insert Google Maps into your post or page using Shortcode

## Please define google map api key in theme function file

```PHP
define('gg_map_api_key', '__KEY__');
```

## Required params

```PHP
[
    'address' 		=> false,   // Address text
    'lat' 			=> false,   // Lat number
    'lng' 			=> false,   // Lng number
    'zoom' 			=> '10',    // Zoom level (default is 10)
    'height'    	=> '350px', // Width (default 350px - you can use % or px)
    'width'			=> '350px', // Height (default 350px - you can use % or px)
    'marker'    	=> 0,       // marker (1 to enable marker)
    'infowindow'	=> false    // Content string (Optinal)
]
```

== Description ==

**WP Google Maps Shortcode** - Insert Google Maps into your post or page using Shortcode.

Maps are displayed with the [wp_gmaps] short code:

`[wp_gmaps address="San Francisco, California" zoom="7" marker="1"]`

- Support geocoding service
- Support latitude and longitude parameters
- Support zoom
- Enable/Disable marker

== Installation ==

1. Activate the plugin
2. Add [wp_gmaps address="your address here"] or [wp_gmaps lat="your latitude" lng="your longitude"] to any post or page

== Changelog ==

= 1.1 =

- Utilize Transients API for delivering cached maps

= 1.0 =

- First release.
