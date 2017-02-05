<?php 


	function redirect_to($new_location) {
		// echo "Hand Up"; die;

		header("Location: ../" . $new_location);
		exit;
	}

	function confirm_query($result_set) {
		if (!result_set) {
			die("Database query failed.");
		}
	}

	
	function signin($email, $password) {
		global $conn;
		$query = "SELECT * ";
		$query .= "FROM user WHERE ";
		$query .= "email = '$email' AND password = '$password'";
		$result = mysqli_query($conn, $query);
		// $confirm_query($result);
		$count = mysqli_num_rows($result);
		return $count;
		//return $result;
	}

	function signin_session($email) {
		global $conn;
		$query = "SELECT * ";
		$query .= " FROM user ";
		$query .= " WHERE email = '$email'";
		// print_r($query);die;
		$result = mysqli_query($conn, $query);
		$_SESSION = array();

		while ($row = mysqli_fetch_assoc($result)) {
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			} 
		redirect_to('index.php');	

	}

	function profile($user_id) {
		global $conn;
		$query  = "select * ";
		$query .= " from profile "; 
		$query .= " where user_id = $user_id";
		$result = mysqli_query($conn, $query);
		confirm_query($result);
		return $result;
	}



	function logout() {
		// Finally, destroy the session.
		session_destroy();
		redirect_to('index.php');
	}





?>