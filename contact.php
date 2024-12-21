<?php
// Start session to store feedback message
session_start();

// Include Composer autoload to load PHPMailer
require 'C:/composer/vendor/autoload.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation for email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format.";
        header("Location: index.php");
        exit;
    }

    // Recipient's email (your email where the form data is sent)
    $to = "simranbeedi@gmail.com"; // Replace with your email
    $subject = "Contact Form Submission from $name";

    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer();  // Correct namespace

    try {
        // Set up SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'simranbeedi@gmail.com';  // Replace with your Gmail address
        $mail->Password = 'szed biqq ifms sgam';    // Replace with your app password (if 2FA is enabled)
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set the "From" address as your email (Gmail will overwrite this, but it's safe)
        $mail->setFrom($email, $name);

        // Set the recipient's email
        $mail->addAddress($to);  // Recipient's email address (the owner email)

        // Set the "Reply-To" address as the user's email
        $mail->addReplyTo($email, $name);  // Replies go to the user's email

        // Email content with improved formatting
        $mail->isHTML(true);
        $mail->Subject = $subject;

        // Create a stylish HTML email body
        $mail->Body = "
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 20px;
                }
                .container {
                    background-color: #ffffff;
                    border-radius: 8px;
                    padding: 20px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    max-width: 600px;
                    margin: 0 auto;
                }
                h2 {
                    color: #333;
                }
                p {
                    font-size: 14px;
                    line-height: 1.6;
                    color: #555;
                }
                .footer {
                    font-size: 12px;
                    color: #777;
                    margin-top: 20px;
                    text-align: center;
                }
                .highlight {
                    color: #007bff;
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> <span class='highlight'>$name</span></p>
                <p><strong>Email:</strong> <span class='highlight'>$email</span></p>
                <p><strong>Message:</strong><br><span class='highlight'>$message</span></p>
                <div class='footer'>
                    <p>This email was sent by the Simran Beedi PortFolio contact form.</p>
                </div>
            </div>
        </body>
        </html>
        ";

        // Send email and check for success
        if ($mail->send()) {
            echo "<script>
                    alert('Message sent successfully!');
                    window.location.href = 'index.php';  // Redirect to index.php after alert
                  </script>";
        } else {
            echo "<script>
                    alert('Failed to send the message.');
                    window.location.href = 'index.php';  // Redirect to index.php after alert
                  </script>";
        }
    } catch (Exception $e) {
        echo "<script>
                alert('Error: {$mail->ErrorInfo}');
                window.location.href = 'index.php';  // Redirect to index.php after alert
              </script>";
    }
}
?>
