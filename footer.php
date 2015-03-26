<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ig2g
 */
?>

	</div><!-- #content -->

 

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div>
      <img class="block" id="u249_img" src="<?php bloginfo('template_directory'); ?>/images/tick-logo.jpg" alt="" width="129" height="57" data-muse-uid="U249" />
      <img class="block" id="u255_img" src="<?php bloginfo('template_directory'); ?>/images/virgin-money-giving-logo.jpg" alt="" width="88" height="62" data-muse-uid="U255" 
          />
      <p>It's Good 2 Give™ is a registered charity no.Sc041416</p>
      <p>Company limited by guarantee no. SC376977</p>
      <p><span id="u264">Terms and conditions</span></p>
      <p><span id="u266">Privacy &amp; cookies policy</span></p>
    </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ig2g' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ig2g' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ig2g' ), 'ig2g', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
