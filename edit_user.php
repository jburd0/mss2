<?php
session_start();
if(!$_SESSION['user_level']) {
	header("Location: ./index.php");
}
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$status = $_POST['user_level'];
	touch("./users/$username");
	file_put_contents("./users/$username", "$username#$password#$status#");
	$status = "Added user $username.";
	header("location: ./manage_users.php?status=$status");
} elseif (isset($_GET['user'])) {
	$user = addslashes($_GET['user']);
	unlink("./users/$user");
	$status = "Deleted user $user.";
	header("location: ./manage_users.php?status=$status");
}
?>
