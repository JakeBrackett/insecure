<?php session_start(); ?>
<!-- Variables to Customize: -->
<!-- $stylesheets - array of custom sheets -->
<!-- $scripts - array of custom javascript files -->
<!-- $title - custom tile -->
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- JQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.js"></script>
        <!-- Style Sheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <?php 
        # $stylesheets
        if(!empty($stylesheets)){
            foreach($stylesheets as $css){
        ?>
                <link rel=stylesheet type="text/css" href="<?php echo($css); ?>">
        <?php
            }
        }
        # $scripts
        if(!empty($scripts)){
            foreach($scripts as $script) {
        ?>
                <script src="<?php echo($script); ?>"></script>
        <?php
            }
        }
        
        ?>
        <script src="scripts/main.js"></script>
        <!-- Meta Attributes -->
        <meta charset="utf-8">
        <!-- $title -->
        <title><?php echo((!empty($title)) ? $title : "!Secure Web App"); ?></title>
    </head>
    <body>
        <?php include("loginmodal.html"); ?>
        <!-- This establishes the navbar layout, a page header, and the contents of the page -->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left">
                <?php include("navbar.php"); ?>
                <div class="col-sm-9 col-md-10 main">
                    <!-- sidebar button toggle -->
                    <p class="visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i id="sidebar-toggle" class="glyphicon glyphicon-chevron-right"></i></button>
                    </p>
                    <h2 class="page-header">
                        The <span class="title-special">(in)</span>Secure Web Application <br>
                            <small>Learning to Exploit the Mobile Web</small>
                    </h2>
                    <div class="row">
                        <div class="col-xs-12">
<!-- tags closed in footer.php, both must be included! -->
