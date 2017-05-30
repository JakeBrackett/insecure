<!-- NAVBAR -->
<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <ul class="nav nav-sidebar">
        <li class="nav-divider"></li>
            <?php 
                $urls = array(
                    'Home' => 'index.php',
                    'Guestbook' => 'guestbook.php',
                    'Uploaded Files' => '#',
                    'Other' => '#'
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
            if(empty($_SESSION['user'])) {
        ?>
                <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="glyphicon glyphicon-off"></i> Sign In</a></li>
        <?php 
            } else {
        ?>
                <li><a id="secure"><i class="glyphicon glyphicon-menu-left"></i> Secure</a></li>
        <?php
            }
        ?>
    </ul>
</div> <!-- sidebar -->  

    