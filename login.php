<?php
// Database connection parameters
$server = "127.0.0.1";
$username = "hitesh";
$password = "hiteshsajnani";
$database = "sahyog_mart";

// Connect to the database
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password match the admin credentials
    if ($email === 'hiteshsajnani@gmail.com' && $password === 'hitesh') {
      // Set the session variable for admin
      $_SESSION['admin'] = true;

      // Redirect to the admin dashboard
      header('Location: admin_dashboard.html');
      exit;
  }

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("SELECT * FROM userss WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check password
        if (password_verify($password, $user['password'])) {
            // Login successful
            session_start();
            $_SESSION['user'] = $user;
            header("Location: product.php");
            exit();
        } else {
            // Incorrect password
            $error_message = "Incorrect email or password.";
        }
    } else {
        // User not found
        $error_message = "User not found.";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="fonts/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header-v3">
      <!-- Header desktop -->
      <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
          <nav class="limiter-menu-desktop p-l-45">
            <!-- Logo desktop -->    
            <a href="#" class="logo">
              <img src="images/icons/sahyog-logo/logo-white-transparent.png" alt="IMG-LOGO">
            </a>

            <!-- Menu desktop -->
            <div class="menu-desktop">
              <ul class="main-menu">
                <li>
                  <a href="index.html">Home</a>
                <li>
                  <a href="product.php">Shop</a>
                </li>

                <li class="label1" data-label1="hot">
                  <a href="features.html">Features</a>
                </li>

                <li>
                  <a href="blog.html">Blog</a>
                </li>

                <li>
                  <a href="about.html">About</a>
                </li>

                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </div>  

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m h-full">                          
              <div class="flex-c-m h-full p-r-25 bor6">
                
              </div>
                
              <div class="flex-c-m h-full p-lr-19">
                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                  <i class="zmdi zmdi-menu"></i>
                </div>
              </div>
            </div>
          </nav>
        </div>  
      </div>

      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
        <!-- Logo moblie -->     
        <div class="logo-mobile">
          <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
          <div class="flex-c-m h-full p-r-5">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
              <i class="zmdi zmdi-shopping-cart"></i>
            </div>
          </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>


      <!-- Menu Mobile -->
      <div class="menu-mobile">
        <ul class="main-menu-m">
          <li>
            <a href="index.html">Home</a>
          </li>

          <li>
            <a href="product.html">Shop</a>
          </li>

          <li>
            <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
          </li>

          <li>
            <a href="blog.html">Blog</a>
          </li>

          <li>
            <a href="about.html">About</a>
          </li>

          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      
<form action="login.php" method="POST" onsubmit="return validateForm()">
<!-- form fields here -->
<div class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST$@$v=v1.16$@$">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login" id="login-button" class="unique-button">Login</button>
            <a href="forget_password.php" id="forget-password-link">Forget Password ?</a><br><br>
            <a href="register.php" id="register-link">Create A New Account</a>
        </form>
        <?php
        // Display error message
        if (isset($error_message)) {
            echo $error_message;
        }

        // Display success message
        if (isset($_SESSION['user'])) {
            echo "Welcome, " . $_SESSION['user']['name'] . "! Happy shopping!";
            unset($_SESSION['user']);
        }
        ?>
    </div>

    <script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        if (email == "" || password == "") {
            alert("Email and password are required.");
            return false;
        }
    }
    </script>
</body>
</html>