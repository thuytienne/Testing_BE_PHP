<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/thank.css">
    <title>Thank You</title>

</head>
<body>

<div class="thank-you-container">
    <h1>Thank you for contacting us</h1>
    <p style="margin-bottom: 50px;">We will be back in touch with you within one business day using the information you just provided below:</p>

    <div class="info">
        <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Phone:</strong> <?php echo $_SESSION['phone']; ?></p>
        <p><strong>Email Address:</strong> <a href="mailto:<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></a></p>
        <p><strong>Company:</strong> <?php echo $_SESSION['company']; ?></p>
    </div>
</div>
</body>
</html>
