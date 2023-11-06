<div class="container-fluid header bg-light position-fixed top-0 z-3 ">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php?page_layout=home">Nedd Cn.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href="index.php?page_layout=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page_layout=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page_layout=register">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']) ? 'active' : 'disabled'; ?>" href="index.php?page_layout=useraccount">My Account</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="index.php?page_layout=search" class="me-3">
                        <button type="button" class="btn btn-outline-dark">
                            <i class="bi bi-search"></i>
                        </button>
                    </a>
                    <a href="index.php?page_layout=cart">
                        <button type="button" class="btn btn-outline-dark">
                            <i class="bi bi-bag"></i>
                        </button>
                    </a>
                    <?php
                    if (isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']) {
                    ?>
                        <a href="logout.php">
                            <button type="button" name="logout" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout" class="btn btn-outline-danger ms-4">
                                <i class="bi bi-box-arrow-left me-2"></i>
                                Logout
                            </button>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
</div>