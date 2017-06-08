<?php
session_start();
$servername = '127.0.0.1';
$username = 'root';
$password = "sql*OVERmysql";
$dbname = "insecure";


$conn =  new mysqli($servername, $username, $password, $dbname);
if($conn->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$comment = trim($_POST["comment"]);
$comment = $conn->real_escape_string($comment);


if(isset($_COOKIE["!secure"])){
    #email has client side validation, we're safe right?
    $email = $_POST["email"];
} else {
    $email = $conn->real_escape_string($_POST["email"]);
}

$userid = $_SESSION["user"];

$sql = "Insert INTO guestbook(email, comment, userid) VALUES ('$email', '$comment', '$userid')";

if ($conn->query($sql) === TRUE) {
    if(!isset($_COOKIE["!secure"])){
        # defend against reflected XSS
        $comment = htmlspecialchars($_POST["comment"]);
        $email = htmlspecialchars($_POST["email"]);
    }
?>
        <div class="panel panel-success">
            <div class="panel-heading">
                <?php 
                    echo("$email");
                ?></div>
            <div class="panel-body"><?php echo("$comment"); ?></div>     
        </div>
<?php 
} 
else {
    if(isset($_COOKIE["!secure"])){
        echo("Error: " . $sql . "<br>" . $conn->error);
    } 
    else { 
        header('HTTP/1.1 500 Internal Server Error');
    }
}

$conn->close();

?>
