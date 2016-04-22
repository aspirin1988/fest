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
            command_type int (2),
            eparhy varchar (64),
            leader_phone varchar (32),
            leader_email varchar (64),
            leder_contacts TEXT,
            confessor_phone varchar (32),
            confessor_email varchar (64),
            confessor_contacts TEXT,
            advanced_data TEXT,
            geoposition varchar (64),
            leader_profession varchar (256),
            PRIMARY KEY  pk_gr_id_group (id_group)
            ) $charset_collate;";
        $wpdb->query($sql);

        $sql="CREATE TABLE directory_1 (
            id_direct INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(128),
            description varchar(128),
            creator INT UNSIGNED,
            gr_create TINYINT UNSIGNED NOT NULL DEFAULT '0',
            PRIMARY KEY  pk_gr_id_group (id_direct)
            )$charset_collate;";
        $wpdb->query($sql);

        $sql="CREATE TABLE directory_2 (
            id_direct INT UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(128),
            description varchar(128),
            creator INT UNSIGNED,
            gr_create TINYINT UNSIGNED NOT NULL DEFAULT '0',
            PRIMARY KEY  pk_gr_id_group (id_direct)
            )$charset_collate;";
        $wpdb->query($sql);

        $sql = "ALTER TABLE `wp_users` ADD `user_reg_gr` INT NOT NULL DEFAULT 0
";
        $wpdb->query($sql);
    }
}

function add_group($user,$name,$creator,$name_boss,$name_confessor,$san_confessor,$region,$city,$address_parish,$name_parish,$number_of_persons,$age_from,$age_to,$total_number_of_persons,$subjects,$subjects_type,$command_type,$leader_phone,$leader_email,$leder_contacts,$confessor_phone,$confessor_email,$confessor_contacts,$advanced_data,$geoposition,$leader_profession)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $gr=$wpdb->query("SELECT name from group_registration WHERE name='$name'");
    $su=$wpdb->query("SELECT name from  directory_$subjects_type WHERE id_direct=$subjects AND gr_create=1");
    $r=$gr;
    if (!$gr&&!$su) {
        $sql = "Insert into group_registration (name,creator,name_boss,name_confessor,san_confessor,region,city,address_parish,name_parish,number_of_persons,age_from,age_to,total_number_of_persons,subjects,subjects_type,command_type,leader_phone,leader_email,leder_contacts,confessor_phone,confessor_email,confessor_contacts,advanced_data,geoposition,leader_profession) values ('$name','$creator','$name_boss','$name_confessor','$san_confessor','$region','$city','$address_parish','$name_parish','$number_of_persons','$age_from','$age_to','$total_number_of_persons','$subjects','$subjects_type','$command_type','$leader_phone','$leader_email','$leder_contacts','$confessor_phone','$confessor_email','$confessor_contacts','$advanced_data','$geoposition','$leader_profession')";
        $wpdb->get_results($sql);
        $res = mysqli_insert_id($wpdb->dbh);
        $sql = "UPDATE wp_users SET user_reg_gr='$res' WHERE ID=$user->ID";
        $wpdb->query($sql);
        $sql = "UPDATE directory_$subjects_type SET gr_create=1 WHERE id_direct=$subjects";
        $wpdb->query($sql);
        return ['data'=>['id'=>$res],'success'=>true];
    }
    else
    {
        if ($gr) {
            return ['data' => ['mess'=>'Данная группа уже существует!'], 'success' => false];
        }
        if ($su) {
            return ['data' => ['mess'=>'Данная тема уже занята!'], 'success' => false];
        }
    }
}

function del_group($id)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $su=$wpdb->query("DELETE from  group_registration WHERE id_group=$id");
    return $su;
}

function add_direct($id,$name,$description,$creator)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $su=$wpdb->query("SELECT name from  directory_$id WHERE name='$name'");
    if (!$su) {
        $sql = "Insert into directory_$id (name,description,creator) values ('$name','$description','$creator->ID')";
        return $wpdb->query($sql);
    }
    else
    {
        return false;
    }
}

function del_direct($id_dir,$id)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $su=$wpdb->query("DELETE from  directory_$id_dir WHERE id_direct=$id");
    return $su;
}

function edit_direct($id_dir,$id,$name,$description)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $su=$wpdb->query("UPDATE directory_$id_dir set name='$name',description='$description' WHERE id_direct=$id");
    return $su;
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

function select_gr($user,$user_reg_gr){
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    if($wpdb->query("UPDATE wp_users SET user_reg_gr='$user_reg_gr' WHERE ID=$user->ID"))
    {
        return ['data'=>['mess'=>'Вы сменили группу!'],'success'=>true];
    }
    else
    {
        return ['data'=>['mess'=>'Не удалось сменить группу!'],'success'=>false];
    }
}


function show_all_gr()
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $res=$wpdb->get_results('SELECT g.*,(SELECT count(*) FROM wp_users u where u.user_reg_gr=g.id_group)as "count" from group_registration g');
    $ret=[];
    foreach($res as $key=>$val)
    {
        $ret[$val->id_group]=$val;
    }
    return $ret;
}

function show_all_directory($id,$enter)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $limit='';
    if ($id==2){$limit=' limit  3';}
    $res=$wpdb->get_results('SELECT d.*,(select u.display_name from wp_users u where u.ID=d.creator) as display_name from directory_'.$id.' d WHERE name like \'%'.$enter.'%\' '.$limit);
    $res1=[];
    foreach($res as $key=>$val)
    {
        $res1[$val->id_direct]=$val;
    }
    return $res1;
}



function get_user_gr($id)
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    global $wpdb;
    $res=$wpdb->get_results('SELECT (SELECT g.name FROM group_registration g where u.user_reg_gr=g.id_group)as name,(SELECT g1.id_group FROM group_registration g1 where u.user_reg_gr=g1.id_group)as id from wp_users u WHERE u.ID='.$id);
    return $res[0];
}