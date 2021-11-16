<?php session_start();
if(empty($_SESSION['id'])):
	header('location:login.php');
endif;
?>

<DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<div style="float:right"><button>Logout</button></div>

</body>
</html>