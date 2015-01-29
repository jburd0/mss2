
<section role="header">
	<header role="navigation-bar">
		<div class="nav-container">
			<h1 role="reveal">My Business</h1>

			<ul>
				<li><a href=<?php if(!$_SESSION['username']) { echo "\"./index.php\""; } else { echo "\"./admin.php\""; } ?>>Home</a></li>
				<li><a href="./page.php">Example</a></li>
			</ul>
		</div>
	</header>
</section>

<!-- include base stylesheet -->
<link rel="stylesheet" href="./css/style.css"/>

<!-- include jquery.js necessary for all other script files -->
<script src="./js/jquery.js"></script>
<!-- scripts that will be needed on all pages -->
<script src="./js/loginslide.js"</script>
