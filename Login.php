<?php

//Login Logout system created by @Rohit

include("conn.php");
session_start();
?>

<form action="" method="POST">
	Email <input type="text" name="email"><br><br>

	Password<input type="text" name="password"><br><br>

	<input type="submit" name="submit" value="Login"> <br><br>

	
</form>

<?php

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM student WHERE email = '$email' && password = '$password'";
	

	$data = mysqli_query($conn, $query);

	$total = mysqli_num_rows($data);
	echo $total;

	/*if($total == 1)
	{
		echo "Login Successful";
		//header('location:home.php');
	}
	else
	{
		echo "Login Failed";
	}*/
}

?>
