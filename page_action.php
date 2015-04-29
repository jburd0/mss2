<?php
session_start();
if(!$_SESSION['username']) {
	header("Location: ./index.php");
	exit;
}
if (isset($_GET['page'])) {
	function rrmdir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}
	$page = $_GET['page'];
	if (rrmdir("./pages/$page/")) {
		echo "page deleted";
		header('location: ./manage_pages.php');
	} else {
		echo "Problem deleting file.";
		header('location: ./manage_pages.php');
	}
} else {
	echo "Page was not set.";
}
?>
