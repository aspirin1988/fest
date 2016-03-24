<?php get_header(); ?>
<div class="top-image">
    <img src="<?=$GLOBALS['header']['path']?>" alt="logo">
    <div class="top-logo">
        <img src="<?=$GLOBALS['logo']['path']?>" alt="logo">

    </div>
</div>
<div class="container ort-font">
</div>
<div class="container">
<div class="row blog">

    <?php
    $args = array( 'posts_per_page' => 6, 'cat'=> 1 );
    $lastposts = get_posts( $args );
    foreach( $lastposts as $post ){ setup_postdata($post);
    ?>
    <div class="col-md-12">
        <?php echo get_the_post_thumbnail( $post->id, 'medium');?>
        <?php the_content();
        ?>

    </div>



<?php }wp_reset_postdata();?>
</div>
</div>
<br>
<?=get_footer();?>