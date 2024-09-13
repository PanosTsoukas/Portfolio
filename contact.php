<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "your-email@example.com";  // Replace with your email
        $subject = "New Contact Form Message from $name";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $body = "<h2>New Contact Message</h2>";
        $body .= "<p><strong>Name:</strong> $name</p>";
        $body .= "<p><strong>Email:</strong> $email</p>";
        $body .= "<p><strong>Message:</strong><br>$message</p>";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            // Redirect to Thank You page after successful email
            header("Location: thank-you.html");
            exit;
        } else {
            echo "Error sending message. Please try again later.";
        }
    } else {
        echo "Invalid email format.";
    }
} else {
    echo "Invalid request.";
}
?>
