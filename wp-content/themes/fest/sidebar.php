<!--Sidebar start -->
<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fest
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div class="col-md-3 left-menu">
		<div class="align-right">
			<a class="btn btn-success btn-lg" data-target="#reg-group" data-toggle="modal">регистрация команды</a>
		</div>
		<div class="panel-group" id="accordion">
		<?php
		$args = array(
			'type'         => 'post',
			'child_of'     => 0,
			'parent'       => '',
			'orderby'      => 'name',
			'order'        => 'ASC',
			'hide_empty'   => 1,
			'hierarchical' => 1,
			'exclude'      => '',
			'include'      => '',
			'number'       => 0,
			'taxonomy'     => 'category',
			'pad_counts'   => false,
			// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
		);
		$categories = get_categories( $args );
//		print_r($cate$gories);

		$category_sidebar=$GLOBALS['category_sidebar'];
		$in = 'in';
		foreach ($categories as $key=>$cat) {
			$args = array('posts_per_page' => 7, 'cat' => $cat->term_id, 'post_status' => 'publish');
			$lastposts = get_posts($args);
				?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $cat->name ?>">
								<?= $cat->name ?>
							</a>
							<a class="btn btn-primary btn-sm" href="/index.php/<?=$cat->category_nicename ?>" role="button">Подробнее</a>
						</h4>
					</div>
					<div id="collapse<?= $cat->name ?>" class="panel-collapse collapse <?php if ($category_sidebar->term_id==$cat->term_id) {echo $in; $in = '';} ?>">
						<div class="panel-body">
							<ul>
								<?php foreach ($lastposts as $post) {
									setup_postdata($post); ?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<?php
		}?>
		</div>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
		<!-- VK Widget -->
		<div id="vk_groups"></div>
		<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 55798025);
		</script>
	</div>
<!--Sidebar End -->