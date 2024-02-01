<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>XiAO DiNG DoNG | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="/" style="font-weight: bold">
            <!-- <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
                XiAO DiNG DoNG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <?php if(auth()->guard()->check()): ?>
                    <?php if(!Gate::allows('admin')): ?>{
                        <li class="nav-item">
                            <a class="nav-link active" href="/search">Search Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/cart">Cart</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="/add">Add New Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/manage">Manage Food</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style="margin-left: auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle text-warning" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false`">
                            Welcome, <?php echo e(auth()->user()->username); ?>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-warning" href="/profile">Profile</a></li>

                            <?php if(!Gate::allows('admin')): ?>
                            <li><a class="dropdown-item text-warning" href="/history">Transaction History</a></li>
                            <?php endif; ?>

                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-warning" href="/logout">Sign Out</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                    <ul class="navbar-nav" style="margin-left: auto">
                        <li class="nav-item">
                            <a class="nav-link active text-warning" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-warning" href="/register">Register</a>
                        </li>
                    </ul>
                    <?php endif; ?>

                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-image" style="background-image: url(/assets/Background/background.jpg); height: 100vh; overflow: scroll">
        <div class="mask" style="background-color: rgba(0.8, 0.8, 0.8, 0.85); background-size: cover; height: 100vh; overflow: scroll">
        <div style="margin-top: 25px; margin-left: 100px; margin-right: 100px">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- <div class="container mt-4">
        
    </div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/partials/navbar.blade.php ENDPATH**/ ?>