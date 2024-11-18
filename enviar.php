<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $opciones = htmlspecialchars($_POST['opciones']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Configurar los datos del correo
    $to = "destinatario@dominio.com";  // Cambia por tu dirección de correo
    $subject = "Nuevo mensaje desde el formulario de contacto";
    $message = "
    Nombre: $nombre\n
    Correo: $email\n
    Opción elegida: $opciones\n
    Mensaje:\n$mensaje
    ";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>¡Tu mensaje ha sido enviado exitosamente!</p>";
    } else {
        echo "<p>Hubo un problema al enviar el mensaje. Por favor, intenta de nuevo.</p>";
    }
} else {
    echo "<p>Acceso no válido.</p>";
}
?>
