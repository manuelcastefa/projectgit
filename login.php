<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<title>Formulari login</title>
<body class="w3-container">

<h2>Input Card</h2>
<?php if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["user"] == 'admin' && $_POST["password"] == '1111'): ?>
		<div class="w3-container w3-green">
  			<h2 id="ok" class="w3-text-shadow">Login correcte</h2>
		</div>
	<?php else: ?>
		<div class="w3-card-4">
			<div class="w3-container w3-green">
			  <h2>Formulari de login</h2>
			</div>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w3-container" >

				<p>
				<input name="user" class="w3-input" type="text">
				<label class="w3-xlarge">Nom</label></p>

				<p>
				<input name="password" class="w3-input" type="text">
				<label class="w3-xlarge">Password</label></p>
				<button type="submit" class="w3-btn w3-blue-grey">Register</button>
			</form>

		</div>
	
<?php endif ?>

</body>
</html>

