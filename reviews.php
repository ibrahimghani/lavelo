<html>
<head>
	<title>Lavelo Interior Designing Service Reviews</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
		.review {
			border: 1px solid black;
			padding: 10px;
			margin: 10px;
		}
	</style>
</head>
<body>
	<header>
		<h1>Lavelo Interior Designing Service Reviews</h1>
	</header>
	<main>
		<div class="review">
			<h2>Great service!</h2>
			<p>These guys did an amazing job designing my living room. The colors and patterns are perfect. I would definitely use them again.</p>
			<p><strong>By: John Smith</strong></p>
		</div>
		<div class="review">
			<h2>Highly recommend!</h2>
			<p>I was blown away by the level of professionalism and expertise demonstrated by the designers at this company. They transformed my kitchen into a space that is both functional and beautiful.</p>
			<p><strong>By: Jane Doe</strong></p>
		</div>
		<h2>Leave a Review</h2>
		<form action="submit-review.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br><br>
			<label for="rating">Rating:</label>
			<select id="rating" name="rating" required>
				<option value="5">5 stars</option>
				<option value="4">4 stars</option>
				<option value="3">3 stars</option>
				<option value="2">2 stars</option>
				<option value="1">1 star</option>
			</select><br><br>
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea><br><br>
			<input type="submit" value="Submit Review">
		</form>
	</main>
<footer>
		<p>&copy; 2023 Lavelo</p>
        <a href="home.php">Back to Homepage</a> </footer>
</body>
</html>
