<?php
/**
 * Template name: Ilmoita aineisto
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<script type="text/javascript">
// <!--
var $ = jQuery.noConflict();
$(document).ready(function() {
	$('.validation_error').prependTo( $('.entry-content') );
	$('.validation_message').each( function() {
		$(this).appendTo( $(this).parent().children('label') );
	});
});
// -->
</script>
		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php

						restore_current_blog();

						the_content();

						wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) );

						edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' );

						?>

					</div><!-- .entry-content -->
					
				</div><!-- #post-## -->
				
				<?php if (function_exists('sharethis_button')) sharethis_button(); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>