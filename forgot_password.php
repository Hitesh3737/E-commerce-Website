<?php
// Database connection parameters
$server = "localhost";
$username = "hitesh";
$password = "hiteshsajnani";
$database = "sahyog_mart";

// Connect to the database
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle password reset form submission
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email address</p>";
    } else {
        // Generate a random password reset token
        $token = bin2hex(random_bytes(32));

        // Set the token expiration time to 1 hour from now
        $expiration = time() + 3600;

        // Store the token and expiration time in the database
        $query = "UPDATE users SET password_reset_token = ?, password_reset_expires = ? WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $token, $expiration, $email);
        $result = $stmt->execute();

        if ($result) {
            // Send an email to the user with the password reset link
            $subject = 'Password Reset';
            $body = "To reset your password, click the link below:\n\nhttps://your-domain.com/reset_password.php?token=$token";
            mail($email, $subject, $body);

            echo "<p>A password reset link has been sent to your email address</p>";
        } else {
            echo "<p>Error sending password reset link</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="fonts/styles.css">
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form method="post" action="forgot_password.php">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" name="submit" value="Send Password Reset Link">
        </form>
    </div>
</body>
</html>