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
    width: 200px;
    height: 450px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}</style>
 </head>
 <body bgcolor="#6495ED">
 <?php echo ' <div class="centered"><form action="branch_insert_action.php" method="post">
Branch number:<br>  <input type="text" name="bno"><br>
<p>
Street: <br> <input type="text" name="street"><br>
<p>
Area: <br><input type="text" name="area"><br>
<p>
City: <br><input type="text" name="city"><br>
<p>
Pin code: <br><input type="text" name="pin"><br>
<p>
Telephone: <br><input type="text" name="phone"><br>
<p>
fax: <br><input type="text" name="fax"><br>
<p>
<p>
<input type="submit" value = "Submit">
</form>
<a href="https://cs1.ucc.ie/~csu1/branch.php">Back</a>
</div>'; ?>
 </body>
</html>
