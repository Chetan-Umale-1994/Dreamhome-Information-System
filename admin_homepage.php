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
    height: 150px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}


</style>
 </head>

 <body bgcolor="#EE82EE">
 <?php  
echo "Login successful. This account has admin access.";
echo '<div class="centered">';
echo '&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/staff.php">Staff</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/branch.php">Branch</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/viewing.php">Viewing</a>';
echo '<p>&nbsp; &nbsp;<a href="https://cs1.ucc.ie/~csu1/login.php">Logout</a>';
echo '</div>';
			
?>
 </body>
</html>
