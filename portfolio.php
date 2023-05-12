<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
  <title>My Portfolio</title>
	<style>
		h1 {
			text-align: center;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
			margin-top: 50px;
		}
		.item {
			width: 300px;
			margin: 20px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}
		img {
			width: 100%;
			height: auto;
			margin-bottom: 10px;
		}
		h2, p {
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Levelo Portfolio</h1>
	</header>
	<main>
		<div class="container">
			<div class="item">
				<img src="theme1.jpg" alt="Theme 1">
				<h2>Theme 1</h2>
				<p>This is my first theme, it won the award for "Best Design" at the 2019 Web Design Conference.</p>
			</div>
			<div class="item">
				<img src="theme2.jpg" alt="Theme 2">
				<h2>Theme 2</h2>
				<p>My second theme was a big hit and received the "Most Creative" award at the 2020 Web Design Awards.</p>
			</div>
			<div class="item">
				<img src="theme3.jpg" alt="Theme 3">
				<h2>Theme 3</h2>
				<p>Theme 3 is my latest creation, it is clean and modern, and I am confident it will win an award soon!</p>
			</div>
		</div>
	</main>
<footer>
		<p>&copy; <?php echo date("Y"); ?> 2023 Lavelo</p>
		<div align="center"><a href="home.php">Back to Homepage</a>
      </div>
	</footer>
</body>
</html>