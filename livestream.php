<?php
/**
Plugin Name: CAC Livestream
Plugin URI: https://github.com/cuny-academic-commons/cac-livestream
Version: 0.0.1
Author: Dominic Giglio
Description: Creates a shortcode to embed a streaming video on any page.
*/

/**
 * Protection 
 * 
 * This string of code will prevent hacks from accessing the file directly.
 */
defined( 'ABSPATH' ) or die( 'Cannot access pages directly.' );

/**
 * Shortcode
 */
function cac_livestream( $atts, $content = null ) {

  // combine some defautls with the $atts provided by the user
  extract( shortcode_atts( array(
    'width' => '800',
    'height' => '500',
    'image' => plugins_url( 'cac-livestream/balloons.jpg' , dirname(__FILE__) ),
    'autoplay' => 'false',
    'mp4file' => '',
    'flashfile' => '',
    'flashstream' => ''
  ), $atts ) );

  // create and return all the javascript and page structure needed to build the player
  return "<script type='text/javascript' src='" . plugins_url( 'cac-livestream/jwplayer.js' , dirname(__FILE__) ) . "'></script>

          <video
            controls
            width='" . $width . "'
            height='" . $height . "'
            poster='" . $image . "'
            id='cac_livestream_player'>
          <source src='" . $mp4file . "' type='video/mp4'>
          </video>

          <script type='text/javascript'>
            jwplayer('cac_livestream_player').setup({
              autoplay: $autoplay,
              modes: [
                {type: 'html5' },
                {type: 'flash', 
                  src: '" . plugins_url( 'cac-livestream/player.swf' , dirname(__FILE__) ) . "',
                  config: {
                    file: '" . $flashfile . "',
                    streamer: '" . $flashstream . "',
                    provider: 'rtmp'
                  }
                }
              ]
            });
          </script>";

}
add_shortcode( 'livestream', 'cac_livestream' );

?>