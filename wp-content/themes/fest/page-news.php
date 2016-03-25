<?php include_once ('gallery.php');
global $current_user;
get_currentuserinfo();
//print_r($current_user);
get_header();
?>

    <div class="top-image">
        <img src="<?=$GLOBALS['header']['path']?>" alt="logo">
        <div class="top-logo">
            <img src="<?=$GLOBALS['logo']['path']?>" alt="logo">

        </div>
    </div>
    <!-- Controls -->
    <div class="container ort-font">


    <div style="margin-bottom: 20px;" class="ort-font">
        <h2><?php the_field('regulations_title');?></h2>
        <p style="text-align: justify"><?php the_field('regulations_text');?></p>
    </div>
<div class="container">
    <div class="col-md-9 row news">

<?php
$args = array( 'cat'=> 2 );
$lastposts = get_posts( $args );
foreach( $lastposts as $post ){ setup_postdata($post);
    ?>
    <div class="col-md-6">
    <div class="news-container">
    <h2 style="text-align: center;"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php
    echo get_the_post_thumbnail( $post->id, 'medium');
    $tr=strip_tags(get_the_content());
    $j=255;
    while ($tr[$j-5]!=' ') {
        $res = substr($tr, 0,$j-1) . '...';
        if ($j>=strlen($tr)) break;
        $j++;
    }
    echo $res;?>
    </div>
    </div>

<?php
}
global $category_sidebar;
$category_sidebar= get_the_category()[0];
wp_reset_postdata();
?>

    </div>
    <?php get_sidebar();?>
    </div>

    </div>

<?php get_footer(); ?>