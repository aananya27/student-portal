<?php
session_start();
 include 'connection.php';
 $regno = $_SESSION["regno"] ;
$sql = "select * from attendance where regno like \"$regno\"  ;" ;
$result = mysqli_query($conn,$sql) ;
echo " <h3> Attendance of ". $regno . "</h3>" ;
while($row = mysqli_fetch_assoc($result)) {
	echo $row["course"] . " " . $row["perc"] . "%"  ;
	if($row["perc"] < 75) {echo " - Debarred" ;}
	echo "<br><br>" ;
}
?>
 <a href="home.php">
 <button> Home</button>
</a>
<br><br>

