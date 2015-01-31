				</div><!--/.main-inner-->
			</div><!--/.main-->
		</div><!--/.container-inner-->
	</div><!--/.container-->

	<footer id="footer">	
	
		<section class="container" id="footer-widgets">
			<div class="container-inner">
				
				<div class="pad group">
					<?php $i = 0; while ( $i < 4 ) { $i++; ?>
					
					<div class="footer-widget-<?php echo $i; ?> grid one-fourth <?php if ( $i == 4 ) { echo 'last'; } ?>">
						<?php dynamic_sidebar( 'footer-' . $i ); ?>
					</div>
					<?php } ?>
				</div><!--/.pad-->
				
			</div><!--/.container-inner-->
		</section><!--/.container-->	

		
		<?php if ( has_nav_menu( 'footer' ) ): ?>
			<nav class="nav-container group" id="nav-footer">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap"><?php wp_nav_menu( array('theme_location'=>'footer','menu_class'=>'nav container group','container'=>'','menu_id'=>'','fallback_cb'=>false) ); ?></div>
			</nav><!--/#nav-footer-->
		<?php endif; ?>
		
		<section class="container" id="footer-bottom">
			<div class="container-inner">
				
				<a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
				
				<div class="pad group">
					
					<div class="grid one-half">
						
						<div id="copyright">
							<p><?php bloginfo(); ?> &copy; 2014 All Rights Reserved.</p>
						</div><!--/#copyright-->
						
						<div id="credit">
							<p>京ICP备14019442号</p>
						</div><!--/#credit-->
						
					</div><!--/.pad-->
					
					<div class="grid one-half last">	
					</div>
				
				</div>
				
			</div><!--/.container-inner-->
		</section><!--/.container-->
		
	</footer><!--/#footer-->

</div><!--/#wrapper-->

<?php wp_footer(); ?>
<div style="display:none;"><script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa2ecd890669f12d4ea3fcf25c3e69491' type='text/javascript'%3E%3C/script%3E"));</script></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie/respond.js" type="text/javascript"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jplayer.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>
</body>
</html>
