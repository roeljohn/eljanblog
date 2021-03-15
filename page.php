<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

<main id="main" class="main-wrapper" role="main">
	<?php get_search_form(); ?>
	<section class="blog-list px-3 py-5 p-md-5">
			<div class="container">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile;
				?>
			</div>
	</section>
</main>

<?php
get_footer();