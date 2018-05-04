<?php
 include 'connection.php'; 
 if(isset($_POST["submit"]))
 {
 $marks = $_POST["marks"] ;
 $regno = $_POST["regno"] ;

 $course = $_POST["course"];
 $sql = "insert into marks values(\"$course\", \"$regno\", \"$marks\"  ) ;" ;

 $result = mysqli_query($conn,$sql) ;
echo "Posted" ;
 }
?> 
<html>
<head><title>Login </title> </head>
<body>
<h1>Login</h1>
<form method = "post" >
Regno : 
<input type = "text" name="regno" > <br>
Course :
<input type = "text" name="course" > <br>
Marks:
<input type = "text" name = "marks" > <br>
<input type = "submit" name= "submit" value="Post" >
</form>
</body>
</html>
