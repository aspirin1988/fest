<?php include_once ('gallery.php');
$GLOBALS['logo']=get_logo('this_logo');
$GLOBALS['header']=get_logo('this_header');
global $current_user;
get_currentuserinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/fonts/triod.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/my.css">
</head>
<body>
<script src="<?php bloginfo('template_directory');?>/public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/public/js/bootstrap.min.js"></script>
<header class="top-block">
	<body class="ort-font">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">fest-dss.kz</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php $menu=wp_get_nav_menu_items('Main_menu'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ ?>

						<?php $sub_menu=[];
							foreach ($menu as $key1=>$val1)
							{
								if ($val->ID==$val1->menu_item_parent)
								{
									$sub_menu[]=$val1;
								}
							}
						if(count($sub_menu))
						{
							?>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?=$val->url?>"><?=$val->title ?></a>
							<ul class="dropdown-menu">
								<?php foreach ($sub_menu as $key1=>$val1)
								{ echo '<li><a  href="'.$val1->url.'">'.$val1->title.'</a></li>'; }?>
							</ul>
					<?php	}
						else {?>
							<li class=""><a href="<?=$val->url?>"><?=$val->title ?></a>
						<?php }?>
						</li>
					<?php }} ?>

				</ul>
							<?php if (!$current_user->user_login) {
							?>
								<ul class="nav navbar-nav navbar-right">
									<a href="#" class="auth" data-target="#auth-modal" data-toggle="modal">
										<?php echo get_avatar( $current_user->user_ID);?>
										Вход
									</a>
								</ul>
							<?php
							}
							else
							{?>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown user-button">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo get_avatar( $current_user->user_ID); echo	$current_user->user_login; ?>
							 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/wp-admin">Профиль</a></li>
							<li><a href="#">Регистрация команды</a></li>
							<li><a href="#"></a></li>
							<li><a href="<?php echo wp_logout_url( '/' );?>">Выход</a></li>
						</ul>
					</li>
				</ul>
						<?php }
						?>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<?php //wp_head(); ?>

