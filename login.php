<?php
$suser = htmlentities($_POST['usrname']);
$spass = md5(htmlentities($_POST['passwd']));
$handle = "./users/" . $suser . "/credentials.txt";
	if(file_exists($handle)) {
	$fetch = file_get_contents($handle);
	$data = explode('#', $fetch);
	$username = $data['0'];
	$passwd = $data['1'];
	$user_level = $data['2'];
		if($suser != $username || $spass != $passwd) {
			$login = "<p>Incorrect Username or Password</p>";
		} else {
			if ($user_level == "10") {
				$_SESSION['user_level'] = "admin";
			} else {
				$_SESSION['user_level'] = "basic";
			}
			$_SESSION['username'] = $username;
			header("Location: ./admin.php");
		}
	} else {
		$login = "<p>Incorrect Username or Password</p>";
	}
?>

