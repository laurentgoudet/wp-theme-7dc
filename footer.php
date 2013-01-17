<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
     <?php do_action( '7dc_credits' ); ?>
     <?php printf(__('%1s %2s by','7dc'), '&copy;', date('Y')); ?> 
     <a href="<?php echo esc_url( __( 'http://chrisgoudet.com/about/', '7dc' ) ); ?>"title="<?php esc_attr_e( 'About me', '7dc' ); ?>">
     <?php _e('Chris Goudet', '7dc'); ?></a> - 
     <a href="<?php echo esc_url( __( 'http://github.com/chrisgoudet/wp-theme-7dc/', '7dc' ) ); ?>"title="<?php esc_attr_e( '7dc theme', '7dc' ); ?>">
     <?php _e('7dc', '7dc'); ?></a> <?php _e('theme', '7dc'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
