<?php
/**
 * Template part for displaying posts
 */

?>

<div class="item mb-5">
	<div class="media">
		<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url(); ?>" alt="image">
		<div class="media-body">
			<h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">10 min read</span><span class="comment"><a href="#">23 comments</a></span></div>
			<div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
			<a class="more-link" href="blog-post.html">Read more &rarr;</a>
		</div><!--//media-body-->
	</div><!--//media-->
</div><!--//item-->