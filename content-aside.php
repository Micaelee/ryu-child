<?php
/**
 * @package Ryu
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-wrap wrap clear">
		<header class="entry-header">
			<?php
				$categories_list = get_the_category_list( __( ', ', 'ryu' ) );
				if ( $categories_list && ryu_categorized_blog() )
					echo '<span class="categories-links">' . $categories_list . '</span>';
			?>
            <span class="genericon genericon-book"></span>
		</header><!-- .entry-header -->

		<footer class="entry-meta">
			<?php ryu_entry_meta(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'ryu' ), __( '1 Comment', 'ryu' ), __( '% Comments', 'ryu' ) ); ?></span>
			<?php endif; ?>

			<span class="entry-format"><a href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'ryu' ), get_post_format_string( 'aside' ) ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a></span>

			<?php edit_post_link( __( 'Edit', 'ryu' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->

		<div class="entry-content clear">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ryu' ) ); ?>
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ryu' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
			<?php
				if ( ! is_single() ) :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				else :
					the_title( '<h1 class="entry-title">', '</h1>' );
				endif;
			?>
		</div><!-- .entry-content -->

		<a class="entry-format-badge genericon" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'ryu' ), get_post_format_string( 'aside' ) ) ); ?>"><span class="screen-reader-text"><?php echo get_post_format_string( 'aside' ); ?></span></a>
	</div><!-- .entry-wrap -->
</article><!-- #post-## -->