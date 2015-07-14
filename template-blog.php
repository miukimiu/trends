<?php
/**
 * Template Name: Blog Template
 */
?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

	<?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>

	    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

        <?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
    