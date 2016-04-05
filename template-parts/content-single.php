<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="title">
			<h2><?php the_title(); ?></h2>
			<p></p>
		</div>
		<div class="meta">
			<time class="published" datetime="<?php the_time(); ?>"><?php the_time( get_option( 'date_format' )); ?></time>
			<a href="#" class="author"><span class="name"><?php the_author(); ?></span><?php echo get_avatar( get_the_author_meta( 'ID' ), 38 ); ?></a>
		</div>
	</header><!-- .entry-header -->
	<?php
		if ( get_the_post_thumbnail($post_id) != '' ) {
		  echo '<a href="'; the_permalink(); echo '" class="image featured max-height"><div class="inner">';
		   the_post_thumbnail();
		  echo '</div></a>';
		}
	?>

	<div class="entry-content">
		<?php
			// $count = 0;
			// $string = get_the_content();
			// $pattern = '/<img[^>]*>/i';
			// echo preg_replace_callback($pattern,
			// 	function($matches) use (&$count) {
			// 		global $count;
			// 		$count = $count + 1;
			// 		return "<a class=\"featured image-{$count}\">{$matches[0]}</a>";
			// 	},
			// 	$string);

			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<ul class="stats">
			<li><?php the_category(); ?></li>
		</ul>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
