<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "despoka69@gmail.com";  // Ganti dengan alamat email penerima
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan Anda berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Akses ilegal ke halaman ini.";
}
?>
