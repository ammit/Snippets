<?php

/**
 *
 * Get RSS Feed
 *
 */

$rss = new DOMDocument();
$feed_url = "http://wordpress.com/rss";
$rss->load($feed_url);
$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
	$item = array ( 
		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
		);
	array_push($feed, $item);
}
$limit = 10;
for($x=0;$x<$limit;$x++) {
	$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
	$title = str_replace(" | Johnjoe McFadden", "", $title);
	$link = $feed[$x]['link'];
	$description = $feed[$x]['desc'];
	$description = limit_words($description, 30);
	$date = date('l F d, Y', strtotime($feed[$x]['date']));
	echo '<article class="article-entry">';
	echo '<h1><a href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h1>';
	echo '<p class="date"><small><em>Posted on '.$date.'</em></small></p>';
	echo '<p>'.$description.'...</p>';
	echo '<a class="button small" href="'.$link.'" title="'.$title.'" target="_blank">Read the full article...</a><br />';
	echo '</article>';
}
?>