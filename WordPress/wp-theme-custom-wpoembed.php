<?php

/* Theme: Add Custom Parameters to OEmbed (http://www.limecanvas.com/passing-parameters-to-a-video-link-in-a-wordpress-custom-field/)
=================================================================================================================================== */
add_filter('oembed_result', 'cc_oembed_result', 10, 3);
function cc_oembed_result($html, $url, $args)
{
    if ( $args ) {
        $newargs = $args;
        $parameters = http_build_query($newargs);
        $html = str_replace('?feature=oembed', '?feature=oembed' . '&amp;' . $parameters, $html);
    }
    return $html;
}

/*
*
* How to use in template
* List of parameters - https://developers.google.com/youtube/player_parameters
*
*/
echo wp_oembed_get( $videourl, array( 'showinfo' => 0, 'autoplay' => 1 ) );