<?php get_header(); ?>

<section class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">		
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div>
		
		<div class="entry">
			<p><?php _e( '你打开的页面不存在，或已被删除！请使用导航菜单或搜索框查找你想要找的信息。', 'hueman' ); ?></p>
		</div>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>