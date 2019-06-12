<html>
  <style>

div.absolute {
    position: absolute;
    top: 80px;
    right: 480;
    width: 300px;
    height: 150px;
    //border: 3px solid #73AD21;
}
</style>
<body>


<?php

include "connect.php";

$flag = "fail";


// Create connection
$conn = dream_connect();


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		
		if( $_POST["id"] == $row["username"] and $_POST["password"] == $row["password"])
		{
			$flag = "success";
			
			if($_POST["id"] == "admin")
			{
				
				header ("location: https://cs1.ucc.ie/~csu1/admin_homepage.php");
			}
			else
			{
				header ("location: https://cs1.ucc.ie/~csu1/user_homepage.php");
			}

				break;
		} 
		
		
	}
		if($flag == "fail")
		{
			
			
			header ("location: https://cs1.ucc.ie/~csu1/login.php");
		}
} 

else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
