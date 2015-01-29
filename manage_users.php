<?php
session_start();
if($_SESSION['user_level'] != 'admin' || !$_SESSION['username']) {
	header("Location: ./index.php");
}
if (isset($_GET['status'])) {
	$status = $_GET['status'];
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
			<h1>Add User</h1>
		</header> <!-- end [role="banner"] -->
		<?php include("slider.php"); ?>
		<section class="img-upload">
			<div class="upload-location">
				<div class="half_left">
					<h1>Manage Users</h1>
					<table>
						<tr>
							<th>Username</th>
							<th>Delete</th>
						</tr>
						<?php
						$user_dir = scandir("./users/");
						foreach ($user_dir as $user) {
							if ($user != "." && $user != ".." && $user != ".htaccess") {
								echo "<tr>
										<td>$user</td>
										<td><a href=\"./edit_user.php?user=$user\">Delete</a></td>
									</tr>";
							}
						}
						?>
					</table>
				</div>
				<div class="half_right">
					<h1>Add User</h1>
					<form action="edit_user.php" method="POST" />
						<input type="text" name="username" placeholder="Username" />
						<input type="password" name="password" placeholder="Password" />
						<select class="center_option" name="user_level">
							<option value="0">Basic</option>
							<option value="10">Admin</option>
						</select>
						<input type="submit" value="Add User" />
					</form>
				</div>
			</div>
		</section>
		<p class="upstatus">Status: <?php echo $status; ?></p>
	</section> <!-- end section.main -->
</div> <!-- end div.container -->

</body>
</html>
