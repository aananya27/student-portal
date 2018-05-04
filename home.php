<?php
session_start();
 include 'connection.php'; 
?>
 <html>
<head><title>Home </title> </head>
<body>
<h1>Home</h1>
<?php
echo $_SESSION["regno"] ; 
?> 
<br><br>
 <a href="marks.php">
 <button> Marks</button>
</a>
<br><br>
 <a href="attendance.php">
 <button> Attendance</button>
</a>
<br><br>
 <a href="logout.php">
 <button> Logout</button>
</a>
<br><br>
</body>
</html>
