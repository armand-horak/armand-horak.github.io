<?php

if (isset($_POST['submit'])) {
    $firstName =  $_POST['firstName'];
    $lastName =  $_POST['lastName'];
    $subject =  $_POST['subject'];
    $mailFrom =  $_POST['mail'];
    $phone =  $_POST['phone'];
    $message =  $_POST['message'];
    $mailer = 'ccso';

    $mailTo = "armand.horak@gmail.com";
    $headers = "From: " . $mailer;
    $headers .= "\nOrganization: CCSO Solar\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-Mailer: PHP" . phpversion() . "\n";
    $txt = "New Contact form submission from:\n\nName: " . $firstName . " " . $lastName . "\nPhone: " . $phone . "\nMessage: " . $message . "\nEmail: " . $mailFrom;

    if (mail($mailTo, $subject, $txt, $headers)) {
        header("Location: index.html");
    };
}
?>
<!DOCTYPE html>