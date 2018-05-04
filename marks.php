<?php

session_start();
 include 'connection.php';
 $regno = $_SESSION["regno"] ;
$sql = "select * from marks where regno like \"$regno\"  ;" ;
$result = mysqli_query($conn,$sql) ;
echo " <h3> Marks of ". $regno . "</h3>" ;
while($row = mysqli_fetch_assoc($result)) {
	echo $row["course"] . " " . $row["mark"] ;
	echo "<br><br>" ;

}
?> 
 <a href="home.php">
 <button> Home</button>
</a>
<br><br>
