<!-- CSS -->
/*
Theme Name: 
Theme URI: 
Author: 
Author URI: 
Version: 1.0
*/

<!-- Head -->
<?php wp_head(); ?>
<?php bloginfo('template_url'); ?>/
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

<!-- Foot -->
<?php wp_footer(); ?>

<!-- Page / Single -->
<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php get_footer(); ?>

<!-- Basic Loop -->
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
			//
		the_title();
		the_content();
			//
	}
}
?>

<!-- Simplified Loop -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<!-- Do Something -->
	<?php endwhile; ?>
<?php else : ?>
	<!-- Do Something Else -->
<?php endif; ?>

<!-- Multiple Loops -->
<?php rewind_posts(); ?> <!-- (At end of first loop) -->

<!-- Custom Post Type Loop -->
<?php $loop = new WP_Query( array( 'post_type' => 'ENTERPOSTTYPE', 'posts_per_page' => 20, 'orderby'=>'menu_order', 'order'=>ASC ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<?php the_post_thumbnail('small'); ?>
	<h2><?php the_title( ); ?></h2>
	<?php the_content(); ?>
<?php endwhile; ?>

<!-- Loop Calls -->
<?php the_title() ;?>
<?php the_content(); ?>
<?php the_author(); ?>
<?php the_excerpt(); ?>
<?php the_ID(); ?>
<?php the_title(); ?>
<?php the_time(); ?>
<?php the_permalink() ?>

<!-- Logo -->
<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="logo-image"></a>

<!-- Conditionals -->
comments_open
has_tag
has_term
in_category
is_404
is_admin
is_archive
is_attachment
is_author
is_category
is_child_theme
is_comments_popup
is_date
is_day
is_feed
is_front_page
is_home
is_month
is_multi_author
is_multisite
is_main_site
is_page
is_page_template
is_paged
is_preview
is_rtl
is_search
is_single
is_singular
is_sticky
is_super_admin
is_tag
is_tax
is_time
is_trackback
is_year
pings_open

<!-- Media -->
<?php echo wp_oembed_get('videoURL');  ?>

<!-- Including Files -->
<?php get_template_part( $slug ); ?>

<!-- Loop Debug -->
<?php print_r($wp_query); ?>