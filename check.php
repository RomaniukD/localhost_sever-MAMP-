<?php
    //print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $error = '';
    if(trim($email) == '')
        $error = 'Wprowadz swój email';
    else if (trim($message) == '')
        $error = 'Wprowadz swoją wiadomość';
    else if (strlen($message) < 10)
        $error = 'Wiadomość musi zawierać więcej niż 10 znaków';

    if($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Тестове 
    повідомлення")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-
    type: text/html;charset=utf-8\r\n";

    mail('kubikirubiki228@gmail.com', $subject, $message, $headers);

    header('Location: about.php');

?>