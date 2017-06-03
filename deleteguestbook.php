<?php

$servername = 'dbserver.engr.scu.edu';
$username = 'jbracket';
$password = "00000976434";
$dbname = "test";

$conn =  new mysqli($servername, $username, $password, $dbname);

# delete for user
$sql = "delete from guestbook where userid == $_SESSION[$user]";

if ($conn->query($sql) != TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>