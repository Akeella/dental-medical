<?php

//Подключаем библиотеку отправки письма
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';


//Функция отправки письма
function mailSend($to, $subject, $body)
{
  //Создаем экзимпляр класса
  $mail = new PHPMailer;
  //Задаем кодировку
  $mail->CharSet = 'UTF-8';

  // Настройки SMTP
  $mail->isSMTP();
  //Авторизация включена
  $mail->SMTPAuth = true;
  //Режим debug
  $mail->SMTPDebug = 1;

  //Настроки подключения к почтовому язику
  $mail->Host = 'ssl://smtp.mail.ru';
  $mail->Port = 465;
  $mail->Username = 'dental-medicalinbox@mail.ru';
  $mail->Password = '1zrkLxQmS5sQjq0FbPGh'; //PpupftOT17(C

  // Отправка письма
  $mail->setFrom('dental-medicalinbox@mail.ru', 'Поддержка dental-medical.ru');
  $mail->addAddress($to, '');
  $mail->Subject = $subject;
  $mail->msgHTML($body);
  $mail->send();
}
