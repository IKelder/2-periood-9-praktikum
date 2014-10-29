<?php
session_start();
$_SESSION['first_name'] = "Ingrid";
$first_name = $_SESSION['first_name'];
?><br>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<pre>
	<?php
		print_r($_SESSION);
	?>
</pre>
<a href="teine_leht.php">Teine leht</a>
</body>
</html>