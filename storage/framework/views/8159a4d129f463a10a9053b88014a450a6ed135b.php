<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href="/home">
        <!-- <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
            XiAO DiNG DoNG
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === "Home") ? 'active' : ''); ?>" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === "Search") ? 'active' : ''); ?>" href="/search">Search Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === "Cart") ? 'active' : ''); ?>" href="/cart">Cart</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link text-warning dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, Xiao User
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-warning <?php echo e(($title === "Profile") ? 'active' : ''); ?>" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item text-warning <?php echo e(($title === "Transaction") ? 'active' : ''); ?>" href="/transaction">Transaction History</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-warning <?php echo e(($title === "Login") ? 'active' : ''); ?>" href="/login">Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/partials/navbar2.blade.php ENDPATH**/ ?>