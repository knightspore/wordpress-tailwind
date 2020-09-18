<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="p-4 mx-auto bg-white shadow-md" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<div class="text-xs font-bold text-gray-600 flex flex-col">
		<span><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span><?php _e( 'Written by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		</div>
		<!-- /post details -->
		
		<div class="py-2">
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
		
		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
