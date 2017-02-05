<?php include 'session.php'; ?>
<?php include 'config.php'; ?>
<?php include 'function.php'; ?>


<?php 
	if ($_POST['signup']) {

		echo "success";
	} else {
		
	}


	if($_POST['signin']) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$count = signin($email, $pass);

		if($count == 1) {
			signin_session($_POST['email']);
		} else {
			redirect_to('signin.php');
		}
		
	} else {
		redirect_to('signin.php');
		
	}
	







?>
