<?php 
session_start();
$servername = '127.0.0.1';
$username = 'root';
$password = "sql*OVERmysql";
$dbname = "insecure";

# handle login
if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    if($conn->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    if(isset($_COOKIE["!secure"])){
        $user = $_POST["uname"];
    }
    else {
        $user = $conn->escape_string($_POST["uname"]); 
    }
    # badly salt passwords so you can practice psw cracking.
    $options = [ 'salt' => 'aaaaaaaaaaaaaaaaaaaaaaaaa' ];
    $psw = password_hash($_POST["psw"], PASSWORD_DEFAULT, $options);
    $sql = "select * from user where username = '$user' AND password = '$psw';";
    if($result = $conn->query($sql)){
        $row = $result->fetch_assoc();
        if(!empty($row)){
            $_SESSION['user'] = $row['userid'];
            echo("success");
        }
    }
}
?>
