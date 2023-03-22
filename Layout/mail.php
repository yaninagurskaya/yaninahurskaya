<?php
//Принимаем постовые данные
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "79991570874@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework.pi <pampam@homework.pi>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
	?>