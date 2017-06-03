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
            <li><a href='logout.php'><i class="glyphicon glyphicon-off"></i> Sign Out</a></li>
            <li class="nav-divider"></li>
        <?php if(isset($_COOKIE["!secure"])){ ?>
            <li><a href='#' id="secure" class="insecure" disable><i class="glyphicon glyphicon-remove-sign"></i> InSecure</a></li>
            
        <?php
            } else{ ?>
            <li><a href='#' id="secure" class="secure" disable><i class="glyphicon glyphicon-lock"></i> Secure</a></li>
        <?php
            }
        }
        ?>
    </ul>
</div> <!-- sidebar -->  

    