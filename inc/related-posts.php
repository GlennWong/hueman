<?php $related = related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<h2 class="heading">
	<i class="fa fa-hand-o-right"></i><?php _e('推荐阅读：','hueman'); ?>
</h2>

<ul class="related-posts group">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
	<li class="related post-hover">
		<article <?php post_class(); ?>>

			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('thumb-medium'); ?>
					<?php endif; ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-star"></i></span>'; ?>
				</a>
				<?php if ( comments_open() ): ?>
					<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
				<?php endif; ?>
			</div><!--/.post-thumbnail-->
			
			<div class="related-inner">
				
				<h4 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h4><!--/.post-title-->
				
				<div class="post-meta group">
					<p class="post-date"><?php the_time('Y年m月j日'); ?></p>
				</div><!--/.post-meta-->
			
			</div><!--/.related-inner-->

		</article>
	</li><!--/.related-->
	<?php endwhile; ?>

</ul><!--/.post-related-->
<?php endif; ?>

<?php wp_reset_query(); ?>
