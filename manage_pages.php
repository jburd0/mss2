<?php
session_start();
if(!$_SESSION['username']) {
	header("Location: ./index.php");
}
?>
<html>
<head>
<?php include("header.php"); ?>
<script src="./js/logoslide.js"></script>
<script src="./js/imgPreview.js"></script>
</head>
<div class="container">
	<section class="main">
		<header role="banner"> <!-- begin content for the page -->
			<h1>Add a New Page</h1>
		</header> <!-- end [role="banner"] -->
		<?php include("slider.php"); ?>
		<div class="white_content">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="text" name="page_name" placeholder="Page Name">
				<div class="page_type"><input type="radio" name="page_style" value="image_page" id="image_page"><label for="image_page"><img src="./img/image_page.png" alt="Image page"/></label></div>
				<div class="page_type"><input type="radio" name="page_style" value="text_page" id="text_page"><label for="text_page"><img src="./img/text_page.png" alt="Text page"/></label></div>
				<input type="submit" value="Submit">
			</form>
		</div> <!-- end div.white_content-->

