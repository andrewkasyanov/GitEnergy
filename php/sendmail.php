<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    $message = 'Имя: ' . $_POST['name'] . ' ';
    $message .= 'Телефон: ' . $_POST['phone'] . ' ';
    if(!empty($_POST['message'])) {
        $message .= 'Текст: ' . $_POST['message'] . ' E-mail: ' .$_POST['email'].' ';
    }
    $mailTo = "info@emergencyparts.ru"; // Ваш e-mail
    $subject = "Письмо с сайта Emergencyparts"; // Тема сообщения
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@emergencyparts.ru <info@emergencyparts.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, ".$_POST['name'].", мы свяжемся с вами в самое ближайшее время!"; 
    } else {
        echo "Сообщение не отправлено!"; 
    }
}
?>