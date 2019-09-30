<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_GfsTee
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<a href="./?page_id=24">Impressum</a><a href="./?page_id=832">Datenschutzerklärung</a> <!-- added -->
	<!--
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'theme_gfstee' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'theme_gfstee' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme_gfstee' ), 'theme_gfstee', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
			.site-info removed by GfsTee
	-->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
