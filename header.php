<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <?php 
        if(!empty($stylesheets)){
            foreach($stylesheets as $css){
        ?>
                <link rel=stylesheet type="text/css" href="<?php echo($css); ?>">
        <?php
            }
        }
        ?>
        <title><?php echo($title); ?></title>
    </head>
    <body>
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