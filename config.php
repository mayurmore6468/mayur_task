<?php
//DB Connection 
session_start();
define('Task', 'Login');
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'task_db');
?>