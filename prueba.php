<?php
// Parámetros de correo
$to = "tu_correo@example.com"; // Cambia esto con tu correo
$subject = "Respuestas del Chatbot Escolar";
$headers = "From: chatbot@example.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Obtener el contenido enviado desde el front-end
$responseData = $_POST['responses']; // Recibimos las respuestas como JSON

// Convertir el array de respuestas en una cadena HTML
$htmlContent = "<h1>Respuestas del Chatbot Escolar</h1><ul>";
foreach ($responseData as $response) {
    $htmlContent .= "<li><strong>{$response['sender']}:</strong> {$response['message']}</li>";
}
$htmlContent .= "</ul>";

// Enviar el correo
if (mail($to, $subject, $htmlContent, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
