<html>
<head>
<title>Dreamhome Information System</title>
<style>
div.centered {
  position: fixed;
  top: 20%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;

}
</style>
</head>
<body bgcolor="#6495ED">
<?php



include "connect.php";

// Create connection
$conn = dream_connect();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$sql = "insert into staff values ('" . $_POST["sno"] . "','" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["address"] . "','" . $_POST["phone"] 
. "','" . $_POST["position"] . "','" . $_POST["gender"] . "','" . $_POST["dob"] . "','" . $_POST["salary"] . "','" . $_POST["nin"] . "','" . $_POST["bno"]  . "')";


if (mysqli_query($conn, $sql)) {
   
	echo '<script language="javascript">';
	echo 'alert("New record created successfully");';
	echo 'window.location = "https://cs1.ucc.ie/~csu1/staff.php";';
	echo '</script>';


} 
else {
   echo '<div class="centered">'; 	
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo '<p><a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a></div>';
}
?>
 </body>
</html>
