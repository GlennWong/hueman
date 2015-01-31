<form method="get" class="searchform themeform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php _e('输入搜索内容，回车','hueman'); ?>';" onfocus="if(this.value=='<?php _e('输入搜索内容，回车','hueman'); ?>')this.value='';" value="<?php _e('输入搜索内容，回车','hueman'); ?>" />
	</div>
</form>