<?php

//if (isset($_POST['name'])&&isset($_POST['phone_number'])) {
/*$message = '<table style="border: solid 1px; border-color: #4cae4c; ">
    <tr style="border: solid 1px; border-color: #4cae4c; ">
        <td style="border: solid 1px; border-color: #4cae4c; ">
        Имя
        </td>
        <td style="border: solid 1px; border-color: #4cae4c; ">
        ' . $_POST['name'] . '
        </td>
    </tr>
    <tr style="border: solid 1px; border-color: #4cae4c; ">
        <td style="border: solid 1px; border-color: #4cae4c; ">
            Телефон
        </td>
        <td style="border: solid 1px; border-color: #4cae4c; ">
            ' . $_POST['phone_number'] . '
        </td>
    </tr>
    <tr style="border: solid 1px; border-color: #4cae4c; ">
        <td style="border: solid 1px; border-color: #4cae4c; ">
        Email
        </td>
        <td style="border: solid 1px; border-color: #4cae4c; ">
            ' . $_POST['email'] . '
        </td>
    </tr>
</table>';*/
print_r($_POST);
$message = "Автор назвался: ".$_POST['name']." \nОставил такой номер телефона: $phone_number \n и Email : ".$_POST['email'];
$response = wp_mail(get_option('admin_email'), 'Заказ звонка', $message, $headers);
//$response = wp_mail('aspirin_1988@mail.ru', 'Заказ звонка', 'ssss', $headers);
echo $response;
echo $message;
//}
