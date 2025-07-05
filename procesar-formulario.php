<?php
// Dirección de destino
$destinatario = "ventas@sgpyme.com.ar";

// Obtener datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$mensaje = htmlspecialchars($_POST['mensaje']);

// Asunto y cuerpo del mensaje
$asunto = "Nuevo mensaje desde el sitio SGPyME";
$cuerpo = "Nombre: $nombre\n";
$cuerpo .= "Correo: $email\n";
$cuerpo .= "Mensaje:\n$mensaje\n";

// Encabezados
$cabeceras = "From: $nombre <$email>\r\n";
$cabeceras .= "Reply-To: $email\r\n";

// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
  echo "<script>alert("✔️¡Mensaje enviado correctamente!"); window.location.href='index.html';</script>";
} else {
  echo "<script>alert("❌Hubo un error al enviar el mensaje. Intentalo nuevamente."); window.history.back();</script>";
}
?>