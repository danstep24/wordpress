<?php
/**
 * Template Name: Full Width Page home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper-home">

	<div id="homepage-background">

		<div class="<?php echo esc_attr( $container ); ?>" id="content">

			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->

				</div><!-- #primary -->

			</div><!-- .row end -->

		</div><!-- Container end -->

	</div>

	<div class="<?php echo esc_attr( $container ); ?>" id="sections">
		
		// projects section


	</div><!-- Container end -->




		// projects section

		// projects wp_query --> DB get the projects CPT
		
		<div class="container">
			<div class="row">
				<?php $skills_query = new WP_Query( array( 'post_type' => 'skills' ) ); ?>
		
				<?php while ($skills_query -> have_posts() ) :$skills_query -> the_post(); ?>
				
				<?php get_template_part( 'loop-templates/content', 'skill' ); ?>
			
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>

		// new loop, go through projects

		// use new template get_template_part( 'loop-templates/projects-section' );



		// skills section

		// skills wp_query --> DB get the skills CPT

		// new loop, go through skills

		// use new template get_template_part( 'loop-templates/skills-section' );




		?>
	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
