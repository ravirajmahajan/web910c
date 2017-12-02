<?php
session_start();

if (isset($_POST['submit'])){
	require_once("../connectionPDO.php");
	include("/includes/validator.php");
	


	$email = validate_form($_POST['userMail']);
	$password = validate_form($_POST['pwd']);

	$stmt2 = $conn->prepare("SELECT user.userID, customer.customerID, client.clientID, user.fname FROM user,customer,client WHERE user.email= :email AND user.password = :password AND user.userID = customer.customerID AND user.userID = client.clientID");
	$stmt2->bindParam(':email', $email);
	$stmt2->bindParam(':password', $password);
	$stmt2->execute();
	
	$result = $stmt2->fetchAll();
	if ($result[0][0]) {
		$userID = $result[0][0];
		$customerID = $result[0][1];	
		$clientID =$result[0][2];	
		
		$_SESSION['UId'] = $userID;
		$_SESSION['CuId'] = $customerID;
		$_SESSION['CId'] = $clientID;
		$_SESSION['fname'] = $result[0][3];
		$conn = NULL;
		header("Location: home.php");
	}
	else {
		echo "Invalid Password. You will be redirected shortly.";
		$conn = NULL;
		header ("refresh:4;url=index.php");
	}
			
}
	header("Location: home.php");		
?>