<?php
session_start();
 include 'connection.php';
if(isset($_POST["submit"]))
{
$regno = $_POST["regno"] ;
$password = $_POST["password"];
$password2 = $_POST["password2"];
$sql = "select count(*) from student where regno like \"$regno\"  and password like \"$password\"  ;" ;
$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result) ;


if( $row["count(*)"] == 0 ) {
echo "Invalid regno or password" ;
}
else{
$_SESSION["regno"] = $regno; 
$sql = "UPDATE student SET password= \"$password2\"  WHERE regno =\"$regno\" ; " ;
mysqli_query($conn,$sql) ;
echo "successfully changed password."; echo"<br><br><a href=\"home.php\"><button> Home</button></a><br><br>";
}
}
?>

<html>
<head><title>Login </title> </head>
<body>
<h1>Login</h1>
<form method = "post" >
Regno :
<input type = "text" name="regno" > <br>
Current Password:
<input type = "password" name = "password" > <br>
New Password:
<input type = "password" name = "password2" > <br>



<input type = "submit" name= "submit" value="Update Password" >
</form>
</body>
</html>

