<?php

echo "We are ready Ravi</br>";

?>

<?php 

$servername = "localhost";
$username = "root";
$password = "";

$dbname = "CV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
$sql = "SELECT * FROM Education";
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row["ID"]. "School: " . $row["School"]. " " . $row["Degree"]. "<br>";
    }
} else {
    echo "0 results";
}
?>