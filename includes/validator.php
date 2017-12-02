<?php
//check for SQL injections and strip data of backslashes and encode it
	function validate_form($var) {
	  $var = trim($var);
	  $var = stripslashes($var);
	  $var = htmlspecialchars($var);
	  return $var;
	}
?>