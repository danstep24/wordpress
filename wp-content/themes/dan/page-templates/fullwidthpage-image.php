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
		
		<!--/projects section-->
	
		<div class="container" id="projects">
			<h1 id="skill-h1">Project</h1>	

			<div class="card-deck">
				<?php $project_query = new WP_Query( array( 'post_type' => 'projects' ) ); ?>
				
				<?php while ($project_query -> have_posts() ) :$project_query -> the_post();  ?>
				
				<?php get_template_part( 'loop-templates/content', 'project' ); ?>
			
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>


		<!-- Skill section --> 
		
		<div class="container" id="skills">
			<h1 id="skill-h1">Skills</h1>	

			<div class="row">
				<?php $skills_query = new WP_Query( array( 'post_type' => 'skills' ) ); ?>
		
				<?php while ($skills_query -> have_posts() ) :$skills_query -> the_post(); ?>
				
				<?php get_template_part( 'loop-templates/content', 'skill' ); ?>
			
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>

		
		<!-- Contact section -->

		<div class="container" id="contact">
			<h1 id="contact-h1">Contact</h1>	
						
				<?php get_template_part( 'page-templates/contact-page' ); ?>
			
		</div>



	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
