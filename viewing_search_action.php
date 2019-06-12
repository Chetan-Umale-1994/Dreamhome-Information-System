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
    right: 400;
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

if($_POST["search_key"] == "Client Number")
{
	$sql = "SELECT * FROM viewing where Cno = '" . $_POST["search_key_text"] . "'" ;
}
else if($_POST["search_key"] == "Property Number")
{
	$sql = "SELECT * FROM viewing where Pno = '" . $_POST["search_key_text"] . "'" ;
}
else if($_POST["search_key"] == "Date")
{
	$sql = "SELECT * FROM viewing where Date = '" . $_POST["search_key_text"] . "'" ;
}






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo '<div class="absolute">';
	echo "<table\n>";
	echo "  <tr>
    <th>Client Number</th>
    <th>Property Number</th>
    <th>Date</th>
<th>Comment</th>
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
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/viewing.php">Back</a></div>';

mysqli_close($conn);
?>

</body>
</html>
