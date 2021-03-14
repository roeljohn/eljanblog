<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
?>

<main id="main" class="main-wrapper" role="main">
<section class="cta-section theme-bg-light py-5">
		<div class="container text-center">
			<h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
				<div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
				<?php get_search_form(); ?>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
		</div><!--//container-->
	</section>
<section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			<?php 
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>Results: <?php echo get_search_query(); ?></h1>
		</header>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'search' );

		endwhile;
	
	else: ?>

		<p>Sorry, but nothing matched your search terms.</p>
	
	<?php
	endif;
	?>

</div>
	    </section>


</main>

<?php
get_footer();