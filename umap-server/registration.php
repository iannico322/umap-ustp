<?php 

include 'source.php';
	
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
		exit();
	}
	else{
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO users(fullname,email,password,usertype) VALUES('$fullname','$email','$password','not-user');";
		$res = mysqli_query($conn, $sql);
		

		$conn->close();
	}

?>
