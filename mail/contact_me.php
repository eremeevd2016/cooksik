<?php
// Проверить пустые поля
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['phone'])||empty($_POST['message'])||!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   
// Проверить пустые поля  strip_tags — Удаляет HTML и PHP-теги из строки	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'mitya.eremeew@yandex.ru,mitya.eremeew@gmail.com,solopara@mail.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Форма заказа с сайта RECLAMART.RU(Пришло сообщение с формы заказа сайта!!!):  $email_address"; 
$email_body = "Алиса ты получила сообщение от заказчика с  веб-сайта через контактную форму..\n\n"."Информация о заказчике:\nИмя заказчика: $name\n\nЭлектронный адрес: $email_address\n\nТелефон: $phone\n\nСообщение заказчика:\n$message";
$headers = "От:  mail.reclamart.ru\n"; // Это адрес электронной почты, сгенерированного сгенерированным сообщением. Мы рекомендуем использовать что-то вроде noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	

mail($to,$email_subject,$email_body,$headers);
return true;			
?>
