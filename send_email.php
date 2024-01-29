<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'iwan.xu123@gmail.com';
    $subject = 'New Message from Online Form';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: success.html');
    } else {
        header('Location: error.html');
    }
} else {
    header('Location: index.html');
}