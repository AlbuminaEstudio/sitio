<?php
$nombre = $_POST['name'];
$email = $_POST['mail'];
$mensaje = $_POST['message'];
$para = 'info@albumina.cl';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.albumina.cl/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
