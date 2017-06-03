<?php 
    $servername = '127.0.0.1';
    $username = 'root';
    $password = "sql*OVERmysql";
    $dbname = "insecure";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_errno > 0){
        echo('Unable to connect to database [' . $conn->connect_error . ']');
    }
    
    $sql = "select email, comment from guestbook LIMIT 30";
    if($result = $conn->query($sql)){
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
    } else { 
        # Error page
        $title = "!Secure Web App";
        $currentPage = "Error";
        include("header.php");
        echo("$conn->error");
        include("footer.php");
    }

    $title = "!Secure Guestbook";
    $currentPage = "Guestbook";
    $scripts = ["scripts/guestbook.js"];
    include("header.php");
    if(!empty($_SESSION["user"])){
?>

<div class="form-container">
    <h3>Guestbook</h3>
    <form id="guestbook-form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="emailbox" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="pull-right">
             <button class="btn btn-danger" id="delete">Delete ALL Your Entries</button>
        </div>
    </form>
    <div id="error" class="error-box alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error:</strong> Something went wrong adding your entry
    </div> <!-- error -->
</div>

<?php } ?>

<div class="row">
    <div id="guestbook-entries">
        <div id="col1" class="col-sm-6">
        <?php $items_per_col = ceil(count( rows ) / 2); ?>
        <?php foreach($rows as $i => $row): ?>
            <?php if($i === $items_per_col && $i !== 0): ?>
                </div> <!-- col1 -->
                <div id="col2" class="col-sm-6">
            <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo($row['email']); ?></div>
                <div class="panel-body"><?php echo($row['comment']); ?></div>  
            </div>
        <?php endforeach; ?>
        </div> <!-- col2 -->
    </div> <!-- guestbook-entries -->
</div> <!-- row -->


<?php include("footer.php"); ?>