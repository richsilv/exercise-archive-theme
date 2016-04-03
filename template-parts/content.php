<?php
/**
 * The template part for displaying content
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
		} else {
		 echo '<a href="'; the_permalink(); echo '" class="image featured max-height">';
		 echo '<div class="inner"><img src="';
		 echo catch_that_image();
		 echo '" alt="" /></div>';
		 echo '</a>';
		}
	?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				'',
				get_the_title()
			) );

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
		<ul class="actions">
			<li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
		</ul>
		<ul class="stats">
			<li><?php the_category(); ?></li>
		</ul>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
