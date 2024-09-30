<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title></title>
</head>
<body>

<?php 
$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
if (!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['email']) and !empty($_POST['message'])) {
	$name = trim(strip_tags($_POST['name']));
	$phone = trim(strip_tags($_POST['phone']));
	$email = trim(strip_tags($_POST['email']));
	$message = trim(strip_tags($_POST['message']));
	mail('info@emergencyparts.ru', 'Письмо с info@emergencyparts.ru', 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$email.'<br />Его сообщение: '.$message."Content-type: text/html; charset=utf-8");
		echo "Ваше сообщение успешно отправлено!<Br>Вы получите ответ в ближайшее время<br> $back";
		exit;
}
else {
	echo "Для отправки сообщения заполните все поля! $back";
	exit;
}
?>



</body>
</html>