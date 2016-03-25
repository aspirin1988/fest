<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fest
 */

?>

		<div class="col-md-9 article-container">
			<h2 style="text-align: center;"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php $img=''; $img=get_the_post_thumbnail_url( get_the_ID(), 'full'); if ($img) {?>
			<img src="<?=$img?>" alt="df">
			<?php }?>
			<div class="article  normal-font">
				<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fest' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				?>

			</div>
		</div>
	<div class="entry-content">
		<?php



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fest' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //fest_entry_footer(); ?>

</footer><!-- .entry-footer -->
