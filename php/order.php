<?php
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$family = htmlspecialchars($_POST["family"]);
$phone = htmlspecialchars($_POST["phone"]);
$email = htmlspecialchars($_POST["email"]);
$marka = htmlspecialchars($_POST["marka"]);
$model = htmlspecialchars($_POST["model"]);
$detail = htmlspecialchars($_POST["detail"]);
$vin = htmlspecialchars($_POST["vin"]);
$comment = htmlspecialchars($_POST["comment"]);
/* Ваш адрес и тема сообщения */
$address = "Stiller1987@yandex.ru";
$sub = "заказ на сайте spareparts96.ru";
/* Формат письма */
$mes = "заказ с сайта spareparts96.ru\n
Имя отправителя: $name 
Фамилия отправителя: $family
Телефон отправителя: $phone
Электронный адрес отправителя: $email
Марка автомобиля: $marka
Модель автомобиля: $model
Название детали: $detail
Вин-номер: $vin
Текст сообщения: $comment";
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "Reply-To: $email \r\n";
if(mail($address, $sub, $mes, $from)){
header('Refresh: 3; URL=http://spareparts96.ru');
echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт spareparts96.ru';}
else{
header('Refresh: 3; URL=http://spareparts96.ru');
echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу spareparts96.ru';}
}
exit;
?>