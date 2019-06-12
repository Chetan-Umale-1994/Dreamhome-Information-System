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

div.absolute {
    position: absolute;
    top: 80px;
    right: 180;
   // width: 300px;
   // height: 150px;
   // border: 3px solid #73AD21;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #000000;
  text-align: left;
  padding: 8px;
}
</style>
 </head>
<body bgcolor="	#FFB6C1">


<?php
include "connect.php";

// Create connection
$conn = dream_connect();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_POST["search_key"] == "Staff Number")
{
	$sql = "SELECT * FROM staff where Sno = '" . $_POST["search_key_text"] . "'" ;
}
else if($_POST["search_key"] == "First Name")
{
	$sql = "SELECT * FROM staff where FName = '" . $_POST["search_key_text"] . "'" ;
}
else if($_POST["search_key"] == "Last Name")
{
	$sql = "SELECT * FROM staff where LName = '" . $_POST["search_key_text"] . "'" ;
}
else if($_POST["search_key"] == "salary_e")
{
	$sql = "SELECT * FROM staff where Salary = " . $_POST["search_key_text"]  ;
}
else if($_POST["search_key"] == "salary_l")
{
	$sql = "SELECT * FROM staff where Salary < " . $_POST["search_key_text"]  ;
}
else if($_POST["search_key"] == "salary_g")
{
	$sql = "SELECT * FROM staff where Salary > " . $_POST["search_key_text"]  ;
}





$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<div class="absolute">';
	echo "<table\n>";
	echo "  <tr>
    <th>Staff Number</th>
    <th>First Name</th>
    <th>Last Name</th>
<th>Address</th>
<th>Telephone</th>
<th>Position</th>
<th>Gender</th>
<th>DOB</th>
<th>Salary</th>
<th>NIN</th>
<th>Branch Number</th>
  </tr>";
    while($row = mysqli_fetch_row($result)) {
       //echo "id: " . $row["Sno"]. " - Name: " . $row["FName"]. " " . $row["LName"]. "<br>";
	echo "<tr>\n";	
	foreach($row as $row_value)
	{
		# escape any special characters and print table cell
		printf ("<td>%s</td>\n", htmlspecialchars ($row_value));
	}
	print ("</tr>\n");

	}
}
	else {
echo '<div class="centered">';

    echo "No records found";
}

echo "</table\n>";
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a></div>';

mysqli_close($conn);
?>

</body>
</html>
