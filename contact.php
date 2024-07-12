<?php
include 'config.php';
include ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contact.css">
    <title>Contact-Us</title>
</head>

<body>
    <!-- Contact Us Form -->
    <div class="contact-container">
        <h1>Contact Us</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name"> Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" required>

            <label for="address"> Address <span class="required">*</span></label>
            <input type="text" id="address" name="address" required>

            <label for="city"> City <span class="required">*</span></label>
            <select id="city" name="city" required>
                <option value="" disabled selected>Select your city</option>
                <option value="kolhapur">kolhapur</option>
                <option value="sangli">sangali</option>
                <option value="satara">satara</option>
                <option value="pune">pune</option>
            </select>

            <label for="image">Image <span class="required">*</span></label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <label for="message">Message <span class="required">*</span></label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
            <input type="hidden" name="page_action" value="add_contact">
        </form>
    </div>
</body>

</html>