<?php

$email = $_POST['email'];
$tel = $_POST['tel'];

$email = htmlspecialchars($emal);
$tel = htmlspecialchars($tel);
$mess = htmlspecialchars($mess);

$email = urldecode($emal);
$tel = urldecode($tel);
$mess = urldecode($mess);

$email = trim($emal);
$tel = trim($tel);
$mess = trim($mess);

If (mail("hoa-fly@mail.ru",
	"Новое письмо с сайта",
	"email: ".$email."\n".
	"Teлефон: ".$tel."\n".
	"Сообщение: ".$mess,
	"From:  no-reply@mydomain.ru \r\n")
) {
	echo ('Письмо успешно отправлено!');
}

else {
	echo ('Есть ошибки! Проверьте данные...');
}


?>