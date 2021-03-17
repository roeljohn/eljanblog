<?php
/**
 * Template part for displaying posts
 */
$args = array(
    'number' => '1',
    'post_id' => $post->ID, // use post_id, not post_ID
);
$comments = get_comments($args);
?>
<div class="item mb-5">
	<div class="media">
		<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url(); ?>" alt="image">
		<div class="media-body">
			<h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<div class="meta mb-1"><span class="date">Published <?php echo get_the_date( '' ); ?></span><span class="comment"><a href="<?php echo get_comment_link( $comments[0]->comment_ID ); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></span></div>
			<div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
			<a class="more-link" href="<?php the_permalink();?>">Read more &rarr;</a>
		</div><!--//media-body-->
	</div><!--//media-->
</div><!--//item-->