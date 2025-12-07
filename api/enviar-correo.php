<?php
header("Content-Type: application/json");

// =========================
// 1) VALIDAR CAMPOS
// =========================

$nombre  = $_POST["nombre"] ?? "";
$correo  = $_POST["correo"] ?? "";
$mensaje = $_POST["mensaje"] ?? "";
$token   = $_POST["token"] ?? "";<?php
header("Content-Type: application/json");

// =====================================
// 🔒 CONFIGURACIÓN
// =====================================
$recaptcha_secret = "6LeM1iMsAAAAABa5XCCSq5ZWJVNC806_c8YTAH44"; // <-- CAMBIAR
$smtp_host       = "mail.webcats.mx";
$smtp_user       = "no-reply@webcats.mx"; // <-- TU SMTP USER
$smtp_pass       = "wZjmaES^567H*Cu.zl"; // <-- TU SMTP PASS
$destinatario    = "contacto@webcats.mx"; // <-- A DONDE LLEGA EL MENSAJE

// =====================================
// 1) Validar que el POST exista
// =====================================
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "error", "message" => "Solicitud inválida."]);
    exit;
}

$nombre  = trim($data["nombre"] ?? "");
$correo  = trim($data["correo"] ?? "");
$mensaje = trim($data["mensaje"] ?? "");
$token   = $data["token"] ?? "";

// =====================================
// 2) Validación de campos
// =====================================
if (!$nombre || !$correo || !$mensaje) {
    echo json_encode(["status" => "error", "message" => "Completa todos los campos."]);
    exit;
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "El correo no es válido."]);
    exit;
}

// =====================================
// 3) Validar reCAPTCHA v2
// =====================================
$verify_url = "https://www.google.com/recaptcha/api/siteverify";

$response = file_get_contents($verify_url . "?secret={$recaptcha_secret}&response={$token}");
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"]) {
    echo json_encode(["status" => "error", "message" => "Verifica el reCAPTCHA."]);
    exit;
}

// =====================================
// 4) Enviar correo con PHPMailer
// =====================================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/phpmailer/src/Exception.php";
require __DIR__ . "/phpmailer/src/PHPMailer.php";
require __DIR__ . "/phpmailer/src/SMTP.php";

$mail = new PHPMailer(true);

try {
    // SMTP
    $mail->isSMTP();
    $mail->Host       = $smtp_host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtp_user;
    $mail->Password   = $smtp_pass;
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;

    // Remitente
    $mail->setFrom($smtp_user, "Formulario Webcats.mx");

    // Destinatario
    $mail->addAddress($destinatario);

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = "Nuevo mensaje desde Webcats.mx";

    $mail->Body = "
        <h2>Nuevo mensaje del formulario</h2>
        <p><strong>Nombre:</strong> {$nombre}</p>
        <p><strong>Correo:</strong> {$correo}</p>
        <p><strong>Mensaje:</strong><br>{$mensaje}</p>
        <hr>
        <p>Enviado desde Webcats.mx</p>
    ";

    $mail->send();

    echo json_encode(["status" => "success", "message" => "Mensaje enviado correctamente."]);

} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Error al enviar el correo: {$mail->ErrorInfo}"]);
}


if (!$nombre || !$correo || !$mensaje || !$token) {
    echo json_encode(["ok" => false, "message" => "Faltan campos obligatorios"]);
    exit;
}

// =========================
// 2) VALIDAR reCAPTCHA
// =========================
$secretKey = "6LeM1iMsAAAAABa5XCCSq5ZWJVNC806_c8YTAH44";  // <-- PÉGALA AQUÍ
$verifyURL = "https://www.google.com/recaptcha/api/siteverify";

$response = file_get_contents($verifyURL . "?secret=" . $secretKey . "&response=" . $token);
$captcha = json_decode($response);

if (!$captcha->success) {
    echo json_encode(["ok" => false, "message" => "reCAPTCHA inválido"]);
    exit;
}

// =========================
// 3) ENVIAR EMAIL CON PHPMailer
// =========================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/PHPMailer/src/Exception.php";
require __DIR__ . "/PHPMailer/src/PHPMailer.php";
require __DIR__ . "/PHPMailer/src/SMTP.php";

$mail = new PHPMailer(true);

try {
    // SMTP CONFIG
    $mail->isSMTP();
    $mail->Host = "mail.webcats.mx";   // ✔ TU SERVIDOR SMTP
    $mail->SMTPAuth = true;
    $mail->Username = "no-reply@webcats.mx"; 
    $mail->Password = "wZjmaES^567H*Cu.zl"; 
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    // REMITENTE
    $mail->setFrom("no-reply@webcats.mx", "Formulario Webcats.mx");

    // DESTINATARIO
    $mail->addAddress("contacto@webcats.mx");

    // EMAIL
    $mail->Subject = "Nuevo mensaje desde Webcats.mx";
    $mail->isHTML(true);
    $mail->Body = "
        <h2>Nuevo mensaje desde tu formulario Webcats.mx</h2>
        <p><strong>Nombre:</strong> {$nombre}</p>
        <p><strong>Correo:</strong> {$correo}</p>
        <p><strong>Mensaje:</strong><br>{$mensaje}</p>
    ";

    // Enviar
    $mail->send();

    echo json_encode(["ok" => true, "message" => "Mensaje enviado correctamente"]);
} 

catch (Exception $e) {
    echo json_encode(["ok" => false, "message" => "Error SMTP: " . $e->getMessage()]);
}
