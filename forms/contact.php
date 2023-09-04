<?php

require_once __DIR__ . '/../vendor/autoload.php'; // chemin relatif à votre fichier vendor/autoload.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\Mailjet\Resources;

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'gerardpoukpezi30@gmail.com';

// Instantiate the PHPMailer class
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Enable verbose debug output. Set to DEBUG_OFF in production.
    $mail->isSMTP();                     // Send using SMTP
    $mail->Host       = 'smtp.gmail.com'; // Specify SMTP server
    $mail->SMTPAuth   = true;            // Enable SMTP authentication
    $mail->Username   = 'gerardpoukpezi30@gmail.com'; // SMTP username
    $mail->Password   = 'okkieffkivnmwfzh';          // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;             // TCP port to connect to
    $mail->SMTPSecure = 'ssl'; // Activation de TLS

    // Recipients
    $mail->setFrom($_POST['email'], $_POST['nom'],$_POST['prenom'],$_POST['sujet'],$_POST['message']);
    $mail->addAddress($receiving_email_address); // Add a recipient

    // Content
    $mail->setFrom($_POST['email'], $_POST['nom'] . ' ' . $_POST['prenom'], 0, '2CIT');
    $mail->Subject = $_POST['sujet'];
    $mail->Body    = "From: {$_POST['nom']} {$_POST['prenom']} <{$_POST['email']}>\n\n{$_POST['message']}\n";

    $mail->send();
    echo '<center><h1>Votre message a été bien envoyé</h1></center>';
echo '<div style="text-align: center;">';
echo '<a href="../index.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border: 1px solid black;">Retour à la page d\'accueil</a>';
echo '</div>';


} catch (Exception $e) {
    echo 'Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer plus tard.';
}
?>
