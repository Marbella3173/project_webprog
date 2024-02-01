

<?php $__env->startSection('title', 'Log in'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid text-light bg-dark">
        <div class="row">
            <div class="col col-9 m-0 p-0">
                <img src="/assets/Background/Foto Background 1 Website XiAO DiNG DoNG.jpeg" class="img-fluid w-100" alt="background">
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-center">Login</h1>

                <form class="row g-3 align-items-center ml-auto" action="/login" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row-auto">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Has to end with '@gmail.com'" name="email" required>
                    </div>

                    <div class="row-auto">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Minimum 5 Characters, Maximum 255 Characters" name="password" required>
                    </div>

                    <div class="row-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="row-auto text-center">
                        <button type="submit" class="btn btn-secondary w-100">Login</button>
                    </div>

                    <p class="text-center">Don't have an account? <a href="/register" class="text-warning">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/login.blade.php ENDPATH**/ ?>