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
    width: 400px;
    height: 380px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}


</style>
 </head>
 <body bgcolor="#6495ED">
 <?php echo ' <div class="centered"><form action="staff_insert_action.php" method="post">
 <table cellspacing="15">
 <tr>
 <td>
Staff number: <br> <input type="text" name="sno"><br>
</td>
<td>
First Name: <br> <input type="text" name="fname"><br>
</td>
</tr>

<tr>
<td>
Last Name: <br> <input type="text" name="lname"><br>
</td>
<td>
Address: <br> <input type="text" name="address"><br>
</td>
</tr>

<tr>
<td>
Telephone:<br> <input type="text" name="phone"><br>
</td>
<td>
Position:<br> <input type="text" name="position"><br>
</td>
</tr>

<tr>
<td>
Gender:<br> <input type="text" name="gender"><br>
</td>
<td>
Date of Birth:<br>  <input type="text" name="dob"><br>
</td>
</tr>

<tr>
<td>
Salary: <br><input type="text" name="salary"><br>
</td>
<td>
NIN: <br>  <input type="text" name="nin"><br>
</td>
</tr>

<tr>
<td>
Branch number: <br> <input type="text" name="bno"><br>
</td>
<td>
</td>
</tr>

<tr>
<td>
<input type="submit" value = "Submit">
</td>
<td>
<a href="https://cs1.ucc.ie/~csu1/staff.php">Back</a>
</td>
</tr>

</table>


</form>

</div>'; ?>
 </body>
</html>
