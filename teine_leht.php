<?php
session_start();
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
<a href="index.php">Esimene leht</a>
</body>
</html>