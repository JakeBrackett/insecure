<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!-- Style Sheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script>
        $('.modal').modal('show');
        </script>
        
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <?php 
        if(!empty($stylesheets)){
            foreach($stylesheets as $css){
        ?>
                <link rel=stylesheet type="text/css" href="<?php echo($css); ?>">
        <?php
            }
        }
        ?>
        <!-- Meta Attributes -->
        <title><?php echo($title); ?></title>
        
    </head>
    <body>
        <!-- Login Modal -->
        <div id="login-modal" class="modal fade" role="dialog">
    	  <div class="modal-dialog">
                <div id="login-panel" class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><strong>Sign In</strong></h2>
                    </div>
                    <div class="panel-body">
                        <!-- <img src="logo.png"> -->
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="uname">Username or Email</label>
                                <input type="text" name="uname" class="form-control" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="psw" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-sm btn-default">Sign in</button>
                            </div> <!-- text-center -->
                        </form>
                    </div> <!-- panel-body -->
                </div> <!-- login-panel -->
			</div> <!-- modal-dialog -->
		  </div> <!-- login-modal -->
        
        
        <!-- This establishes the navbar layout, a page header, and the contents of the page -->
        <div id="wrapper">
            <?php include("navbar.php"); ?>
            <div id="page-content-wrapper">
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>
                                    The <span class="title-special">(un)</span>Secure Web Application <br>
                                    <small>Learning to Exploit the Web, Beautifully</small>
                                    <hr>
                                </h2>
<!-- tags closed in footer.php, both must be included! -->