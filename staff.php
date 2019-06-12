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
    width: 150px;
    height: 180px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}


</style>
 </head>

 <body bgcolor="#00FF00">
 <?php  
echo "This page can be used to lookup, insert, update or delete staff data.";
echo '<div class="centered">';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff_search.php">Search</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff_insert.php">Insert</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff_update.php">Update</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff_delete.php">Delete</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/admin_homepage.php">Back</a>';

echo '</div>';
			
?>
 </body>
</html>
