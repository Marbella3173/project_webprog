

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

<?php if(isset($success)): ?>
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Transaction success!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

    <h1 class="text-warning" style="margin-bottom: 25px">菜单 | Menu</h1>

    <button onclick="main_course()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">主菜 | Main Course</button>
    <button onclick="beverage()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">饮料 | Beverages</button>
    <button onclick="dessert()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">甜点 | Desserts</button>

    <div id="main-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">主菜 | Main Course</h4>
        </div>
    </div>

    <div class=grid id="main-grid">
        <div class=row>
            <?php $__currentLoopData = $main_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <a href="/food/<?php echo e($main_dish->id); ?>">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/<?php echo e($main_dish->image); ?>" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px"><?php echo e($main_dish->name); ?></p>
                </button>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div id="beverage-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">饮料 | Beverages</h4>
        </div>
    </div>

    <div class=grid id="beverage-grid">
        <div class=row>
            <?php $__currentLoopData = $beverages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beverage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <a href="/food/<?php echo e($beverage->id); ?>">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/<?php echo e($beverage->image); ?>" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px"><?php echo e($beverage->name); ?></p>
                </button>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div id="dessert-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">甜点 | Desserts</h4>
        </div>
    </div>

    <div class=grid id="dessert-grid">
        <div class=row>
            <?php $__currentLoopData = $dessert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dessert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <a href="/food/<?php echo e($dessert->id); ?>">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/<?php echo e($dessert->image); ?>" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px"><?php echo e($dessert->name); ?></p>
                </button>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <script src="/script.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/home.blade.php ENDPATH**/ ?>