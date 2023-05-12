<html>
<head>
	<title>Contact Us - My Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Contact Us</h1>
	</header>
	<div class="contact-form">
		<form action="send.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>
			<input type="submit" value="Send">
		</form>
	</div>
	<footer>
      <p>UAN- 111 506 507<p>
      <p style="text-align: right;">&copy; <?php echo date("Y"); ?> Lavelo</p>
	  <a href="home.php">Back to Homepage</a>
	</footer>
</body>
</html>
