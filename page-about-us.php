<?php
/**
 * The template for displaying the about us page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about">
	<div id="intro">
		<p><span>Accelerate</span> is a strategy and marketing agency located in the<br> heart of NYC. Our goal is to build businesses by making our <br>clients visible and making their customers smile. </p>
	</div>
	</section>
<section class="about-services">

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->

</section>


<?php get_footer(); ?>