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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="fonts/styles.css">
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        <?php
        if (isset($_GET['token'])) {
            $token = $_GET['token'];

            // Look up the user's email address based on the reset token
            $query = "SELECT email FROM users WHERE password_reset_token = '$token'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                // Display a form for the user to enter their new password
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);

                    // Update the user's password in the database
                    $query = "UPDATE users SET password = '$new_password', password_reset_token = NULL, password_reset_expires = NULL WHERE email = '$user[email]'";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo "<p>Your password has been reset</p>";
                    } else {
                        echo "<p>Error resetting password</p>";
                    }
                } else {
                    ?>
                    <form method="post" action="reset_password.php?token=<?php echo $token; ?>">
                        <label for="new_password">New Password:</label>
                        <input type="password" id="new_password" name="new_password" required>
                        <input type="submit" value="Reset Password">
                    </form>
                    <?php
                }
            } else {
                echo "<p>Invalid password reset token</p>";
            }
        } else {
            echo "<p>Missing password reset token</p>";
        }
        ?>
    </div>
</body>
</html>