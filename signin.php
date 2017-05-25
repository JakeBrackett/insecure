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
    
    # Set up page
    $title = "!Secure Web App";
    $currentPage = "login";
    include("header.php");
    if($error && $_COOKIE['!secure']){
        echo $conn->error;
    }
?>       
        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-wrap">
                        <h1>Sign In to Get Hacking!</h1>
                            <form action="signin.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label for="uname" class="sr-only">User Name</label>
                                    <input type="text" name="uname" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="psw" class="sr-only">Password</label>
                                    <input type="password" name="psw" id="psw" class="form-control">
                                </div>
                                <input type="submit" class="btn btn-custom btn-lg btn-block" value="Log in">
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
<?php
    include("footer.php");
?>