<?php
$to = "support@web-nero.ru";//Почтовый ящик на который будет отправленно сообщение
$subject = "WEB-NERO";//Тема сообщения
$message = "Заявка Форма попап!";//Сообщение, письмо
$headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения, содержит определение типа письма, от кого, и кому отправить ответ на письмо
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Поочередно проверяем или были переданные параметры формы, или они не пустые
    if(isset($_POST["name"])){
        //Если параметр есть, присваеваем ему переданое значение
        $name =trim(strip_tags($_POST["name"]));
    }
    if(isset($_POST["usernumber"]))
    {
        $number	= trim(strip_tags($_POST["usernumber"]));
    }

    $formact = htmlspecialchars($_POST['formact']);
    $message = htmlspecialchars($_POST['message']);
    $email = htmlspecialchars($_POST['email']);
    $checked = htmlspecialchars($_POST['checked']);



    // Формируем письмо
    $message = "<b>НОВАЯ ЗАЯВКА!</b>

		        <br/> Имя: $name
		        <br/> Номер телефона: $number
		        <br/> Сообщение: $message
		        <br/> E-mail: $email
		        <br/> Откуда: $formact
		        <br/> Согласен с политикой?: $checked
		        <br/>";



    mail ($to, $subject, $message, $headers);
}
else
{
    exit;
}
?>
































