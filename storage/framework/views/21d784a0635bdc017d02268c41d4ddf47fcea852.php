<?php if($errors->any()): ?>
    <div class="row justify-content-center">
        <div class="col-4 z-4 position-absolute">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/partials/error.blade.php ENDPATH**/ ?>