<?php 
    $title = "!Secure Guestbook";
    $currentPage = "Guestbook";
    include("header.php");
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
            <input type="email" class="form-control" id="emailbox" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comments" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include("footer.php"); ?>