<?php

  
  $mail_received = "jonathan.ruge.77@gmail.com";
  $nameForm = $_POST["name"];
  $mailForm = $_POST["email"];
  $subjectForm = $_POST["subject"];
  $messageForm = $_POST["message"];


  $messageSend = "Hola Jonathan, \n este es un mensaje de tu portafolio:";
  $messageSend .= "Nombres: ".$nameForm."\n";
  $messageSend .= "Correo electrónico: ".$mailForm."\n";
  $messageSend .= "Asunto: ".$subjectForm."\n";
  $messageSend .= "message: ".$messageForm."\n";

  mail($mail_received, 'Nuevo mensaje de tu portafolio', $messageSend);
?>
