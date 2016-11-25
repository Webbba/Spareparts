<?php
/* Задаем переменные */
$costname = htmlspecialchars($_POST["costname"]);
$calendar = htmlspecialchars($_POST["calendar"]);
$rev = htmlspecialchars($_POST["rev"]);
/* Ваш адрес и тема сообщения */
$address = "Stiller1987@yandex.ru";
$sub = "Отзыв с сайта SpareParts96";
/* Формат письма */
$mes = "Отзыв с сайта SpareParts96.\n
Имя отправителя: $costname 
Дата покупки: $calendar
Текст сообщения: $rev";
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "Reply-To: $email \r\n";
if(mail($address, $sub, $mes, $from)){
header('Refresh: 3; URL=http://spareparts96.ru');
echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт spareparts96';}
else{
header('Refresh: 3; URL=http://spareparts96.ru');
echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу spareparts96';}
}
exit;
?>