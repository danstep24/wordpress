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
		<video playsinline autoplay muted loop id="bgvid">
			<source src="http://192.168.33.11/wp-content/uploads/2018/02/background-1.mp4" type="video/mp4">
		</video>

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
	</div>
</div>
		
		<!--/projects section-->
		<div class="projects-background">
			<div class="container" id="projects">
				<h1 id="skill-h1">Recent Work</h1>	

				<div class="card-deck">
					<?php $project_query = new WP_Query( array( 'post_type' => 'projects' ) ); ?>
					
					<?php while ($project_query -> have_posts() ) :$project_query -> the_post();  ?>
					
					<?php get_template_part( 'loop-templates/content', 'project' ); ?>
				
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
		<!-- Skill section --> 
		<div class="skills-background">
			<div class="container" id="skills">
				<h1 id="skill-h1">Skills</h1>	

				<div class="row">
					<?php $skills_query = new WP_Query( array( 'post_type' => 'skills' ) ); ?>
			
					<?php while ($skills_query -> have_posts() ) :$skills_query -> the_post(); ?>
					
					<?php get_template_part( 'loop-templates/content', 'skill' ); ?>
				
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>

		
		<!-- Contact section -->
		<div id="contact-background">
			<div class="container" id="contact">
					
							
					<?php get_template_part( 'page-templates/contact-page' ); ?>
				
			</div>
		</div>


<div class="skills-background">
	<?php get_footer(); ?>
</div>
