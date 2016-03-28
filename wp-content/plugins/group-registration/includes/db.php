<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 3/28/16
 * Time: 8:48 AM
 */

function create_table() {

    //To create tables we need dbDelta function located in upgrade.php. We'll have to load this file, as it is not loaded by default
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    global $charset_collate;

    if( $wpdb->get_var("SHOW TABLES LIKE 'group_registration'") != 'group_registration' ) {
        $sql = "CREATE TABLE " . 'group_registration' . " (
            id_group INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(128),
            name_boss varchar(128),
            name_confessor varchar(128),
            san_confessor varchar(128),
            region varchar(128),
            city varchar(128),
            address_parish varchar(128),
            name_parish varchar(128),
            number_of_persons int default 0,
            age_from int default 0,
            age_to int default 0,
            total_number_of_persons int default 0,
            subjects int default 0,
            subjects_type int default 0,
            creator INT UNSIGNED,
            PRIMARY KEY  pk_gr_id_group (id_group)
            ) $charset_collate;";
        $wpdb->query($sql);

        $sql="CREATE TABLE directory_1 (
            id_direct INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(128),
            description varchar(128),
            creator INT UNSIGNED,
            gr_create TINYINT UNSIGNED NOT NULL DEFAULT '0',
            data_create DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
            PRIMARY KEY  pk_gr_id_group (id_direct)
            )$charset_collate;";
        $wpdb->query($sql);

        $sql="CREATE TABLE directory_2 (
            id_direct INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(128),
            description varchar(128),
            creator INT UNSIGNED,
            gr_create TINYINT UNSIGNED NOT NULL DEFAULT '0',
            data_create DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
            PRIMARY KEY  pk_gr_id_group (id_direct)
            )$charset_collate;";
        $wpdb->query($sql);

        $sql = "ALTER TABLE `wp_users` ADD `user_reg_gr` INT NOT NULL DEFAULT 0
";
        $wpdb->query($sql);
    }
}

function add_group($user,$name,$creator,$name_boss,$name_confessor,$san_confessor,$region,$city,$address_parish,$name_parish,$number_of_persons,$age_from,$age_to,$total_number_of_persons,$subjects,$subjects_type)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $gr=$wpdb->query("SELECT name from group_registration WHERE name='$name'");
    $r=$gr;
    if (!$gr) {
        $sql = "Insert into group_registration (name,creator,name_boss,name_confessor,san_confessor,region,city,address_parish,name_parish,number_of_persons,age_from,age_to,total_number_of_persons,subjects,subjects_type) values ('$name','$creator','$name_boss','$name_confessor','$san_confessor','$region','$city','$address_parish','$name_parish','$number_of_persons','$age_from','$age_to','$total_number_of_persons','$subjects','$subjects_type')";
        $wpdb->get_results($sql);
        $res = mysqli_insert_id($wpdb->dbh);
        $sql = "UPDATE wp_users SET user_reg_gr='$res' WHERE ID=$user->user_ID";
        return $wpdb->query($sql);
    }
    else
    {
        return false;
    }
}

function reg_group($id,$user)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $gr=$wpdb->query("SELECT creator from group_registration WHERE id_group=$id and gr_create=0");
    $us=$wpdb->query("SELECT user_reg_gr from wp_users WHERE ID=$user and user_reg_gr=0");
    if ($gr && $us) {
        $date=date("Y-M-d H:i:s ");
        $sql = "UPDATE group_registration SET creator='$user', gr_create=1, data_create='$date'";
        $wpdb->query($sql);
        $sql = "UPDATE wp_users SET user_reg_gr='$id' WHERE ID=$user";
        return $wpdb->query($sql);
    }
    else
    {
        return false;
    }
}

function show_all_gr()
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $res=$wpdb->get_results('SELECT g.*,(SELECT count(*) FROM wp_users u where u.user_reg_gr=g.id_group)as "count" from group_registration g');

    return $res;
}

function get_user_gr($id)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $res=$wpdb->get_results('SELECT (SELECT g.name FROM group_registration g where u.user_reg_gr=g.id_group)as name,(SELECT g1.id_group FROM group_registration g1 where u.user_reg_gr=g1.id_group)as id from wp_users u WHERE u.ID='.$id);
    return $res[0];
}