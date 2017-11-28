<nav id="header" class="navbar navbar-fixed-top">
    <div id="header-container" class="container navbar-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="brand" class="navbar-brand" href="#">Sample Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav" id="main-navigation">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php

                    if (isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
                        echo "<li><a href='logout.php'>Logout</a></li>";
                        
                    } else {
                        echo "<li><a href='login.php'>Login</a></li>
                            <li><a href='register.php'>Register</a></li>";
                    }
                ?>
            </ul>
        </div>
   </div>
</nav>