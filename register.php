<?php
    if(!empty($_SESSION['user'])){
        header("Location: index.php");
    }
    $title = "Register";
    $currentPage = "Register";
    $scripts = ["scripts/register.js"];
    include("header.php");
?>

<div class="form-container">
    <h3>New Account</h3>
    <br>
    <form id="newaccount-form" action="processreg.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="newPassword" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Confirm Password:</label>
            <input type="password" id="newPasswordConfirm" name="passwordconfirm" class="form-control" required>
        </div>
        <button id="regSubmit" type="submit" class="btn btn-primary" disabled>Submit</button>
        <div id="divCheckPasswordMatch" class="error-box alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div> <!-- error -->
    </form>
</div>

<?php
    include("footer.php");
?>