<?php include_once ('gallery.php');
get_header();
?>
    <div id="carousel-top-generic" class="carousel slide top-slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-top-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-top-generic" data-slide-to="1"></li>
            <li data-target="#carousel-top-generic" data-slide-to="2"></li>
            <li data-target="#carousel-top-generic" data-slide-to="3"></li>
        </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $res=get_gall('main'); /*print_r($res);*/ $active="active"; foreach($res as $key=>$val)
        { ?>
            <div class="item <?=$active?>">
                <img src="<?=$val['path']?>" alt="<?=$val['alt']?>">
                <div class="carousel-caption">
                    <h3><?=$val['img_title']?></h3>
                    <p><?=$val['caption1']?></p>
                </div>
            </div>
            <?php $active=''; } ?>
    </div>

    </div>

    <div class="top-logo">
        <img src="<?php bloginfo('template_directory');?>/public/img/Logo.png" alt="logo">
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-top-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-top-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>
    </header>
<?php $menu=wp_get_nav_menu_items('Main_menu'); /*print_r($menu);*/


function rem ($menu)
{
    $new_menu =[];
    foreach ($menu as $item) {
        if (!$item->menu_item_parent) {
            $item->ch = false;
            foreach ($menu as $key=>$ch) {
                if ($ch->menu_item_parent == $item->ID) {
                    $item->ch[] = $ch;
                }
                if ($item->ch) {
                    $item->ch[$key]->ch = false;
                    foreach ($item->ch as $key1 => $ch1) {
                        if ($ch1->menu_item_parent == $item->ch[$key]->ID) {
                            $item->ch[$key]->ch[] = $ch1;
                        }
                        if ($item->ch[$key]->ch) {
                            $item->ch[$key]->ch[$key1]->ch = false;
                            foreach ($item->ch[$key]->ch[$key1] as $key2 => $ch2) {
                                if ($ch2->menu_item_parent == $item->ch[$key]->ch[$key1]->ID) {
                                    $item->ch[$key]->ch[$key1]->ch[] = $ch2;
                                }
                            }
                        }
                    }
                }
            }

            $new_menu[] = $item;
        }
    }
    return $new_menu;
}
//$new_menu=[];

$new_menu=	rem($menu,$item);
//print_r($new_menu);
?>
    <div class="container ort-font">

    <div class="jumbotron ort-font">
        <h1><?php the_field('Fest-theme');?></h1>
        <p><?php the_field('Label-fest');?></p>
        <p>
            <a class="btn btn-primary btn-lg " href="/index.php/post/" role="button">Подробнее</a>
            <a class="btn btn-success btn-lg " href  ="#" role="button">Регистрация команды</a>
        </p>
    </div>

    <div style="margin-bottom: 20px;" class="ort-font">
        <h2><?php the_field('regulations_title');?></h2>
        <p style="text-align: justify"><?php the_field('regulations_text');?></p>
    </div>
    <h2><?php the_field('News_title');?> <a class="btn btn-success" href="/index.php/news/" role="button">Все новости</a></h2>
    <div class="row news">
<?php
$args = array( 'posts_per_page' => 3, 'cat'=> 2 );
$lastposts = get_posts( $args );
//print_r($lastposts);
foreach( $lastposts as $post ){ setup_postdata($post);
    ?>
    <div class="col-md-4">
    <div class="news-container">
    <h3 style="text-align: center;"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php
   echo get_the_post_thumbnail( $post->id, 'medium');
    //the_content();
    echo  '</div></div>';
}
wp_reset_postdata();
?>
    </div>
    <hr>
    <h2><?php the_field('Blogs_title');?> <a class="btn btn-success" href="/index.php/blogs/" role="button">Все блоги</a></h2>
    <div class="row blog">

        <?php
        $args = array( 'posts_per_page' => 6, 'cat'=> 3 );
        $lastposts = get_posts( $args );
        foreach( $lastposts as $post ){ setup_postdata($post);
        ?>
        <div class="col-md-6">
            <?php echo get_the_post_thumbnail( $post->id, 'medium');?><h3 style="text-align: center;"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php

            echo  '</div>';
            }
            wp_reset_postdata();
            ?>

        </div>
        <div class="row blog">

        </div>
    </div>
<?php get_footer(); ?>