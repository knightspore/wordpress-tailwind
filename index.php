<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 class="mb-2"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
