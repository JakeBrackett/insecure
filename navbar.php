<div id="sidebar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <nav class="nav-sidebar">
                    <ul class="nav">
                <?php 
                    $urls = array(
                        'Home' => 'index.php',
                        'Guestbook' => '#',
                        'Other' => '#',
                        'Uploaded' => '#'
                        
                    );

                    foreach ($urls as $name => $url) {
                ?>
                        <li <?php echo(($currentPage === $name) ? 'class="active"' : ''); ?>>
                            <a href="<?php echo($url); ?>"><?php echo($name); ?></a>
                        </li>     

                <?php
                    }
                ?>
                        
                <li class="nav-divider"></li>

                <?php
                    if(empty($_SESSION['username'])) {
                ?>
                        <li><a href='signin.php' data-toggle="modal" data-target="#login-modal"><i class="glyphicon glyphicon-off <?php echo(($currentPage === "login") ? 'active' : ''); ?>"></i> Sign In</a></li>
                <?php 
                    } else {
                ?>
                        <li><a id="secure"><i class="glyphicon glyphicon-menu-right"></i> Secure</a></li>
                <?php
                    }
                ?>
                        
                    </ul>
                </nav>
            </div> <!-- col-sm-2 -->  
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- sidebar-wrapper -->