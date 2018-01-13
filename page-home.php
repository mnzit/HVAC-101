<?php
/**
Template Name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HVAC101
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					

					<section>Slider</section>
					<section>About Us</section>
					<section>Services</section>
					<section>Who We Serve</section>
					<section>Recent Posts</section>
					<section>Promotions</section>
					<section>SEER Calculator</section>
					<section>Troubleshooter</section>

					
					<section>=============</section>
						

					<section>Maintainence Plan</section>
					<section>Financing</section>
					<section>Some Extra Page Content</section>
					<section>Some Extra Page Content 2</section>
					<section>Some Extra Page Content 3 ++</section>

					<section>=============</section>


					<section>Brands We Serve</section>
					<section>Our Clients</section>
					<section>Certifications</section>
					<section>Our Team</section>
					<section>Testimonials</section>
					<section>Featured Manufacturer</section>
					<section>Sign Up for Newsletter</section>
					<section>Service Areas</section>
					

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--  .row -->
	</div><!--  .container -->
<?php
get_footer();
