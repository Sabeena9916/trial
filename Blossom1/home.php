<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 class="lout">Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     <a href="index10.html"><p style=" font-weight: 600;"> Go to homepage </p></a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>