<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fest
 */

get_header();?>
	<div class="top-image">
		<img src="<?=$GLOBALS['header']['path']?>" alt="logo">
		<div class="top-logo">
			<img src="<?=$GLOBALS['logo']['path']?>" alt="logo">

		</div>
	</div>
	<div class="container ort-font ">
		<div class="row">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile; // End of the loop.
		?>
			<?php
				global $category_sidebar;
				$category_sidebar= get_the_category()[0];
				get_sidebar();?>
			</div>
		</div>

<?php
get_footer();
