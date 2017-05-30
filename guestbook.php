<?php 
    $title = "!Secure Guestbook";
    $currentPage = "Guestbook";
    $scripts = ["scripts/guestbook.js"];
    include("header.php");
    if(empty($_SESSION["user"])){
?>

<div class="form-container">
    <h3>Guestbook</h3>
    <form id="guestbook-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="namebox" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="emailbox" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comments" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="error" class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error:</strong> Something went wrong adding your entry
    </div> <!-- error -->
</div>
<?php } ?>

<div id="guestbook-entries">
    <?php
        #get previous entires from database 
    ?>
</div> <!-- guestbook-entries -->

<?php include("footer.php"); ?>