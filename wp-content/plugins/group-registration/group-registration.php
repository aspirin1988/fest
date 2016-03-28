<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 3/27/16
 * Time: 10:35 PM
 */
/*
Plugin Name: group-registration
Description: Плагин для регистрации группы
Version: 1.0
Author: Sergey Demidov
Author URI: http://omelchuck.ru
License: GPL2
*/
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : aspirin_1988@mail.ru)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( ! defined( 'ABSPATH' ) ) { exit; }
include ('includes/install.php');
add_action( 'admin_menu','add_menu');
reg_param();
function add_menu()  {
    //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page('Add user group', 'add user group', 0, REG_GR_PLUGIN_FOLDER, 'get_main', REG_GR_PLUGIN_URL . 'images/icbw-16x16.png');

    //add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function )
    add_submenu_page( REG_GR_PLUGIN_FOLDER , 'Add user group', 'add user group', 0, REG_GR_PLUGIN_FOLDER,'get_main');
}
function reg_param()
{
    if( ! defined( 'REG_GR_PLUGIN_DIR' ) ){ define( 'REG_GR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); }
    // Plugin Folder URL
    if ( ! defined( 'REG_GR_PLUGIN_URL' ) ) { define( 'REG_GR_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); }

    // Plugin folder name
    if( ! defined( 'REG_GR_PLUGIN_FOLDER' ) ){ define('REG_GR_PLUGIN_FOLDER', basename(dirname(__FILE__) )); }
    // Plugin Root File QPath
    if ( ! defined( 'REG_GR_PLUGIN_FILE' ) ){ define( 'REG_GR_PLUGIN_FILE', __FILE__ ); }
}


function get_main()
{
    global $current_user;
    get_currentuserinfo();
    if (isset($_POST['name'])&& isset($_POST['description'])&& isset($_POST['submit']))
    {
        add_group($current_user,(string)$_POST['name'],(string)$_POST['description']);
    }

    $template = file_get_contents(REG_GR_PLUGIN_DIR.'/admin.html');
    $res=show_all_gr();
    $tr='';
    foreach($res as $key=>$val)
    {
        $sel = 'checked';
        if ($val->gr_create)
        {
            $sel=  'checked="checked"';
        }
        else
        {
            $sel='';
        }
        $tr.='<tr><td>'.$val->id_group.'</td><td>'.$val->name.'</td><td>'.$val->description.'</td><td><input type="checkbox" '.$sel.'"></td><td>'.$val->count.'</td></tr>';
    }
    $template=str_replace('{rows}',$tr,$template);
    echo  $template;
}
