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

}</style>
 </head>
 <body bgcolor="#6495ED">
 <?php echo ' <div class="centered"><form action="viewing_insert_action.php" method="post">

Client number: <br> <input type="text" name="cno"><br>
<p>
Property Number: <br> <input type="text" name="pno"><br>
<p>

Date: <br> <input type="text" name="date"><br>
<p>
Comment: <br> <input type="text" name="comment"><br>
<p>
<p>
<input type="submit" value = "Submit"> <br>

</form>
<p>
<a href="https://cs1.ucc.ie/~csu1/viewing.php">Back</a>

</div>'; ?>
 </body>
</html>
