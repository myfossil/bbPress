<?php

/**
 * Template Name: bbPress - Topics (Newest)
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php do_action( 'bbp_template_notices' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="topics-front" class="bbp-topics-front">
						<h1 class="entry-title"><?php bbp_title_breadcrumb(); ?></h1>
						<div class="entry-content">

							<?php the_content(); ?>

							<?php do_action( 'bbp_template_before_topics_index' ); ?>

							<?php if ( bbp_has_topics() ) : ?>

								<?php bbp_get_template_part( 'bbpress/pagination', 'topics' ); ?>

								<?php bbp_get_template_part( 'bbpress/loop',       'topics' ); ?>

								<?php bbp_get_template_part( 'bbpress/pagination', 'topics' ); ?>

							<?php else : ?>

								<?php bbp_get_template_part( 'bbpress/no', 'topics' ); ?>

							<?php endif; ?>

							<?php do_action( 'bbp_template_after_topics_index' ); ?>

						</div>
					</div><!-- #topics-front -->

				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
