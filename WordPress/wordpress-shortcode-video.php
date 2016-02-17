<?php
/**
*
* Shortcode: add in video embed code functionality.
*
**/
function ms_video($atts)
{
    // Get Image URLs
    $video_url = $atts['url'];
    $video_embed = wp_oembed_get( $video_url );
    $video_width = $atts['width'];

    // var_dump($atts);
    $figure = <<<FIGURE
    <div class='video-embed' style='max-width:{$video_width}'>{$video_embed}</div>
FIGURE;
    return $figure;
}

add_shortcode('video', 'ms_video');

// Use FitVid for responsive videos (https://github.com/davatron5000/FitVids.js)