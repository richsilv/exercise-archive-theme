<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<section id="sidebar">
		<section id="intro">
			<a href="#" class="logo"><img src="<?php echo get_bloginfo('template_directory');?>/site_image.jpg"></a>
			<header>
				<h2><?php bloginfo( 'name' ); ?></h2>
				<p><?php bloginfo( 'description' ); ?></p>
			</header>
		</section>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</section><!-- .sidebar .widget-area -->
<?php endif; ?>
