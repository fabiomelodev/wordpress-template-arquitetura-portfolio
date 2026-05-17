<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Dev
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()):
			the_post(); ?>
			<!-- banner -->
			<?php echo get_template_part('template-parts/home/content', 'banner'); ?>
			<!-- end banner -->

			<!-- about -->
			<?php echo get_template_part('template-parts/home/content', 'about'); ?>
			<!-- end about -->

			<!-- what we do -->
			<?php echo get_template_part('template-parts/home/content', 'what-we-do'); ?>
			<!-- end what we do -->

			<!-- budget -->
			<?php echo get_template_part('template-parts/home/content', 'budget'); ?>
			<!-- end budget -->

			<!-- projects -->
			<?php echo get_template_part('template-parts/home/content', 'projects'); ?>
			<!-- end projects -->

			<!-- budget second -->
			<?php echo get_template_part('template-parts/home/content', 'budget-second'); ?>
			<!-- end budget second -->

			<!-- ratings -->
			<?php echo get_template_part('template-parts/home/content', 'ratings'); ?>
			<!-- end ratings -->

			<!-- contact -->
			<?php echo get_template_part('template-parts/home/content', 'contact'); ?>
			<!-- end contact -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
