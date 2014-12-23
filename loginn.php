
<html>

<head>
</head>

<body style="background:grey;">


<?php

if (isset($_GET['error'])) {
	$error = $_GET['error'];
	if ($error == 'username') {
		header("location:loginerror.html")
	}else {
		echo "error";
	}
}

?>



