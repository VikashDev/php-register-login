<?php include 'includes/header.php'; ?>

<form method="post" action="config/auth.php" >
	<ul>
		<li>Name: <input type="text" name="name"></li>
		<li>Email : <input type="text" name="email"></li>
		<li>Mobile: <input type="text" name="mobile"></li>
		<li>Password: <input type="password" name="password"></li>
		<input type="submit" name="signup">
	</ul>
</form>


<?php include 'includes/footer.php'; ?>