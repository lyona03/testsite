<?php
    $name = $_POST['name'];
    $organization = $_POST['organization'];
	$email = $_POST['email'];
    $unit = $_POST['unit'];
    $building = $_POST['building'];
    $room = $_POST['room'];
    $phone = $_POST['phone'];
	$reason = $_POST['reason'];
    $problem = $_POST['problem'];
    $description = $_POST['description'];


	$to = "lyonaahtyamowa@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка в Гринатом";

	
	$msg="
    ФИО: $name /n
    Организация: $organization /n
    Внутренний e-mail: $email /n
    Подразделение: $unit /n
    Комната: $room /n
    Телефон: $phone /n
    Причина обращения: $reason /n
    Проблема: $problem /n
    Подробное описание проблемы: $description"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
