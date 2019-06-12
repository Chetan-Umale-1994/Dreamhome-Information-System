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
<body bgcolor="#EE6A50">
<?php



include "connect.php";

// Create connection
$conn = dream_connect();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "delete from staff where Sno = '" . $_POST["sno"] . "'" ;


if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
	echo '<script language="javascript">';
	echo 'alert("Record deleted successfully");';
	echo 'window.location = "https://cs1.ucc.ie/~csu1/staff.php";';
	echo '</script>';


} 
else {
 echo '<div class="centered">'; 	
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo '<p><a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a></div>';}
?>
 </body>
</html>
