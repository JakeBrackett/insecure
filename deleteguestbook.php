<?php
session_start();
$servername = '127.0.0.1';
$username = 'root';
$password = "sql*OVERmysql";
$dbname = "insecure";


$conn =  new mysqli($servername, $username, $password, $dbname);

# delete for user
$userid = $_SESSION["user"];
$sql = "delete from guestbook;";

if ($conn->query($sql) != TRUE) {
    echo("Error: " . $sql . $conn->error);
} else {
    echo("success");
}
$conn->close();

?>