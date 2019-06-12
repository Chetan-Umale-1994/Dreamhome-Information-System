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
    width: 180px;
    height: 180px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}</style>
 </head>
 <body bgcolor="#FFFF00">
 <?php echo ' <div class="centered"><form action="branch_update_action.php" method="post">
Branch number:<br>  <input type="text" name="bno"><br>
<p>
Telephone: <br><input type="text" name="phone"><br>
<p>
<p>
<input type="submit" value = "Update">
</form>
<a href="https://cs1.ucc.ie/~csu1/branch.php">Back</a>
</div>'; ?> 
 </body>
</html>
