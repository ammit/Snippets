<?php

/* Theme: Archive page headings
========================================================================== */
function cc_archive_headings()
{
    if (is_date()) {
        if (is_day()) :
            printf(__('Daily News Archive: <span>%s</span>', 'fairenergy'), get_the_date());
        elseif (is_month()) :
            printf(__('Monthly News Archive: <span>%s</span>'), get_the_date('F Y'));
        elseif (is_year()) :
            printf(__('Yearly News Archive: <span>%s</span>', 'fairenergy'), get_the_date('Y'));
        else :
            _e('News Archives', 'fairenergy');
        endif;
    } elseif (is_category()) {
        printf(__('News: %s', 'fairenergy'), '<span>' . single_cat_title('', false) . '</span>');
    } else {
        return get_queried_object()->name;
    }
}