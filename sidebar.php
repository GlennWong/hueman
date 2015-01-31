	<div class="sidebar s1">
		
		<a class="sidebar-toggle" title="<?php _e('Expand Sidebar','hueman'); ?>"><i class="fa icon-sidebar-toggle"></i></a>
		
		<div class="sidebar-content">
			
			<!-- <div class="sidebar-top group">
				<p>关注我们</p>
			</div> -->
			
			<?php dynamic_sidebar('primary'); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->

	<?php get_template_part('sidebar-2'); ?>