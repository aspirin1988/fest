<?php include_once ('gallery.php');
global $current_user;
get_currentuserinfo();
//print_r($current_user);
get_header();
global $url;
$url = '/index.php/docs/';
$page=6;
global $count_posts;
global $cat_id;
$cat_id=1;
$count_posts = get_category($cat_id)->category_count;
global$page_count;
$page_count= ceil($count_posts / $page);
echo $page_count;
global $offsett_post;
$offsett_post= $wp_query->query_vars['page']*$page;
$args = array( 'cat'=> $cat_id ,'numberposts'=>$page ,'offset'=>$offsett_post );
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
            <h2><?=the_title()?></h2>
        </div>
        <?php if ($GLOBALS['page_count']>=2){?>
        <ul class="pagination">
            <?php for ($i=1; $i<=$GLOBALS['page_count']; $i++){?>
                <li><a href="<?php echo $GLOBALS['url'].($i-1); ?>"><?=$i?></a></li>
            <?php } ?>
        </ul>
        <?php } ?>
        <div class="container">
            <div class="col-md-9 articles-container">
                <?php
                $lastposts = get_posts( $args );
                foreach( $lastposts as $post ){ setup_postdata($post);
                    ?>
                    <div class="row article">
                        <h2><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="col-md-4">
                            <?php echo get_the_post_thumbnail( $post->id, 'medium');?>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <?php $tr=strip_tags(get_the_content());
                                $j=255;
                                while ($tr[$j-5]!=' ') {
                                    $res = substr($tr, 0,$j-1) . '...';
                                    if ($j>=strlen($tr)) break;
                                    $j++;
                                }
                                echo $res;?>
                            </p>
                            <div class="align-right">
                                <a class="btn btn-primary " href="<?php the_permalink(); ?>" role="button">Подробнее</a>
                            </div>
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
        <?php if ($GLOBALS['page_count']>=2){?>
        <ul class="pagination">
            <?php for ($i=1; $i<=$GLOBALS['page_count']; $i++){?>
                <li><a href="<?php echo $GLOBALS['url'].($i-1); ?>"><?=$i?></a></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>

<?php get_footer(); ?>