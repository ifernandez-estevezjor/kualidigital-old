<?php
  // Recibe los datos del formulario
  $name = $_POST['name'];
  $numero_contrato = $_POST['numero_contrato'];
  $zipcode = $_POST['zipcode'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];
  // Configura los datos del correo electrónico
  $destinatario = 'irvin.fernandez@estevezjor.mx'; //Aquí debes sustituir tu@email.com por tu email
  $asunto = 'Nuevo mensaje de formulario de contacto';
  $cuerpo = "Nombre: $name\nNumero Contrato: $numero_contrato\nCodigo Postal: $zipcode\nTeléfono: $mobile\nMensaje: $message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  // Envía el correo electrónico
  mail($destinatario, $asunto, $cuerpo, $headers);
  // Redirige al usuario a una página de confirmación
  header('Location: contacto-soporte.html'); // confirmacion.html debe existir
?>