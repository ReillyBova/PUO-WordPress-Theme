<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-shadow">
			<div class="wrap footer-nav">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;
				?>
			</div><!-- .wrap -->
			</div>
			<div class="copyright">
				<div class="copyright-wrapper">
					<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. All Rights Reserved.</p>
					<div class="copyright-logos">
						<a href="http://princeton.edu">
							<img src="/wp-content/uploads/princeton.png" alt="Princeton University" />
						</a>
						&nbsp;&nbsp;&nbsp;
						<a href="http://www.princeton.edu/music/">
							<img src="/wp-content/uploads/pumusic.png" />
						</a>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
