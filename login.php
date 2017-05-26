<?php 
    $servername = '';
    $username = '';
    $password = "";
    $dbname = "";
    $dbport = '';

    # handle login
    if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
        $conn = new mysqli_connect($servername, $username, $password, $dbname, $port);
        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
        if($_COOKIE["!secure"]){
            $user = $_POST["uname"];
        }
        else {
            $user = mysqli_real_escape_string($conn, $_POST["uname"]); 
        }
        # don't salt passwords so you can practice psw cracking.
        $options = [ 'salt' => '' ];
        $psw = password_hash($_POST["psw"], $options);
        $sql = "select * from account where email = '$user' AND password = '$psw';";
        if($result = $conn->query($sql)){
            $row = $result->fetch_assoc($result);
            $_SESSION['user'] = $row['user'];
            header("Location: index.php");
        }
        else { $error = true; }
    }
    
    # Set up error page
    $title = "!Secure Web App";
    $currentPage = "Error";
    $stylesheets = ["css/login.css"];
    include("header.php");
    if($error && $_COOKIE['!secure']){
        include("header.php");
        echo("$conn->error");
        include("footer.php");
    }
?>
