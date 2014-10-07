<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-group">

	<div class="col-12">
		<div class="col-content">
			<?php the_content(); ?>
		</div>
	</div>

</div>

<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>