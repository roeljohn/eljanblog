<?php
/**
 * The main template file
 */

get_header();
?>

<div class="main-wrapper">
		<?php get_search_form(); ?>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;

	the_posts_pagination( array(
		'prev_text' => __( 'Previous page' ),
		'next_text' => __( 'Next page' ),
	) );

endif;
?>

</div>
	    </section>
	    
		<?php
get_footer();