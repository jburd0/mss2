<?php
session_start();
if(!$_SESSION['user_level']) {
	header("Location: ./index.php");
}
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$status = $_POST['user_level'];
	mkdir("./users/$username/");
	file_put_contents("./users/$username/credentials.txt", "$username#$password#$status#");
	header("location: ./manage_users.php");
} elseif (isset($_GET['user'])) {
	function delete_file($target) {
		if ( is_dir($target) ) {
			$files = glob($target. '*', GLOB_MARK);
			echo $taget;
			foreach ( $files as $file ) {
				delete_file($file);
			}
			rmdir ($target);
		} elseif ( is_file($target) ) {
			unlink($target);
		}
	}
	$user = addslashes($_GET['user']);
	delete_file("./users/$user");
	$status = "Deleted user $user";
	header("location: ./manage_users.php?status=$status");
}
?>
