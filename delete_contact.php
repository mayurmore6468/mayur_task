<?php
include ('apis/user_login.php');
include_once ('config.php');

//To Delete Contact Details
if (isset($_POST['delete_contact'])) {
	$id = $_POST['id'];
	$query = "DELETE FROM tbl_contact WHERE id='$id'";
	$query_run = mysqli_query($conn, $query);

	if ($query_run) {
		echo '<script> alert("Data has been deleted successfully")</script>';
		header("location: admin_panel.php");
	} else {
		echo '<script> alert("Data does not deleted")</script>';
	}
}
?>