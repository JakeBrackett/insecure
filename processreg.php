<?php

$servername = '127.0.0.1';
$username = 'root';
$password = "sql*OVERmysql";
$dbname = "insecure";

$conn =  new mysqli($servername, $username, $password, $dbname);
if($conn->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }

$username = $conn->escape_string($_POST["username"]);

$options = [ 'salt' => 'aaaaaaaaaaaaaaaaaaaaaaaaa' ];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);

$sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    
    $conn->close();
    header("Location: index.php");
} 
else { 
    # Error page
    $title = "!Secure Web App";
    $currentPage = "Error";
    include("header.php");
    include("header.php");
    echo("$conn->error");
    include("footer.php");
    $conn->close();
}



?>