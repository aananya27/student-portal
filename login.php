<?php
session_start();
 include 'connection.php';

if(isset($_POST["submit"]))
{
$regno = $_POST["regno"] ; 
$password = $_POST["password"];
$sql = "select count(*) from student where regno like \"$regno\"  and password like \"$password\"  ;" ;
 $result = mysqli_query($conn,$sql) ; 
$row = mysqli_fetch_assoc($result) ;
if( $row["count(*)"] == 0 ) {
echo "Invalid regno or password" ;
}



else{
$_SESSION["regno"] = $regno;
echo "successfully Logged in.";
echo"<br><br><a href=\"home.php\"><button> Home</button></a><br><br>";
}
}
?> 
<html>
<head><title>Login </title> </head>
<body>
<h1>Login</h1>
<form method = "post" >
Username :
 <input type = "text" name="regno" > <br>
Password:
<input type = "password" name = "password" > <br>
<input type = "submit" name= "submit" value="Login" >
</form>
</body>
</html>
