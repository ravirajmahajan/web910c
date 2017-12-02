<?php

header ("refresh:4;url=index.php");

session_start();

//unset all the varaibles

session_unset();

//destroy the session

session_destroy();
$conn = null;
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>Surasut</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>

	<center><h2>You have been logged out. Thank you for using KaShare. Hope You had a good ride.</h2></center>

</body>

</html>