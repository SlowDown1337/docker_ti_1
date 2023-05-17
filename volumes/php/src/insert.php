<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
</head>

<body>
		<?php
		$conn = mysqli_connect("db", "root", "example", "user");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		
		$sql = "INSERT INTO user (first_name, last_name, email) VALUES ('$first_name',
        '$last_name','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Connected Successfully.</h3>";

			echo nl2br("\n$first_name\n $last_name\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
</body>

</html>