<?php
session_start();
?>
<html>
<head>
<?php include("header.php"); ?>
<script src="./js/logoslide.js"></script>
<script src="./js/imgPreview.js"></script>
<script src="./js/imgDisplay.js"></script>
</head>
<div class="container">
	<section class="main">
	<?php
			include("slider.php");
	?>
		<header role="banner"> <!-- begin content for the page -->
			<h1>Example Page</h1>
			<?php
			if ($_SESSION['username']) {
				echo "<a class=\"edit_imgs\" href=\"./edit_imgs.php?page=dshop\">Mange Images</a>";
			}
			?>
		</header> <!-- end [role="banner"] -->

		<section class="img-display">
			<div class="display-container">
				<?php
				// include first 16 lines of images.php
				$array = file("./dshop/images.php");
				for($i = 0; $i < 16; $i++) {
					echo $array[$i];
				}
				// create blank images so total fills 4 by 4 grid
				$line_count = count($array);
				if($line_count[1] == '') {
					$line_count--;
				}
				if($line_count <= 15) {
					for($i = $line_count; $i < 15; $i++) {
						echo "<div class=\"img-container\"><img src=\"./img/noimage.png\" title=\"\" /></div>";
					}
				}
				?>
			</div>
			<section class="full-display">
			</section>
		</section> <!-- end section.img-display -->

	</section> <!-- end section.main -->
</div> <!-- end div.container -->

</body>
</html>
