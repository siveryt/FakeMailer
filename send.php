<?php session_start(); if($_SESSION['login']){;
$sendersend = $_POST["sendname"];
$sendmail = $_POST["sendmail"];

$empfaenger = $_POST["receiver"];
$betreff = $_POST["subject"];
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
$header .= "From: $sendersend <$sendmail>";
$text = $_POST["content"];

mail($empfaenger, $betreff, $text, $header);

header("Location: interface.php");
}else{

    echo("Not authorized! <a href=index.php>Login</a>");

}
?>
