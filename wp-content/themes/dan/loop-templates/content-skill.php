<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
?>
<div class="col-sm">

<div class="skill-container"> 
	
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<?php if (get_field('skill_logo')) { ?>
			<img id="logo" src='<?php the_field('skill_logo') ?>'>
			<?php } ?>

		<header class="entry-header">

			<h2><?php the_title() ?> </h2>

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<div class="entry-content">

			<?php
			the_excerpt();
			?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
</div>
</div>
