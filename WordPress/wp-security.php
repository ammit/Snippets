<?php

// Remove Version Number
remove_action('wp_head', 'wp_generator');

?>

//** .htaccess **//

//Block Script Injections
Options +FollowSymLinks
RewriteEngine On
RewriteCond %{QUERY_STRING} (\<|%3C).*script.*(\>|%3E) [NC,OR]
RewriteCond %{QUERY_STRING} GLOBALS(=|\[|\%[0-9A-Z]{0,2}) [OR]
RewriteCond %{QUERY_STRING} _REQUEST(=|\[|\%[0-9A-Z]{0,2})
RewriteRule ^(.*)$ index.php [F,L]

//Block Scrapers
RewriteEngine On
#Replace ?mysite\.com/ with your blog url
RewriteCond %{HTTP_REFERER} !^http://(.+\.)?mysite\.com/ [NC]
RewriteCond %{HTTP_REFERER} !^$
#Replace /images/nohotlink.jpg with your "don't hotlink" image url
RewriteRule .*\.(jpe?g|gif|bmp|png)$ /images/nohotlink.jpg [L]

//Block wp-config.php Edits
<files wp-config.php>
order allow,deny
deny from all
</files>