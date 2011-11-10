

<footer id="colophon" role="contentinfo">	
	<div class="row">
		<div class="eight columns">
		
			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
			<?php endif; ?>
					
			<div id="site-generator">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/' ) ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
			</div>

		</div>
		<div class="four columns">
		
			<?php if ( is_active_sidebar( 'secondary-footer-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'secondary-footer-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
			<?php endif; ?>
		
		</div>	
	</div>
</footer><!-- #colophon -->

</div>
<!-- .container -->



<?php wp_footer(); ?>

</body>
</html>