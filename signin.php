<?php include 'includes/header.php'; //logout();?>

<form method="post" action="config/auth.php" >
	<ul>
	<li>Email : <input type="text" name="email"></li>
	<li>Password: <input type="password" name="password"></li>
	<input type="submit" name="signin">
	</ul>
</form>


<?php include 'includes/footer.php'; ?>