<!-- footer is based on 'twentyeleven' -->

</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php print( 'Proudly powered by WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
