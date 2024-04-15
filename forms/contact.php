<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'muhamrizky00@gmail.com';
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];

    // Format pesan
    $email_body = "Name: $name\n" .
                  "Email: $from\n\n" .
                  "Message:\n$message";

    // Headers tambahan
    $headers = "From: $name <$from>" . "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
