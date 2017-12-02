<?php
session_start();

if(isset($_POST['submit'])) {
	
	include("/includes/validator.php");
	
	$firstname = validate_form($_POST["fname"]);
	$lastname = validate_form($_POST["lname"]);
	$email = validate_form($_POST["email"]);
	$pass = validate_form($_POST["password"]);
	$add1 = validate_form($_POST["add1"]);
	$add2 = validate_form($_POST["add2"]);
	$city = validate_form($_POST["city"]);
	$county = validate_form($_POST["county"]);
	$zip = validate_form($_POST["zip"]);
	$phone = validate_form($_POST["phone"]);
	$dob = validate_form($_POST["dob"]);	
	
	
	
	require_once("../connectionPDO.php");
	
	// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO user (fname, lname, email, password,address1,address2,city,county,zip,phone,dob) 
    VALUES (:fname, :lname, :email, :password,:address1,:address2,:city,:county,:zip,:phone,:dob)");
    $stmt->bindParam(':fname', $firstname);
    $stmt->bindParam(':lname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $pass);
    $stmt->bindParam(':address1', $add1);
    $stmt->bindParam(':address2', $add2);	
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':county', $county);
    $stmt->bindParam(':zip', $zip);	
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':dob', $dob);

	
	  try {  
		$stmt->execute();
		//once the user has signedUp we get UserID and store in session
		$stmt2 = $conn->prepare("SELECT user.userID, customer.customerID, client.clientID, user.fname FROM user,customer,client WHERE email= :email AND user.userID = customer.customerID AND user.userID = client.clientID");
		$stmt2->bindParam(':email', $email);
		$stmt2->execute();
		
		$result = $stmt2->fetchAll();
		
		$userID = $result[0][0];
		$customerID = $result[0][1];	
		$clientID =$result[0][2];	
		
		$_SESSION['UId'] = $userID;
		$_SESSION['CuId'] = $customerID;
		$_SESSION['CId'] = $clientID;
		$_SESSION['fname'] = $result[0][3];
		

		}
		catch (PDOException $e) {
	   if ($e->errorInfo[1] == 1062) {
		  echo "Email already exists.";
		  
	   }else {
		       echo "Error Occured" . $e->getMessage();
	   }
	}
}



$conn = null;
header("Location: home.php");
?>