<?php
error_reporting( E_ERROR );

$sendto  = strip_tags(trim($_POST['sendto']));//Адреса, куда будут приходить письма

$phone_single  = strip_tags(trim($_POST['phone-single']));
$phone  = strip_tags(trim($_POST['phone']));
$phoneselecttime  = strip_tags(trim($_POST['phoneselecttime']));
$phoneselectday  = strip_tags(trim($_POST['phoneselectday']));
$gender  = strip_tags(trim($_POST['gender']));
$name  = strip_tags(trim($_POST['name']));
$email  = strip_tags(trim($_POST['email']));
$company  = strip_tags(trim($_POST['company']));
$sfera  = strip_tags(trim($_POST['sfera']));
$sferanote  = strip_tags(trim($_POST['sferanote']));
$ordercount  = strip_tags(trim($_POST['ordercount']));
$clientscount  = strip_tags(trim($_POST['clientscount']));
$programm  = strip_tags(trim($_POST['programm']));
$programmnote  = strip_tags(trim($_POST['programmnote']));
$target1  = strip_tags(trim($_POST['target1']));
$target2  = strip_tags(trim($_POST['target2']));
$target3  = strip_tags(trim($_POST['target3']));
$roleautomation  = strip_tags(trim($_POST['roleautomation']));


// Формирование заголовка письма

$subject  = '[Новая заявка]';
/*$headers  = "From: ".$name." \r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";*/
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка</h2>\r\n";
if(!empty($phone)) {
    $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}

if(!empty($phone_single)) {
    $msg .= "<p><strong>Телефон:</strong> ".$phone_single."</p>\r\n";
}


if($gender == 'scb_call_time') {
    if(!empty($phoneselectday)){
        $msg .= "<p><strong>Перезвонить в этот день:</strong> ".$phoneselectday."</p>\r\n";
    }

    if(!empty($phoneselecttime)) {
        $msg .= "<p><strong>Перезвонить в это время:</strong> ".$phoneselecttime."</p>\r\n";
    }
}

if(!empty($email)) {
    $msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
}


if(!empty($name)) {
    $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
}

if(!empty($company)) {
    $msg .= "<p><strong>Компания:</strong> ".$company."</p>\r\n";
}

if(!empty($sfera)) {
    $msg .= "<p><strong>Сфера деятельности:</strong> ".$sfera."</p>\r\n";
}

if(!empty($sferanote)) {
    $msg .= "<p><strong>Примечание:</strong> ".$sferanote."</p>\r\n";
}

if(!empty($ordercount)) {
    $msg .= "<p><strong>Примерное количество заказов:</strong> ".$ordercount."</p>\r\n";
}

if(!empty($clientscount)) {
    $msg .= "<p><strong>Примерное количество действующих клиентов:</strong> ".$clientscount."</p>\r\n";
}

if(!empty($programm)) {
    $msg .= "<p><strong>Программа:</strong> ".$programm."</p>\r\n";
}

if(!empty($programmnote)) {
    $msg .= "<p><strong>Примечание:</strong> ".$programmnote."</p>\r\n";
}

if(!empty($target1)) {
    $msg .= "<p><strong>Цель №1:</strong> ".$target1."</p>\r\n";
}

if(!empty($target2)) {
    $msg .= "<p><strong>Цель №2:</strong> ".$target2."</p>\r\n";
}

if(!empty($target3)) {
    $msg .= "<p><strong>Цель №3:</strong> ".$target3."</p>\r\n";
}

if(!empty($roleautomation)) {
    $msg .= "<p><strong>Ваша роль в процессе автоматизации:</strong> ".$roleautomation."</p>\r\n";
}




$msg .= "</body></html>";

if(!empty($phone_single) || (!empty($phone) && !empty($email)))
{
//     отправка сообщения
    if(mail($sendto, $subject, $msg, $headers)) {
        $result = 1;
        echo json_encode($result);
    } else {
        $result = 0;
        echo json_encode($result);
    }
}

else {
    $result = 0;
    echo json_encode($result);
}
?>