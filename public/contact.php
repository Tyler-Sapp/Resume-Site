<?php
// public/contact.php

$recipient_email = 'sapp.tyler.c@gmail.com';
$subject_prefix   = '[Resume Site Contact] ';

// Only process the form if method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1) Collect & sanitize inputs
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    $errors = [];
    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email address is required.';
    }
    if ($message === '') {
        $errors[] = 'Message cannot be empty.';
    }

    if (empty($errors)) {
        // 2) Build the email headers/body
        $subject = $subject_prefix . 'New message from ' . $name;
        $body    = "You have received a new message from your resume site.\n\n"
                 . "Name:    $name\n"
                 . "Email:   $email\n\n"
                 . "Message:\n$message\n";

        $headers = [];
        $headers[] = 'From: ' . $name . ' <' . $email . '>';
        $headers[] = 'Reply-To: ' . $email;
        $headers[] = 'X-Mailer: PHP/' . phpversion();

        // 3) Send the email
        $sent = @mail($recipient_email, $subject, $body, implode("\r\n", $headers));

        if ($sent) {
            // 4a) Show a simple thank-you page
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Thank You</title>
              <link rel="stylesheet" href="/assets/css/style.css">
            </head>
            <body>
              <?php include __DIR__ . '/src/header.php'; ?>

              <div class="container">
                <section id="thank-you">
                  <h2>Thank You!</h2>
                  <p>Your message has been sent. I’ll get back to you as soon as possible.</p>
                  <a href="/" class="btn">Return Home</a>
                </section>
              </div>

              <?php include __DIR__ . '/src/footer.php'; ?>
            </body>
            </html>
            <?php
            exit;
        } else {
            $errors[] = 'Sorry, there was a problem sending your message. Please try again later.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Error</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <?php include __DIR__ . '/src/header.php'; ?>

  <div class="container">
    <section id="contact-error">
      <h2>Oops—something went wrong</h2>
      <?php if (!empty($errors)): ?>
        <ul class="error-list">
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <p><a href="/" class="btn">Return Home</a></p>
    </section>
  </div>

  <?php include __DIR__ . '/src/footer.php'; ?>
</body>
</html>
