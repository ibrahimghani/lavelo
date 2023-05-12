<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
	<title>Interior Design Services</title>
	<style>
		h1, h2 {
			text-align: center;
		}
		table {
			margin: auto;
		}
		th, td {
			padding: 10px;
			text-align: left;
		}
	</style>
</head>
<body>
	<header>
		<h1>Interior Design Services</h1>
	</header>
	<main>
		<h2>Lets Begin</h2>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br><br>
			<label for="service">Service:</label>
			<select id="service" name="service">
				<option value="">Select a service</option>
				<option value="Living Room Design">Living Room Design</option>
				<option value="Bedroom Design">Bedroom Design</option>
				<option value="Kitchen Design">Kitchen Design</option>
				<option value="Bathroom Design">Bathroom Design</option>
			</select><br><br>
			<label for="budget">Budget:</label>
			<input type="range" id="budget" name="budget" min="500" max="5000" value="500"><br>
			<span>500</span> <span style="float: right;">5000</span><br><br>
			<input type="submit" value="Submit">
		</form>
		<br><br>
		<h2>Price List</h2>
		<table>
			<tr>
				<th>Service</th>
				<th>Price</th>
			</tr>
			<tr>
				<td>Living Room Design</td>
				<td>$500 - $1000</td>
			</tr>
			<tr>
				<td>Bedroom Design</td>
				<td>$400 - $800</td>
			</tr>
			<tr>
				<td>Kitchen Design</td>
				<td>$600 - $1200</td>
			</tr>
			<tr>
				<td>Bathroom Design</td>
				<td>$300 - $600</td>
			</tr>
		</table>
	</main>
	<footer>
		<p style="text-align: right;">&copy; <?php echo date("Y"); ?> Lavelo</p>
<a href="home.php">Back to Homepage</a>
	</footer>
</body>
</html>
