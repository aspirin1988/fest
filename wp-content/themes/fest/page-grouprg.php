<?php //get_header();
//print_r($_POST);
header('Content-Type: application/json');
//Добавление новой группы
if (isset($_POST['add_group']))
{
    global $current_user;
    get_currentuserinfo();
    $res=add_group($current_user,$_POST['name_gr'],$current_user->ID,$_POST['name_boss'],$_POST['name_confessor'],$_POST['san_confessor'],$_POST['region'],$_POST['city'],$_POST['address_parish'],$_POST['name_parish'],$_POST['number_of_persons'],$_POST['age_from'],$_POST['age_to'],$_POST['total_number_of_persons'],$_POST['subjects'],$_POST['subjects_type']);
    echo json_encode($res);
}

if (isset($_POST['subjects_type']))
{
    echo json_encode(show_all_directory((int)$_POST['subjects_type']));
}

if (isset($_POST['reg_in_group']))
{
    global $current_user;
    get_currentuserinfo();
    $res=add_group($current_user,$_POST['name_gr'],$current_user->ID,$_POST['name_boss'],$_POST['name_confessor'],$_POST['san_confessor'],$_POST['region'],$_POST['city'],$_POST['address_parish'],$_POST['name_parish'],$_POST['number_of_persons'],$_POST['age_from'],$_POST['age_to'],$_POST['total_number_of_persons'],$_POST['subjects'],$_POST['subjects_type']);
    echo json_encode($res);
}