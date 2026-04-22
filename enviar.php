<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "valennattero@gmail.com"; 
    $asunto = "Nuevo mensaje de contacto desde la web";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "From: val.nattero@valentinanattero.com"; // Usa un mail de tu dominio

    if (mail($destinatario, $asunto, $contenido, $header)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar";
    }
}
?>