<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/01/2019
 * Time: 15:14
 */
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once ("PHPMailer.php");
require_once ("Exception.php");
require_once ("SMTP.php");

$mail = new \PHPMailer\PHPMailer\PHPMailer();
$mail-> isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "seuemailaqui";
$mail->Password = "suasenhaaqui";
$mail->setFrom("seuemailaqui","Alura Curso PHP E MYSQL");
$mail->addAddress("seuemailaqui");
$mail->Subject="Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem:{$mensagem}";

if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
}else{
    $_SESSION["danger"] = "Erro no envio ".$mail->ErrorInfo;
    header("Location: contato.php");
}
die();