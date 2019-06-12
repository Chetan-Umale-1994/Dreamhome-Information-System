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
    width: 300px;
    height: 260px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}


</style>
 </head>
 <body bgcolor="#FFA500">
 <?php echo ' <div class="centered"><form action="staff_search_action.php" method="post">
Enter search key:  <input type="text" name="search_key_text"><br>
<p>
Search by <p>
  <input type="radio" name="search_key" value="Staff Number">Staff Number<br>
  <input type="radio" name="search_key" value="First Name">First Name<br>
  <input type="radio" name="search_key" value="Last Name"> Last Name<br>  
<input type="radio" name="search_key" value="salary_e">Salary Equal to<br>
<input type="radio" name="search_key" value="salary_l"> Salary Less than<br>
<input type="radio" name="search_key" value="salary_g"> Salary Greater than<br>
<p>
<input type="submit" value = "Search">
</form>
<a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a>
</div>'; ?> 
 </body>
</html>
