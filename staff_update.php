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
    width: 350px;
    height: 230px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}
</style>
 </head>
 <body bgcolor="#FFFF00">
 <?php echo ' <div class="centered"><form action="staff_update_action.php" method="post">
Staff number: <br> <input type="text" name="sno"><br>
<p>
Address: <br> <input type="text" name="address"><br>
<p>
Salary: <br><input type="text" name="salary"><br>
<p>
<p>
<input type="submit" value = "Update">
</form>
<a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a>
</div>'; ?> 
 </body>
</html>
