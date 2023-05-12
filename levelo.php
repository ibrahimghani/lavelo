<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<h1>Welcome to my website</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</section>
	</main>

	<footer>
		<p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
	</footer>
</body>
</html>
