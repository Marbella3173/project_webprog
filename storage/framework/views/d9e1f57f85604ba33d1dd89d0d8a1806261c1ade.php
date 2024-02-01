

<?php $__env->startSection('title', 'Edit Profile'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(isset($success)): ?>
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Edit profile success!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

    <div>
        <div class="row mx-5">
            <h1 class="text-center text-warning">编辑个人资料 | Edit Profile</h1>

            <form action="/settings" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">

                <div class="mb-4 text-warning">
                    <label for="username" class="form-label" style="font-size: 20px">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Minimum 5 Characters" name="username" value="<?php echo e($user->username); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="email" class="form-label" style="font-size: 20px">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Must be end with '@gmail.com'" name="email" value="<?php echo e($user->email); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="phone" class="form-label" style="font-size: 20px">Phone Number</label>
                    <input type="number" class="form-control" id="phone" placeholder="Must Contains 12 Numbers" name="phone" value="<?php echo e($user->phone); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="address" class="form-label" style="font-size: 20px">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Do not have to be filled, Minimum 5 Characters" name="address" value="<?php echo e($user->address); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="image" class="form-label" style="font-size: 20px">New Profile Image</label>
                    <input class="form-control" type="file" id="image" name="image" value="<?php echo e($user->image); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="currPass" class="form-label" style="font-size: 20px">Current Password</label>
                    <input type="text" class="form-control" id="currPass" placeholder="Has to be the same with previous password" name="currPass" value="<?php echo e($user->currPass); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="newPass" class="form-label" style="font-size: 20px">New Password</label>
                    <input type="text" class="form-control" id="newPass" placeholder="Minimum 5 Characters" name="newPass" value="<?php echo e($user->newPass); ?>">
                </div>
                <div class="mb-4 text-warning">
                    <label for="confPass" class="form-label" style="font-size: 20px">Confirm Password</label>
                    <input type="text" class="form-control" id="confPass" placeholder="Has to be the same with New Password Field" name="confPass" value="<?php echo e($user->confPass); ?>">
                </div>
                <div class="col-12 text-end mb-4 text-warning">
                    <button type="submit" class="btn btn-dark text-warning float-right">Update Profile</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/settings.blade.php ENDPATH**/ ?>