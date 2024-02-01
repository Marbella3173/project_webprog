

<?php $__env->startSection('title', 'Food Description'); ?>

<?php $__env->startSection('content'); ?>

<?php if(isset($success)): ?>
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Item added to your cart!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<h1 class="text-center text-warning" style="margin-bottom: 20px">食物细节 | Food Detail</h1>

<div class="card text-white col-11 mx-auto bg-dark mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="/assets/Food/<?php echo e($food->image); ?>" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="card-title text-warning"><?php echo e($food->name); ?></h3>
                <p class="card-text">
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Food Type:</li>
                        <li style="font-size: 18px"><?php echo e($food->category); ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Food Price:</li>
                        <li style="font-size: 18px">Rp <?php echo e($food->price); ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Brief Description:</li>
                        <li style="font-size: 18px"><?php echo e($food->brief_desc); ?></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">About This Food</li>
                        <li style="font-size: 18px"><?php echo e($food->full_desc); ?></li>
                    </ul>

                    <?php if(auth()->guard()->check()): ?>
                    <?php if(!Gate::allows('admin')): ?>
                    <form action="/food/<?php echo e($food->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-secondary mt-3 text-warning" style="font-size: 18px; font-weight: bold">Add to Cart</button>
                    </form>
                    <?php endif; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/detail.blade.php ENDPATH**/ ?>