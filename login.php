<?php
include 'config.php';
include ("apis/user_login.php");

//  messgae  will be checked
if (isset($_GET["err_msg"])) {
    echo "<script>alert('" . $_GET["err_msg"] . "')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login & Sign-Up</title>
</head>

<body>

    <!-- Login and Sign up container  -->
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2 class="log-head">Login</h2>
            </div>
            <form method="post" enctype="multipart/form-data" onsubmit="return validateLoginForm()">
                <div class="form-group">
                    <input type="email" id="login-email" name="username" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input type="password" id="login-password" name="password" placeholder="Your Password *">
                </div>
                <button type="submit" class="btn">Login</button>
                <input type="hidden" name="page_action" value="user_login">
            </form>
        </div>

        <div class="form-container" id="signup-container">
            <div class="form-header">
                <h2 id="sign-head">Sign Up</h2>
            </div>
            <form method="post" enctype="multipart/form-data" onsubmit="return validateSignupForm()">
                <div class="form-group">
                    <input type="email" id="signup-email" name="username" placeholder="Your Email *">
                </div>
                <div class="form-group">
                    <input type="password" id="signup-password" name="password" placeholder="Your Password *">
                </div>
                <button type="submit" class="btn" id="signup-button">Sign Up</button>
                <input type="hidden" name="page_action" value="add_user">
            </form>
        </div>
    </div>


    <!-- Validation For Login and Sign up Form -->
    <script>
        function validateLoginForm() {
            var username = document.getElementById("login-email").value.trim();
            var password = document.getElementById("login-password").value.trim();

            if (username === "") {
                alert("Please enter your username.");
                return false;
            }
            return true;
        }

        function validateSignupForm() {
            var username = document.getElementById("signup-email").value.trim();
            var password = document.getElementById("signup-password").value.trim();
            if (username === "") {
                alert("Enter your email address.");
                return false;
            }
            if (password.length < 8) {
                alert("Password must have atlest 8 chracters.");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>