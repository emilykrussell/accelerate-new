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
<section class="services">
	<div class="prefix">
		<h5>Our Services</h5>
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here’s a brief overview of our offered services</p>
	</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php query_posts('post_type=services&order=ASC'); ?>

			<?php while ( have_posts() ) : the_post(); 
				$service = get_field('service');
				$image_1 = get_field('image_1');
				$size = 'full';
			?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<figure class="service-image">
				<?php if($image_1) { ?>
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					<?php } ?>
			</figure>
			<div class="service-content">
				
				<h3><?php echo $service; ?></h3>
				
				<?php the_content(); ?>
			</div>
			</div>

			<?php endwhile; // end of the loop. ?>


		</div><!-- #content -->
	</div><!-- #primary -->

</section>


<?php get_footer(); ?>