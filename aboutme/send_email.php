<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "fajarethirteen@gmail.com"; // Ganti dengan alamat email penerima
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    header("Location: thank_you.html"); // Ganti dengan halaman "Terima Kasih" yang sesuai
}
?>