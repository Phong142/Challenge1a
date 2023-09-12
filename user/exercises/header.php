<nav class = "navbar navbar-expand-lg static-top">
    <div class = "container">
        <div class = "col-sm-6">
            <h1>
                <a href = "index.php" style="text-decoration: none; margin-left: -300px">Management System</a>
            </h1>
        </div>
        <div class="navbar-collapse col-sm-6">
        <div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>
                    <a class="nav-item btn btn-danger" href="../list.php" style="margin-right: 7px;">
                        List
                    </a>
            <?php } ?>
            <?php if(isset($_SESSION['username']) || isset($_SESSION['student'])) { ?>
                <a class="nav-item btn btn-danger" href="../user/exercises/index.php" style="margin-right: 7px;">
                        Exercises
                    </a>
                    <a class="nav-item btn btn-danger" href="../profile.php" style="margin-right: 7px;">
                        Profile
                    </a>
                    <a class="nav-item btn btn-danger" href="../../logout.php">
                        Logout
                    </a>
            <?php } ?>
            </div>
        </div>
    </div>
</nav>