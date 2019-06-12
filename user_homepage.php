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
    height: 340px;
    border: 3px solid #000000;
 padding-bottom: 1.5em;
	 padding-top: 1.5em;
	  padding-left: 1.5em;
	   padding-right: 1.5em;

}


</style>
 </head>
 <body bgcolor = "#3CB371">
 <?php 
echo "Login successful";
echo ' <div class="centered"><form action="user_search_action.php" method="post">
Enter search key:  <input type="text" name="search_key_text"><br>
<p>
Search for: <br>
  <input type="radio" name="search_key" value="Property" checked="checked">Property<br>
  <input type="radio" name="search_key" value="Branch">Branch<br>
  
<p>
Filters:<br>
<input type="radio" name="search_key1" value="Area">Area<br>  
<input type="radio" name="search_key1" value="City">City<br>
<input type="radio" name="search_key1" value="House Type">House Type<br>
<input type="radio" name="search_key1" value="Rooms less than">Rooms Less than<br>
<input type="radio" name="search_key1" value="Rooms greater than">Rooms Greater than<br>
<input type="radio" name="search_key1" value="Rent less than">Rent Less than<br>
<input type="radio" name="search_key1" value="Rent greater than">Rent Greater than<br>

<p>
<input type="submit" value = "Search">
</form>
<a href="https://cs1.ucc.ie/~csu1/login.php">Logout</a>
</div>'; ?> 
 </body>
</html>
