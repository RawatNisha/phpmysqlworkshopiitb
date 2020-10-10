<?php

require("connect.php");

$username = $_POST['username'];
$userpassword = $_POST['password'];
$userpasswordenc = md5($userpassword);
if($username && $userpasswordenc)
{
	$write = "INSERT INTO DATA1 VALUES('$username','$userpasswordenc')";
	if ($conn-> query ($write) === TRUE)
     {
			 echo "<br><b><i>record created successfully!</i></u>";
		 }
     else
     {
			 echo "Error: " . $write. "<br>" . $conn->error;
	   }
}
$conn->close();

?>

	

<form action = 'q1_md5.php' method='POST'>
Enter Username : <input type = 'name' name = 'username'><br></br>
Enter password : <input type = 'text' name = 'password'><p>
				<input type = 'submit' value = 'Login'>

</form>