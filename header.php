<?php
include 'config.php';
include ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>machine test task</title>
</head>


<!-- show Alert Messages  in the screen-->
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');
    if (msg) {
      let alertMessage = '';
      switch (msg) {
        case '1':
          alertMessage = 'User has been registered successfully.';
          break;
        case '2':
          alertMessage = 'Contact has been added successfully.';
          break;
        case '3':
          alertMessage = 'User has been deleted successfully.';
          break;
        case '4':
          alertMessage = 'Contact has been deleted successfully.';
          break;
        case '5':
          alertMessage = 'Image has been Upload successfully.';
          break;
        case '6':
          alertMessage = 'User has been Updated successfully.';
          break;
      }
      if (alertMessage) {
        alert(alertMessage);
      }
    }
  });
</script>

<body>